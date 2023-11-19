<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - @yield('page-title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/logo/favicon.png') }}">

    <!-- Core css -->
    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet">

    <!-- page css -->
    @yield('css')

</head>

<body>
<div class="app">
    <div class="layout">
        <!-- Header START -->
        @include('layouts.admin.partials.header')
        <!-- Header END -->

        <!-- Side Nav START -->
        @include('layouts.admin.partials.sidebar')
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">


            <!-- Content Wrapper START -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- Content Wrapper END -->

            <!-- Footer START -->
            @include('layouts.admin.partials.footer')
            <!-- Footer END -->

        </div>
        <!-- Page Container END -->

        <!-- Search Start-->
        @include('layouts.admin.partials.search')
        <!-- Search End-->

        <!-- Quick View START -->
        @include('layouts.admin.partials.quick-view')
        <!-- Quick View END -->
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Core Vendors JS -->
<script src="{{ asset('assets/admin/js/vendors.min.js') }}"></script>

<!-- Core JS -->
<script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/global_functions.js') }}"></script>

<!-- page js -->
@yield('script')

</body>

</html>
