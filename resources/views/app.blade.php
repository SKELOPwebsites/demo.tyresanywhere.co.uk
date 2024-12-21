<!DOCTYPE html>
<html lang="en" class="scroll-smooth" style="font-size: 16px">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    @inertiaHead

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Google tag (gtag.js) -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-0BDH6DJNYY"></script>
    <script defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-0BDH6DJNYY');
    </script>

    @vite('resources/css/app.css')

{{--    it preloads on all pages--}}
{{--    <link rel="preload" fetchpriority="high" as="image" href="/assets/images/showcase/gallary/mobile-tyre-fitting-1.webp" type="image/webp">--}}
{{--    <link rel="preload" fetchpriority="high" as="image" href="/assets/images/showcase/gallary/mobile-tyre-fitting-1-500.webp" type="image/webp">--}}
{{--    <link rel="preload" fetchpriority="high" as="image" href="/assets/images/showcase/gallary/mobile-tyre-fitting-1-300.webp" type="image/webp">--}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body class="font-exo bg-gray-50">
@inertia

@vite('resources/js/app.js')
</body>
</html>
