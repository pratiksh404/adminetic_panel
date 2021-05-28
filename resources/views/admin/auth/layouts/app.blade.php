<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="{{ $setting->meta_description ?? config('adminetic.description', 'Laravel Adminetic Admin Panel Upgrade.') }}">
    <meta name="author" content="Pratik Shrestha">
    <link rel="icon"
        href="{{ asset(setting('favicon') ? 'storage/' . setting('favicon') : config('adminetic.favicon', 'static/favicon.png')) }}"
        type="image/x-icon">
    <link rel="shortcut icon"
        href="{{ asset(setting('favicon') ? 'storage/' . setting('favicon') : config('adminetic.favicon', 'static/favicon.png')) }}"
        type="image/x-icon">
    <title>{{ $title ?? ($setting->title ?? config('adminetic.name', 'Adminetic')) }}</title>
    {{-- ASSET LINKS --}}
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css" media="screen') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    {{-- Animate --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
</head>

<body>
    <div class="container-fluid">
        {{-- Content --}}
        @yield('content')
        {{-- ASSET SCRIPTS --}}
        <!-- latest jquery-->
        <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('assets/js/config.js') }}"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
</body>

</html>
