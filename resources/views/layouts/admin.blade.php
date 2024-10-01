<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        @include('components.header')

        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Footer -->
        {{-- @include('components.footer') --}}
    </div>
</body>

</html>
