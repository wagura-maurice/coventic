<!DOCTYPE html>
<html lang="{!! str_replace('_', '-', app()->getLocale()) !!}">

<head>
    <meta charset=" utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{!! strtoupper(config('app.name')) !!}">
    <meta name="author" content="{!! config('app.author') !!}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>{!! ucwords(strtolower(config('app.name'))) !!}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{!! asset('storage/template/images/favicon/apple-icon-57x57.png') !!}">
    <link rel="apple-touch-icon" sizes="60x60" href="{!! asset('storage/template/images/favicon/apple-icon-60x60.png') !!}">
    <link rel="apple-touch-icon" sizes="72x72" href="{!! asset('storage/template/images/favicon/apple-icon-72x72.png') !!}">
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('storage/template/images/favicon/apple-icon-76x76.png') !!}">
    <link rel="apple-touch-icon" sizes="114x114" href="{!! asset('storage/template/images/favicon/apple-icon-114x114.png') !!}">
    <link rel="apple-touch-icon" sizes="120x120" href="{!! asset('storage/template/images/favicon/apple-icon-120x120.png') !!}">
    <link rel="apple-touch-icon" sizes="144x144" href="{!! asset('storage/template/images/favicon/apple-icon-144x144.png') !!}">
    <link rel="apple-touch-icon" sizes="152x152" href="{!! asset('storage/template/images/favicon/apple-icon-152x152.png') !!}">
    <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('storage/template/images/favicon/apple-icon-180x180.png') !!}">
    <link rel="icon" type="image/png" sizes="192x192" href="{!! asset('storage/template/images/favicon/android-icon-192x192.png') !!}">
    <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('storage/template/images/favicon/favicon-32x32.png') !!}">
    <link rel="icon" type="image/png" sizes="96x96" href="{!! asset('storage/template/images/favicon/favicon-96x96.png') !!}">
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('storage/template/images/favicon/favicon-16x16.png') !!}">
    <link rel="manifest" href="{!! asset('storage/template/images/favicon/manifest.json') !!}">
    <!-- <meta name="msapplication-TileColor" content="#ffffff"> -->
    <!-- <meta name="msapplication-TileImage" content="{!! asset('storage/template/images/favicon/ms-icon-144x144.png') !!}"> -->
    <!-- <meta name="theme-color" content="#ffffff"> -->
    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"> -->
    <!-- Styles -->
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
</head>

<body>
    <div class="hero">
        <div class="navbar">
            <img src="{!! asset('storage/template/images/logo.png') !!}" class="logo">
            <button type="button">Sign Up</button>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            @yield('page-content')
        </div>
    </div>
</body>
<!-- Scripts -->
<script type="text/javascript" src="{!! mix('js/app.js') !!}"></script>
<script type="text/javascript" src="{!! mix('js/vendors.js') !!}"></script>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        //Disable cut copy paste
        $(document).bind('cut copy paste', function(e) {
            e.preventDefault();
        });
        // Disable mouse right click
        $(document).on("contextmenu", function(e) {
            return false;
        });
    });
</script> -->
@stack('scripts')

</html>