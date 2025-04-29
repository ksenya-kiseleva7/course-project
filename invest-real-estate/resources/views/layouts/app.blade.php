<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="icon" type="image/svg" href="/svg/favicon-MP.svg">--}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/libs.min.css" />
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css" />
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/libs.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    @vite(['resources/scss/main.scss', 'resources/js/app.js'])
    <title>MASTER PING - простые покупки сложных вещей</title>
</head>
<body>
{{--@include('partials/site/header')--}}

@yield('content')

{{--@include('partials/site/footer')--}}

{{--@include('partials/site/modals')--}}
</body>
</html>


