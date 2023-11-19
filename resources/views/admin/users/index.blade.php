@extends('layouts.admin.master')
@section('page-title', $title)
@section('css')
    <link href="{{ asset('assets/admin/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection
@section('content')

    <div class="page-header">
        <h2 class="header-title">Danh sách người dùng</h2>
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
            <p>
                Xin chào {{ auth()->user()->name }}, bạn có quyền
                <strong>{{ auth()->user()->roles->first()->name }}</strong>
            </p>
            <div class="row m-b-30">
                <div class="col">
                    <div class="d-md-flex">
                        <form class="row w-100" method="get">
                            <div class="col-3">
                                <select class="custom-select" style="min-width: 180px;" name="r">
                                    <option value="" selected>Quyền</option>
                                    @foreach($roles as $role)
                                        <option
                                            value="{{ $role->id }}"
                                            @selected(request()->get('r') == $role->id)
                                        >
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-7">
                                <input class="form-control" type="text" name="search" placeholder="Tìm theo tên/email"
                                       value="{{ request()->get('search') }}">
                            </div>
                            <div class="col-2">
                                <button class="btn btn-primary">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="data-table" class="table table-hover">
                    <thead>
                    <tr>
                        <th>
                            <div class="checkbox">
                                <input id="checkAll" type="checkbox">
                                <label for="checkAll" class="m-b-0"></label>
                            </div>
                        </th>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Họ tên</th>
                        <th>Quyền</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($list->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">Không có dữ liệu</td>
                        </tr>
                    @endif
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
                                {{ $item->email }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <h6 class="m-b-0 m-l-10">{{ $item->name }}</h6>
                                </div>
                            </td>
                            <td>
                                @role('super-admin')
                                <select name="role" class="form-select form-control" id="role-{{ $item->id }}">
                                    @foreach($roles as $role)
                                        <option
                                            value="{{ $role->id }}"
                                            {{ $item->roles->first()->id == $role->id ? 'selected' : '' }}
                                            @disabled(auth()->user()->id == $item->roles->first()->id)
                                        >
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @else
                                    {{ $item->roles->first()->name }}
                                    @endrole
                            </td>

                            @role('super-admin')
                            <td class="text-right">
                                <button class="btn btn-hover btn-outline-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter-{{ $item->id }}">
                                    Cập nhật
                                </button>
                                <div class="modal fade" id="exampleModalCenter-{{ $item->id }}">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Xác nhận cập
                                                    nhật
                                                    quyền mới cho người dùng {{ $item->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Hủy
                                                </button>
                                                <button type="button" class="btn btn-primary confirm-delete-btn"
                                                        data-id="{{ $item->id }}"
                                                        onclick="updateRole({{ $item->id }})">
                                                    Cập nhật
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            @endrole
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $list->links() }}
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

            @role('super-admin')
        let updateRole = function (id) {
            const role_id = $("#role-" + id).val();
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.users.update-role') }}',
                data: {
                    _token: token,
                    id: id,
                    role_id: role_id
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
        @endrole
    </script>
    <script src="{{ asset('assets/admin/js/pages/e-commerce-order-list.js') }}"></script>
@endsection

