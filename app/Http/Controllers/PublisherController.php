<?php

namespace App\Http\Controllers;

use App\Http\Requests\Publisher\StorePublisherRequest;
use App\Http\Requests\Publisher\UpdatePublisherRequest;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PublisherController extends Controller
{

    private string $folder = 'admin.publishers';
    private string $module = 'admin.publishers';

    public function __construct(
        private $model = new Publisher()
    )
    {
        View::share([
            'title' => 'Nhà Xuất Bản',
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
    public function store(StorePublisherRequest $request)
    {
        //
        $model = new Publisher();
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
    public function update(UpdatePublisherRequest $request, string $id)
    {
        //
        $item = $this->model->query()->findOrFail($id);
        $item->fill($request->all());
        $item->save();
        return redirect()->route("{$this->module}.index")->with('success', 'Cập nhật NXB thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Publisher::destroy($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Xóa NXB thành công',
        ]);
    }
}

