<?php

namespace App\Http\Controllers;

use App\Http\Requests\Author\StoreAuthorRequest;
use App\Http\Requests\Author\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AuthorController extends Controller
{

    private string $folder = 'admin.authors';
    private string $module = 'admin.authors';

    public function __construct(
        private $model = new Author()
    )
    {
        View::share([
            'title' => 'Tác Giả',
            'module' => $this->module,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $list = $this->model->get();
        return view("{$this->folder}.index", compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("{$this->folder}.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        //
        $model = new Author();
        $model->fill($request->all());
        $model->save();
        return redirect()->route("{$this->module}.index")->with('success', 'Thêm Tác giả thành công');
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
        $each = $this->model->query()->findOrFail($id);
        return view("{$this->folder}.edit", compact('each'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, string $id)
    {
        //
        $item = $this->model->query()->findOrFail($id);
        $item->fill($request->all());
        $item->save();
        return redirect()->route("{$this->module}.index")->with('success', 'Cập nhật Tác giả thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Author::destroy($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Xóa Tác giả thành công',
        ]);
    }
}

