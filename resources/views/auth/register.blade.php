<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng ký</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/logo/favicon.png') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
<div class="app">
    <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex"
         style="background-image: url('{{ asset('assets/admin/images/others/login-3.png') }}')">
        <div class="d-flex flex-column justify-content-between w-100">
            <div class="container d-flex h-100">
                <div class="row align-items-center w-100">
                    <div class="col-md-7 col-lg-5 m-h-auto">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between m-b-30">
                                    <img class="img-fluid" alt=""
                                         src="{{ asset('assets/admin/images/logo/logo.png') }}">
                                    <h2 class="m-b-0">Đăng ký</h2>
                                </div>
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="name">Tên:</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               placeholder="Tên" value="{{ old('name') }}">
                                        @error('name')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="email">Email:</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                               placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Mật khẩu:</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                               placeholder="Mật khẩu">
                                        @error('password')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="confirmPassword">Xác nhận mật
                                            khẩu:</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                               id="confirmPassword" placeholder="Xác nhận mật khẩu">
                                        @error('password_confirmation')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between p-t-15">
                                            <div class="checkbox">
                                                Đã có tài khoản, <a href="{{ route('login') }}">đăng nhập ngay</a>
                                            </div>
                                            <button class="btn btn-primary">Đăng ký</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex p-h-40 justify-content-between">
                <span class="">© 2019 ThemeNate</span>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="text-dark text-link" href="">Legal</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-dark text-link" href="">Privacy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Core Vendors JS -->
<script src="{{ asset('assets/admin/js/vendors.min.js') }}"></script>

<!-- page js -->

<!-- Core JS -->
<script src="{{ asset('assets/admin/js/app.min.js') }}"></script>

</body>

</html>
