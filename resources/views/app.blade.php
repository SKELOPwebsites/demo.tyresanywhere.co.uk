<!DOCTYPE html>
<html lang="en-GB" class="scroll-smooth" style="font-size: 16px">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Tyres Anywhere">

    @inertiaHead

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Preload the favicon for performance -->
    <link rel="preload" as="image" href="/favicon-32x32.png">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Tyres Anywhere",
        "image": "https://tyresanywhere.co.uk/assets/images/showcase/gallary/mobile-tyre-fitting-1.webp",
        "url": "https://tyresanywhere.co.uk",
        "telephone": "+44 7442 980101",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "19 Plumer Road",
            "addressLocality": "High Wycombe",
            "addressRegion": "Buckinghamshire",
            "postalCode": "HP11 2SS",
            "addressCountry": "GB"
        },
        "openingHours": "Mo-Su 00:00-23:59",
        "priceRange": "$",
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "51.62956863163383",
            "longitude": "-0.7653059946473589"
        },
        "serviceArea": {
            "@type": "Place",
            "name": "Beaconsfield, High Wycombe, and surrounding areas"
        }
    }
    </script>


    <!-- Google tag (gtag.js) -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=G-0BDH6DJNYY"></script>
    <script defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-0BDH6DJNYY');
    </script>

    @vite('resources/css/app.css')

    <link rel="preload" as="image" href="/assets/images/showcase/gallary/mobile-tyre-fitting-1.webp" type="image/webp" imagesrcset="
        /assets/images/showcase/gallary/mobile-tyre-fitting-1-1080.webp 1080w,
        /assets/images/showcase/gallary/mobile-tyre-fitting-1-500.webp 500w,
        /assets/images/showcase/gallary/mobile-tyre-fitting-1-300.webp 300w" 
        imagesizes="(min-width: 1536px) 413px,
                   (min-width: 1280px) 413px,
                   (min-width: 1024px) 360px,
                   (min-width: 768px) 560px,
                   (min-width: 640px) 432px,
                   300px"
        fetchpriority="high">
        
    <link rel="preload" href="https://fonts.gstatic.com/s/rubik/v28/iJWKBXyIfDnIV7nBrXyw023e.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@200;300;400;500;600;700;800&family=Montserrat:wght@200;300;400;500;600;700;800&family=Open+Sans:wght@200;300;400;500;600;700;800&family=Rubik:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

</head>
<body class="font-exo bg-gray-50" lang="en-GB" aria-label="Tyres Anywhere - Mobile Tyre Fitting">
@inertia

@vite('resources/js/app.js')
</body>
</html>
