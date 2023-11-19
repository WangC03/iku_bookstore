@extends('layouts.admin.master')
@section('page-title', $title)
@section('css')
    <link href="{{ asset('assets/admin/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection
@section('content')

    <div class="page-header">
        <h2 class="header-title">Danh sách sách</h2>
        {{--        <div class="header-sub-title">--}}
        {{--            <nav class="breadcrumb breadcrumb-dash">--}}
        {{--                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>--}}
        {{--                <a class="breadcrumb-item" href="#">Apps</a>--}}
        {{--                <a class="breadcrumb-item" href="#">E-commerce</a>--}}
        {{--                <span class="breadcrumb-item active">Orders List</span>--}}
        {{--            </nav>--}}
        {{--        </div>--}}
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-8">
                    {{--                    <div class="d-md-flex">--}}
                    {{--                        <div class="m-b-10 m-r-15">--}}
                    {{--                            <select class="custom-select" style="min-width: 180px;">--}}
                    {{--                                <option selected>Catergory</option>--}}
                    {{--                                <option value="all">All</option>--}}
                    {{--                                <option value="homeDeco">Home Decoration</option>--}}
                    {{--                                <option value="eletronic">Eletronic</option>--}}
                    {{--                                <option value="jewellery">Jewellery</option>--}}
                    {{--                            </select>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="m-b-10">--}}
                    {{--                            <select class="custom-select" style="min-width: 180px;">--}}
                    {{--                                <option selected>Status</option>--}}
                    {{--                                <option value="all">All</option>--}}
                    {{--                                <option value="inStock">In Stock </option>--}}
                    {{--                                <option value="outOfStock">Out of Stock</option>--}}
                    {{--                            </select>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                <div class="col-lg-4 text-right">
                    <a class="btn btn-primary text-decoration-none" href="{{ route("{$module}.create") }}">
                        <i class="anticon anticon-plus-circle m-r-5"></i>
                        <span>Thêm sách mới</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table id="data-table" class="table table-hover e-commerce-table">
                    <thead>
                    <tr>
                        <th>
                            <div class="checkbox">
                                <input id="checkAll" type="checkbox">
                                <label for="checkAll" class="m-b-0"></label>
                            </div>
                        </th>
                        <th>ID</th>
                        <th></th>
                        <th>Tiêu đề</th>
                        {{--                        <th>Thể loại</th>--}}
                        <th>Ngôn ngữ</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Ngày xuất bản</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <input id="check-item-6" type="checkbox">
                                    <label for="check-item-6" class="m-b-0"></label>
                                </div>
                            </td>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                <img src="{{ $item->external_url ?? '' }}" width="100" alt="">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route("{$module}.show", $item) }}"
                                       class="m-b-0 m-l-10">{{ $item->title }}</a>
                                </div>
                            </td>
                            {{--                            <td>{{ !empty($item->genres) ? $item->genres->pluck('name')->implode(', ') : "Chưa có" }}</td>--}}
                            {{--                            <td>--}}
                            {{--                                @if(!empty($item->genres))--}}
                            {{--                                    @foreach($item->genres as $genre)--}}
                            {{--                                        <span class="badge badge-pill badge-orange">{{ $genre->name }}</span>--}}
                            {{--                                    @endforeach--}}
                            {{--                                @else--}}
                            {{--                                    <span class="badge badge-pill badge-cyan">Chưa có</span>--}}
                            {{--                                @endif--}}
                            {{--                            </td>--}}
                            <td>
                                {{ $item->language->name ?? "Chưa có" }}
                            </td>
                            <td>
                                {{ $item->sale_price ?? $item->regular_price }} đ
                            </td>
                            <td>
                                {{ $item->quantity }}
                            </td>
                            <td>
                                {{ Carbon\Carbon::parse($item->publication_date)->format('d/m/Y') }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    @if ($item->status == 1)
                                        <div class="badge badge-success badge-dot m-r-10"></div>
                                        <div>Đang bán</div>
                                    @else
                                        <div class="badge badge-danger badge-dot m-r-10"></div>
                                        <div>Không bán</div>
                                    @endif
                                </div>
                            </td>
                            <td class="text-right">
                                <a class="btn btn-icon btn-hover btn-sm btn-rounded pull-right text-decoration-none"
                                   href="{{ route("{$module}.edit", $item->id) }}">
                                    <i class="anticon anticon-edit"></i>
                                </a>
                                <button class="btn btn-icon btn-hover btn-sm btn-rounded" data-toggle="modal"
                                        data-target="#exampleModalCenter-{{ $item->id }}">
                                    <i class="anticon anticon-delete"></i>
                                </button>
                                <div class="modal fade" id="exampleModalCenter-{{ $item->id }}">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Xác nhận xóa
                                                    sách {{ $item->title }}</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Hủy
                                                </button>
                                                <button type="button" class="btn btn-danger confirm-delete-btn"
                                                        data-id="{{ $item->id }}"
                                                        onclick="deleteFunc('{{ route("{$module}.destroy", $item->id) }}', '{{ $item->id }}')">
                                                    Xóa
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/admin/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/notify/notify.min.js') }}"></script>
    <script>
        const token = "{{ csrf_token() }}";
        @if(session('success'))
        $.notify("{{ session('success') }}", {
            className: 'success',
            autoHideDelay: 2000,
        });
        @endif
        let deleteFunc = function (url, id) {
            $.ajax({
                type: 'DELETE',
                url: url,
                data: {
                    _token: token
                },
                success: res => {
                    console.log(res);
                    $.notify(res.message, res.status);
                    $("#exampleModalCenter-" + id).modal('hide');
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                },
                error: err => {
                    console.log(err)
                    $.notify(err.message, "error");
                }
            })
        }
    </script>
    <script src="{{ asset('assets/admin/js/pages/e-commerce-order-list.js') }}"></script>
@endsection
