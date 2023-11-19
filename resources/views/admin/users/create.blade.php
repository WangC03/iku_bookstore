@extends('layouts.admin.master')
@section('page-title', $title)
@section('content')
    <form action="{{ route("{$module}.store") }}" method="post">
        @csrf
        <div class="page-header no-gutters has-tab">
            <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                <div class="media align-items-center m-b-15">
                    <div class="m-l-15">
                        <h4 class="m-b-0">Thêm Tác giả</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="product-edit-basic">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-semibold" for="name">Tác giả</label>
                            <input type="text" class="form-control mb-2" name="name" id="name"
                                   placeholder="Tên tác giả"
                                   value="{{ old('name') }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="m-b-15">
                            <button class="btn btn-primary">
                                <i class="anticon anticon-save"></i>
                                <span>Thêm</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('css')
@endsection
@section('script')
@endsection

