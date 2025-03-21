<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Role Permission</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>

    </style>
</head>

<body>

@include('admin.header')

@include('admin.sideNav')


<main id="main" class="main" style="height: 100vh;">
    @yield('content')
</main>


{{--<main id="main" class="main">--}}

{{--    <div class="pagetitle">--}}
{{--        <h1>Dashboard</h1>--}}
{{--        <nav>--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>--}}
{{--                <li class="breadcrumb-item active">Dashboard</li>--}}
{{--            </ol>--}}
{{--        </nav>--}}
{{--    </div><!-- End Page Title -->--}}

{{--    <section class="section dashboard" style="height: 1000vh;">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xxl-4 col-md-3">--}}
{{--                <div class="card info-card sales-card">--}}

{{--                    <div class="filter">--}}
{{--                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>--}}
{{--                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">--}}
{{--                            <li class="dropdown-header text-start">--}}
{{--                                <h6>Filter</h6>--}}
{{--                            </li>--}}

{{--                            <li><a class="dropdown-item" href="#">Today</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">This Month</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">This Year</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">Sales <span>| Today</span></h5>--}}

{{--                        <div class="d-flex align-items-center">--}}
{{--                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">--}}
{{--                                <i class="bi bi-cart"></i>--}}
{{--                            </div>--}}
{{--                            <div class="ps-3">--}}
{{--                                <h6>145</h6>--}}
{{--                                <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</main><!-- End #main -->--}}

@include('admin.footer')


<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>