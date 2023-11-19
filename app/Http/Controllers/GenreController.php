<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\StoreBookRequest;
use App\Http\Requests\Genre\StoreGenreRequest;
use App\Http\Requests\Genre\UpdateBookRequest;
use App\Http\Requests\Genre\UpdateGenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GenreController extends Controller
{

    private string $folder = 'admin.genres';
    private string $module = 'admin.genres';

    public function __construct(
        private $model = new Genre()
    )
    {
        View::share([
            'title' => 'Thể loại',
            'module' => $this->module,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $list = $this->model->with('genre')->get();
        return view("{$this->folder}.index", compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $list = $this->model->all();
        return view("{$this->folder}.create", compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        //
        $model = new Genre();
        $model->fill($request->all());
        $model->save();
        return redirect()->route("{$this->module}.index")->with('success', 'Thêm thể loại thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $list = $this->model->query()->where('id', '<>', $id)->get();
        $each = $this->model->query()->findOrFail($id);
        return view("{$this->folder}.edit", compact('list', 'each'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, string $id)
    {
        //
        $item = $this->model->query()->findOrFail($id);
        $item->fill($request->all());
        $item->save();
        return redirect()->route("{$this->module}.index")->with('success', 'Cập nhật thể loại thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Genre::destroy($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Xóa thể loại thành công',
        ]);
    }
}
