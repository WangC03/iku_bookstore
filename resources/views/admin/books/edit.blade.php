@extends('layouts.admin.master')
@section('page-title', $title)
@section('content')
    <form action="{{ route("{$module}.update", $each->id) }}" method="post" id="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="page-header no-gutters has-tab p-3">
            <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                <div class="media align-items-center m-b-15">
                    <div class="m-l-15">
                        <h4 class="m-b-0">Sửa sách {{ $each->title }}</h4>
                    </div>
                </div>
            </div>

            <div class="w-100 text-center">
                <img src="{{ $each->external_url }}" alt="" width="300px" class="border-rounded">
            </div>
        </div>
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="product-edit-basic">
                <div class="card">
                    <input type="hidden" name="id" value="{{ $each->id }}">
                    <input type="hidden" name="id" value="{{ $each->id }}">
                    <div class="card-body">
                        <input type="hidden" name="isbn" value="{{ $each->isbn }}">
                        <div class="form-group">
                            <label class="font-weight-semibold" for="title">Tiêu đề</label>
                            <input type="text" class="form-control mb-2" name="title" id="title"
                                   placeholder="Tiêu đề"
                                   value="{{ old('title') ?? $each->title }}">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="productPrice">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug"
                                   value="{{ old('slug') ?? $each->slug }}">
                            @error('slug')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="genres">Thể loại</label>
                                    <select name="genres[]" class="custom-select select2" id="genres"
                                            multiple="multiple">
                                        @foreach($genres as $genre)
                                            <option
                                                @selected((old('genres') && in_array($genre->id, old('genres'))) || (!empty($each->genres->pluck('id')->toArray()) && in_array($genre->id, $each->genres->pluck('id')->toArray()))) value="{{ $genre->id }}">{{ $genre->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('genres')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="authors">Tác giả</label>
                                    <select name="authors[]" class="custom-select select2" id="authors"
                                            multiple="multiple">
                                        @foreach($authors as $author)
                                            <option
                                                @selected((old('authors') && in_array($author->id, old('authors'))) || (!empty($each->authors->pluck('id')->toArray()) && in_array($author->id, $each->authors->pluck('id')->toArray()))) value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('authors')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="language_id">Ngôn ngữ</label>
                                    <select name="language_id" id="language_id"
                                            class="select2 form-select form-control">
                                        <option value="">Chọn ngôn ngữ</option>
                                        @foreach($languages as $language)
                                            <option
                                                @selected((old('language_id') == $language->id) || ($language->id == $each->language_id)) value="{{ $language->id }}">{{ $language->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('language_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="publisher_id">Nhà xuất bản</label>
                                    <select name="publisher_id" id="publisher_id"
                                            class="select2 form-select form-control">
                                        <option value="">Chọn nhà xuất bản</option>
                                        @foreach($publishers as $publisher)
                                            <option
                                                @selected((old('publisher_id') == $publisher->id) || ($publisher->id == $each->publisher_id)) value="{{ $publisher->id }}">{{ $publisher->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('publisher_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="numPages">Số trang</label>
                                    <input type="text" class="form-control" name="number_of_pages" id="numPages"
                                           placeholder="Số trang"
                                           value="{{ old('number_of_pages') ?? $each->number_of_pages }}">
                                    @error('number_of_pages')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="regular_price">Giá</label>
                                    <input type="text" class="form-control" name="regular_price" id="regular_price"
                                           placeholder="Giá"
                                           value="{{ old('regular_price') ?? $each->regular_price }}">
                                    @error('regular_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="sale_price">Giá khuyến mại</label>
                                    <input type="text" class="form-control" name="sale_price" id="sale_price"
                                           placeholder="Giá khuyến mại"
                                           value="{{ old('sale_price') ?? $each->sale_price }}">
                                    @error('sale_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="quantity">Số lượng</label>
                                    <input type="text" class="form-control" name="quantity" id="quantity"
                                           placeholder="Số lượng"
                                           value="{{ old('quantity') ?? $each->quantity }}">
                                    @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="status">Trạng thái</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="" selected>Chọn trạng thái</option>
                                        <option @selected(old('status') == 0 || $each->status == 0) value="0">Không
                                            bán
                                        </option>
                                        <option @selected(old('status') == 1 || $each->status == 1) value="1">Đang bán
                                        </option>
                                    </select>
                                    @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="publication_date">Ngày phát hành</label>
                                    <input type="text" class="form-control datepicker-input" name="publication_date"
                                           id="publication_date" placeholder="Ngày phát hành"
                                           value="{{ old('publication_date') ?? \Carbon\Carbon::parse($each->publication_date)->format('d/m/Y') }}">
                                    @error('publication_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group w-100">
                            <label class="font-weight-semibold" for="">Mô tả</label>
                            <div id="productDescription" class="w-100">
                                {!! html_entity_decode(old('description') ?? $each->description) !!}
                            </div>
                            <input type="hidden" name="description" id="description">
                        </div>
                        <div class="form-group custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Ảnh sản phầm</label>
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
    <script src="{{ asset('assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/quill/quill.min.js') }}"></script>
    <script>
        $('.datepicker-input').datepicker({
            format: 'dd/mm/yyyy'
        })
        $('.select2').select2();
        const nameElement = $('#title');
        const slugElement = $('#slug');
        nameElement.on('keyup', function () {
            slugElement.val(convertToSlug(nameElement.val()));
        });
        new Quill('#productDescription', {
            theme: 'snow',
        });

        $('#form').submit(e => {
            $('#description').val($('.ql-editor').html());
        })
    </script>
    {{--        <script src="{{ asset('assets/admin/js/pages/e-commerce-product-edit.js') }}"></script>--}}
@endsection
