<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- Core css -->
    {{--    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet">--}}

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block
        }

        body {
            margin: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        .table {
            color: #53535f;
            width: 100%;
            margin-bottom: 1rem;
            border-collapse: collapse;
            text-indent: initial;
            border-spacing: 2px;
            border-color: gray;
        }

        .table > thead > tr > th {
            border-color: #ededed;
            padding: 15px;
        }

        .card {
            position: relative;
            background-color: #fff;
            margin-bottom: 1.25rem;
            border-radius: 0.25rem;
            transition: all .3s ease-in-out;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
        }

        .container {
            max-width: 960px;
            margin: 0px auto;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
        }

        .app {
            padding: 15px;
        }
    </style>
</head>

<body>
<div class="app">

    <!-- Page Container START -->
    <div class="container">


        <!-- Content Wrapper START -->
        <div class="main-content">
            <div class="card">
                <div class="card-body">
                    <div id="invoice" class="p-h-30">
                        <div class="m-t-15 lh-2">
                            <div class="float-right">
                                <h2>Hóa đơn</h2>
                            </div>
                        </div>
                        <div class="row m-t-20 lh-2" style="display: flex; justify-content: space-between">
                            <div class="col-sm-9">
                                <h3 class="p-l-10 m-t-10">Thông tin khách hàng:</h3>
                                <address class="p-l-10 m-t-10">
                                    <span class="font-weight-semibold text-dark">{{ $order->name }}</span><br>
                                    <span>Số điện thoại: {{ $order->tel }}</span> <br>
                                    <span>Địa chỉ: {{ $order->address }}</span><br>
                                </address>
                            </div>
                            <div class="col-sm-3">
                                <div class="m-t-80" style="display: flex">
                                    <div class="text-dark text-uppercase d-inline-block">
                                        <span class="font-weight-semibold text-dark" style="margin-right: 4px;">Hóa đơn số :</span>
                                        <span class="float-right">#{{ $order->id }}</span>
                                    </div>
                                </div>
                                <div class="text-dark text-uppercase d-inline-block" style="display: flex">
                                    <span class="font-weight-semibold text-dark" style="margin-right: 4px">Ngày :</span>
                                    <span
                                        class="float-right">{{ Carbon\Carbon::make($order->created_at)->format('d/m/Y') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-20">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>Giá</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach($order->orderDetails as $order_detail)
                                        <tr>
                                            <th>{{ $i++ }}</th>
                                            <td>{{ $order_detail->book->title }}</td>
                                            <td>{{ $order_detail->quantity }}</td>
                                            <td>${{ $order_detail->price }}</td>
                                            <td>${{ $order_detail->price * $order_detail->quantity }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row m-t-30 lh-1-8">
                                <div class="col-sm-12">
                                    <div class="float-right text-right">
                                        <h3><span class="font-weight-semibold text-dark">Thành tiền :</span>
                                            ${{ $order->total }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
