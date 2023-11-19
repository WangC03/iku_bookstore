@extends('layouts.admin.master')
@section('page-title', "Đơn hàng")
@section('css')
    <link href="{{ asset('assets/admin/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection
@section('content')
    <div class="page-header">
        <h2 class="header-title">Danh sách đơn hàng</h2>
    </div>
    <div class="card">

        <div class="card-body">
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
                        <th>Ngày đặt</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
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
                                    {{ \Carbon\Carbon::make($item->created_at)->format('d/m/Y') }}
                                </div>
                            </td>
                            <td>
                                {{ number_format($item->total) }} $
                            </td>
                            <td>
                                <select name="status" id="status-{{ $item->id }}" class="form-control form-select">
                                    @foreach(config('util.STATUS') as $statusKey => $status)
                                        <option
                                            value="{{ $statusKey }}"
                                            @selected($item->status == $statusKey)
                                        >{{ $status }}</option>
                                    @endforeach
                                </select>
                            </td>

                            <td class="text-right">
                                @if($item->status != 0)
                                    <button class="btn btn-hover btn-outline-primary" data-toggle="modal"
                                            data-target="#exampleModalCenter-{{ $item->id }}">
                                        Cập nhật
                                    </button>
                                    <a href="{{ route('admin.orders.export-invoice', $item->id) }}"
                                       class="btn btn-hover btn-outline-primary">
                                        Xuất hóa đơn
                                    </a>
                                    <div class="modal fade" id="exampleModalCenter-{{ $item->id }}">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Xác nhận cập
                                                        nhật trạng thái cho đơn hàng này</h5>
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
                                                            onclick="updateStatus({{ $item->id }})">
                                                        Cập nhật
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
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

        let updateStatus = function (id) {
            const status = $("#status-" + id).val();
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.orders.update-status') }}',
                data: {
                    _token: token,
                    id: id,
                    status: status
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
@endsection
