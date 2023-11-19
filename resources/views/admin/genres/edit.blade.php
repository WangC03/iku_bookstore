@extends('layouts.admin.master')
@section('page-title', $title)
@section('content')
    <form action="{{ route("{$module}.update", $each->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="page-header no-gutters has-tab">
            <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                <div class="media align-items-center m-b-15">
                    <div class="m-l-15">
                        <h4 class="m-b-0">Sửa thể loại {{ $each->name }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="product-edit-basic">
                <div class="card">
                    <input type="hidden" name="id" value="{{ $each->id }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-semibold" for="name">Tên thể loại</label>
                            <input type="text" class="form-control mb-2" name="name" id="name"
                                   placeholder="Tên thể loại"
                                   value="{{ old('name') ?? $each->name }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="productPrice">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug"
                                   value="{{ old('slug') ?? $each->slug }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="parent_id">Thể loại cha</label>
                            <select name="parent_id" class="custom-select select2" id="parent_id">
                                <option value="" selected>Không có</option>
                                @foreach($list as $item)
                                    <option
                                        @selected(old('parent_id') == $item->id || (!empty($each->genre->id) && $each->genre->id == $item->id)) value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="m-b-15">
                            <button class="btn btn-primary">
                                <i class="anticon anticon-save"></i>
                                <span>Sửa</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('css')
    <link href="{{ asset('assets/admin/vendors/select2/select2.css') }}" rel="stylesheet">
@endsection
@section('script')
    <script src="{{ asset('assets/admin/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/quill/quill.min.js') }}"></script>
    <script>
        $('.select2').select2();
        const nameElement = $('#name');
        const slugElement = $('#slug');
        nameElement.on('keyup', function () {
            slugElement.val(convertToSlug(nameElement.val()));
        });
    </script>
    {{--    <script src="{{ asset('assets/admin/js/pages/e-commerce-product-edit.js') }}"></script>--}}
@endsection
