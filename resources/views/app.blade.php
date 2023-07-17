<!DOCTYPE html>
<html lang="en" class="scroll-smooth" style="font-size: 16px">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta property="og:site_name" content="Tyres Anywhere" />

{{--    <title>{{ $page['props']['seo']['title']  }}</title>--}}
{{--    <meta name="description" content="{{ $page['props']['seo']['description']  }}">--}}
{{--    <meta name="keywords" content="{{ $page['props']['seo']['keywords']  }}">--}}
{{--    <link rel="canonical" href="{{ $page['props']['seo']['canonical']  }}">--}}

    @inertiaHead

{{--    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">--}}
{{--    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">--}}
{{--    <link rel="manifest" href="/site.webmanifest">--}}


{{--    <!-- Google tag (gtag.js) -->--}}
{{--    <script async src="https://www.googletagmanager.com/gtag/js?id=G-30N175X6M8"></script>--}}
{{--    <script>--}}
{{--        window.dataLayer = window.dataLayer || [];--}}
{{--        function gtag(){dataLayer.push(arguments);}--}}
{{--        gtag('js', new Date());--}}

{{--        gtag('config', 'G-30N175X6M8');--}}
{{--    </script>--}}
</head>
<body class="font-poppins bg-gray-50">
@inertia
@vite('resources/js/app.js')
</body>
</html>
