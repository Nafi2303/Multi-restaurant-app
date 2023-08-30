<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="fonts.googleapis.com/csse3e5.css?family=Montserrat:400,700">
    <link rel="stylesheet" type="text/css" href="fonts.googleapis.com/csse0bd.css?family=Open+Sans:400,700,800">
    <link rel="stylesheet" type="text/css" href="fonts.googleapis.com/css41a9.css?family=Fjalla+One">
    <link rel="stylesheet" type="text/css" href="fonts.googleapis.com/css6079.css?family=Poppins:300,400,500,600,700">
    <link rel="stylesheet" type="text/css" href="fonts.googleapis.com/css01c8.css?family=Roboto:400,700">
    <!-- Google Font Family Link End -->
    <!-- Bootstrap Link Start-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="assets/css/bootstrap-slider.css" rel="stylesheet">
    <!-- Bootstrap Link End-->
    <!-- Iconmoon Link Start-->
    <link href="assets/css/iconmoon.css" rel="stylesheet">
    <!-- Iconmoon Link End-->
    <!-- Animate Link Start-->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Animate Link End-->
    <!-- Chosen Link Start-->
    <link href="assets/css/chosen.css" rel="stylesheet">
    <!-- Chosen Link End-->
    <!-- Swiper Link Start-->
    <link href="assets/css/swiper.css" rel="stylesheet">
    <!-- Swiper Link End-->
    <!-- Woocommerce Link Start-->
    <link href="assets/css/woocommerce.css" rel="stylesheet">
    <!-- Woocommerce Link End-->
    <!-- Pretty Photo Link Start-->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <!-- Pretty Photo Link End-->
    <!-- Jquery UI Link Start-->
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Jquery UI Link End-->
    <!-- Themes / plugin Link Start-->
    <link href="css/style.css" rel="stylesheet">
    <link href="assets/css/cs-foodbakery-plugin.css" rel="stylesheet">
    <link href="assets/css/color-mexican-restaurant.css" rel="stylesheet">
    <link href="assets/css/widget.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/rtl.css" rel="stylesheet">
    <!-- Themes / plugin Link End-->
    <script src="ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/bootstrap.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-500">
            <div>
                <a href="/">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    <img src="assets/extra-images/logo.png" alt="Logo" srcset="">
                </a>
            </div>

            {{-- <div class="w-auto mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg"> --}}
                {{ $slot }}
            {{-- </div> --}}
        </div>
    </body>
</html>
