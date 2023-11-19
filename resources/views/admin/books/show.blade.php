@extends('layouts.admin.master')
@section('page-title', "{$title} - {$item->title}")
@section('content')
    <div class="page-header no-gutters has-tab">
        <div class="d-md-flex m-b-15 align-items-center justify-content-between">
            <div class="media align-items-center m-b-15">
                <div class="avatar avatar-image rounded" style="height: 70px; width: 70px">
                    <img src="{{ $item->external_url }}" alt="">
                </div>
                <div class="m-l-15">
                    <h4 class="m-b-0">{{ $item->title }}</h4>
                    <p class="text-muted m-b-0">Mã sản phẩm: #{{ $item->id }}</p>
                    <p class="text-muted m-b-0">ISBN: {{ $item->isbn }}</p>
                </div>
            </div>
            <div class="m-b-15">
                <a class="btn btn-primary text-decoration-none" href="{{ route("{$module}.edit", $item) }}">
                    <i class="anticon anticon-edit"></i>
                    <span>Sửa</span>
                </a>
            </div>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#product-overview">Tổng quan</a>
            </li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="product-overview">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <i class="font-size-40 text-success anticon anticon-smile"></i>
                                    <div class="m-l-15">
                                        <p class="m-b-0 text-muted">10 ratings</p>
                                        <div class="star-rating m-t-5">
                                            <input type="radio" id="star3-5" name="rating-3" value="5" checked
                                                   disabled/><label for="star3-5" title="5 star"></label>
                                            <input type="radio" id="star3-4" name="rating-3" value="4" disabled/><label
                                                for="star3-4" title="4 star"></label>
                                            <input type="radio" id="star3-3" name="rating-3" value="3" disabled/><label
                                                for="star3-3" title="3 star"></label>
                                            <input type="radio" id="star3-2" name="rating-3" value="2" disabled/><label
                                                for="star3-2" title="2 star"></label>
                                            <input type="radio" id="star3-1" name="rating-3" value="1" disabled/><label
                                                for="star3-1" title="1 star"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <i class="font-size-40 text-primary anticon anticon-shopping-cart"></i>
                                    <div class="m-l-15">
                                        <p class="m-b-0 text-muted">Sales</p>
                                        <h3 class="m-b-0 ls-1">1,521</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <i class="font-size-40 text-primary anticon anticon-message"></i>
                                    <div class="m-l-15">
                                        <p class="m-b-0 text-muted">Reviews</p>
                                        <h3 class="m-b-0 ls-1">27</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <i class="font-size-40 text-primary anticon anticon-stock"></i>
                                    <div class="m-l-15">
                                        <p class="m-b-0 text-muted">Số lượng</p>
                                        <h3 class="m-b-0 ls-1">{{ $item->quantity }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin cơ bản</h4>
                        <div class="table-responsive">
                            <table class="product-info-table m-t-20">
                                <tbody>
                                <tr>
                                    <td>Giá gốc:</td>
                                    <td class="text-dark font-weight-semibold">{{ $item->regular_price }} đ</td>
                                </tr>
                                <tr>
                                    <td>Giá khuyến mãi:</td>
                                    <td class="text-dark font-weight-semibold">{{ $item->sale_price ?? "Không có" }}đ
                                    </td>
                                </tr>
                                <tr>
                                    <td>Thể loại:</td>
                                    <td>
                                        @foreach($item->genres as $genre)
                                            <span class="badge badge-pill badge-orange">{{ $genre->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tác giả:</td>
                                    <td>
                                        @foreach($item->authors as $author)
                                            <span class="badge badge-pill badge-gold">{{ $author->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số trang:</td>
                                    <td>{{ $item->number_of_pages }} trang</td>
                                </tr>
                                <tr>
                                    <td>Số lượng:</td>
                                    <td>{{ $item->quantity }}</td>
                                </tr>
                                <tr>
                                    <td>Ngôn ngữ:</td>
                                    <td>{{ $item->language->name }}</td>
                                </tr>
                                <tr>
                                    <td>NXB:</td>
                                    <td>{{ $item->publisher->name }}</td>
                                </tr>
                                <tr>
                                    <td>Ngày xuất bản:</td>
                                    <td>{{ Carbon\Carbon::parse($item->publication_date)->format('d/m/Y') }}</td>
                                </tr>
                                <tr>
                                    <td>Trạng thái:</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="badge badge-pill badge-cyan">Đang bán</span>
                                        @else
                                            <span class="badge badge-pill badge-red">Không bán</span>
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Mô tả sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        {!! $item->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
