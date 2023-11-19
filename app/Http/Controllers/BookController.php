<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Requests\Book\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use App\Services\Traits\TUploadImage;
use Illuminate\Support\Str;

class BookController extends Controller
{

    use TUploadImage;

    private string $folder = 'admin.books';
    private string $module = 'admin.books';

    public function __construct(
        private $model = new Book(),
        private $author = new Author(),
        private $genre = new Genre(),
        private $language = new Language(),
        private $publisher = new Publisher()
    )
    {
        View::share([
            'title' => 'Sách',
            'module' => $this->module,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
//        dd(auth()->user()->roles);
//        dd($this->model->query()->findOrFail(1)->external_url);
        $list = $this->model->with(['language'])->get();
        return view("{$this->folder}.index", compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $list = $this->model->all();
        $authors = $this->author->all();
        $genres = $this->genre->all();
        $languages = $this->language->all();
        $publishers = $this->publisher->all();
        return view("{$this->folder}.create", compact('list', 'authors', 'genres', 'languages', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
        $model = $this->model;
        $model->fill($request->all());
        $model->publication_date = Carbon::make(Str::replace('/', '-', $request->publication_date))->format('Y-m-d');
//        dd($request->file('image'));
        $model->external_url = $this->uploadFile($request->file('image'));
        $model->save();
        $model->genres()->attach($request->genres);
        $model->authors()->attach($request->authors);
        return redirect()->route("{$this->module}.index")->with('success', 'Thêm thể loại thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $item = $this->model->query()->with('authors', 'genres')->findOrFail($id);
        return view("{$this->folder}.show", compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $authors = $this->author->all();
        $genres = $this->genre->all();
        $languages = $this->language->all();
        $publishers = $this->publisher->all();
        $list = $this->model->query()->where('id', '<>', $id)->get();
        $each = $this->model->query()->with('authors', 'genres')->findOrFail($id);
        return view("{$this->folder}.edit", compact('list', 'each', 'authors', 'genres', 'languages', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, string $id)
    {
        //
        $item = $this->model->query()->findOrFail($id);
        $item->fill($request->all());
        $item->publication_date = date('Y-m-d', strtotime($request->publication_date));
        if ($request->hasFile('image')) {
            $item->external_url = $this->uploadFile($request->file('image'));
        }
        $item->save();
        DB::table('genres_books')->where('book_id', $id)->delete();
        DB::table('authors_books')->where('book_id', $id)->delete();
        $item->genres()->attach($request->genres);
        $item->authors()->attach($request->authors);
        return redirect()->route("{$this->module}.index")->with('success', 'Cập nhật thể loại thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $this->model->destroy($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Xóa thể loại thành công',
        ]);
    }
}
