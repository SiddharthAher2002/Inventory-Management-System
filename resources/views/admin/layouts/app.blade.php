<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IMS</title>
    <!-- Adminlte -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
        integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
    <!-- Data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    @yield('style')
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <div class="app-wrapper">
        @include('admin.includes.main-navbar')
        @include('admin.includes.vertical-navbar')

        <main class="app-main">
            @include('admin.includes.content-header')
            @yield('content')
        </main>
        @include('admin.includes.footer')
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
    <!-- AdminLte -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script>
    <script src="{{asset('adminlte/js/adminlte.min.js')}}"></script>
    <!-- Data table -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    @yield( 'script')
</body>

</html>