<?php
     $meta_title = GetTranslatedText( 'Spark Project', $this->LanguageCode );
     $meta_description = GetTranslatedText( 'Spark Project', $this->LanguageCode );
     $meta_image_path = '/favicon-512x512.png';
     $meta_keywords = GetTranslatedText( 'spark, project', $this->LanguageCode );
     $meta_street_address = GetTranslatedText( 'Atomium Place 1', $this->LanguageCode );
     $meta_postal_code = '1000';
     $meta_city_name = GetTranslatedText( 'Brussels', $this->LanguageCode );
     $meta_country_name = 'Belgium';
     $meta_country_code = 'BE';
     $meta_latitude = '50.89472';
     $meta_longitude = '4.34111';
     $meta_radius = '50000';
     $meta_offer_name = 'Touristic Services';
     $meta_service_name = GetTranslatedText( 'Touristic Visit', $this->LanguageCode );
     $meta_service_description = GetTranslatedText( 'Visit of the Atomium', $this->LanguageCode );
     $meta_opening_hours = GetTranslatedText( 'Mo-Fr 09:00-18:00', $this->LanguageCode );
     $meta_contact_phone = '+3223223223';
     $meta_contact_email = 'contact@spark-project.com';
     $meta_page_url_array = [ 'https://www.facebook.com/spark-project', 'https://www.linkedin.com/spark-project' ];

     $sub_route_character_index = GetTextPosition( $this->Route, '/#' );

    if ( $sub_route_character_index !== false )
    {
         $route = substr( $this->Route, 0, $sub_route_character_index );
         $sub_route = substr( $this->Route, $sub_route_character_index );
    }
    else
    {
        $route = $this->Route;
        $sub_route = '';
    }

     $meta_page_url = $route;

    if ( $route === 'home' )
    {
        $meta_page_url = '';
    }

    if ( isset( $this->PageByRouteMap[ $route ] ) )
    {
         $page = $this->PageByRouteMap[ $route ];

        $meta_title = GetTranslatedText( $page->MetaTitle, $this->LanguageCode );
        $meta_description = GetTranslatedText( $page->MetaDescription, $this->LanguageCode );
        $meta_image_path = $page->MetaImagePath;

        if ( $meta_image_path === '' )
        {
            $meta_image_path = '/static/image/meta/preview.jpg';
        }

        if ( $sub_route !== '' )
        {
             $sub_route_index = array_search( $sub_route, $page->SubRouteArray, true );

            if ( $sub_route_index !== false )
            {
                $meta_title = GetTranslatedText( $page->MetaSubTitleArray[ $sub_route_index ], $this->LanguageCode );
                $meta_description = GetTranslatedText( $page->MetaSubDescriptionArray[ $sub_route_index ], $this->LanguageCode );
            }
        }
    }

    if ( !HasPrefix( $meta_image_path, 'http' ) )
    {
        $meta_image_path = 'https://www.spark-project.com' . $meta_image_path;
    }

    if ( !HasPrefix( $meta_page_url, 'http' ) )
    {
        if ( $this->LanguageCode === DefaultLanguageCode )
        {
            $meta_page_url = 'https://www.spark-project.com/' . $meta_page_url;
        }
        else
        {
            $meta_page_url = 'https://www.spark-project.com/' . $this->LanguageCode . '/' . $meta_page_url;
        }
    }

    $meta_page_url = RemoveSuffix( $meta_page_url, '/' );
?>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"/>
<meta name="title" content="<?php echo htmlspecialchars( $meta_title ); ?>"/>
<meta name="description" content="<?php echo htmlspecialchars( $meta_description ); ?>"/>
<meta name="keywords" content="<?php echo htmlspecialchars( $meta_keywords ); ?>"/>
<meta name="geo.region" content="<?php echo htmlspecialchars( $meta_country_code ); ?>"/>
<meta name="geo.placename" content="<?php echo htmlspecialchars( $meta_city_name ); ?>"/>
<meta name="geo.position" content="<?php echo htmlspecialchars( $meta_latitude ); ?>;<?php echo htmlspecialchars( $meta_longitude ); ?>"/>
<meta name="ICBM" content="<?php echo htmlspecialchars( $meta_latitude ); ?>, <?php echo htmlspecialchars( $meta_longitude ); ?>"/>
<meta name="DC.title" content="<?php echo htmlspecialchars( $meta_title ); ?>"/>
<meta name="DC.description" content="<?php echo htmlspecialchars( $meta_description ); ?>"/>
<meta name="DC.language" content="<?php echo htmlspecialchars( $this->LanguageCode ); ?>"/>
<meta name="DC.coverage" content="<?php echo htmlspecialchars( $meta_country_name ); ?>"/>
<meta name="DC.subject" content="<?php echo htmlspecialchars( $meta_offer_name ); ?>"/>
<meta name="DC.type" content="Service"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="mobile-web-app-capable" content="yes"/>
<meta name="mobile-web-app-status-bar-style" content="black"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="theme-color" content="#FFFFFF"/>
<meta name="msapplication-config" content="/browserconfig.xml"/>
<meta name="msapplication-TileColor" content="#FFFFFF"/>
<meta name="msapplication-TileImage" content="/favicon-512x512.png"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="<?php echo htmlspecialchars( $meta_title ); ?>"/>
<meta name="twitter:description" content="<?php echo htmlspecialchars( $meta_description ); ?>"/>
<meta name="twitter:image" content="<?php echo htmlspecialchars( $meta_image_path ); ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="Spark Project"/>
<meta property="og:title" content="<?php echo htmlspecialchars( $meta_title ); ?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars( $meta_description ); ?>"/>
<meta property="og:url" content="<?php echo htmlspecialchars( $meta_page_url ); ?>"/>
<meta property="og:image" content="<?php echo htmlspecialchars( $meta_image_path ); ?>"/>
<meta property="og:image:width" content="1200"/>
<meta property="og:image:height" content="630"/>
<meta property="og:locale" content="<?php echo htmlspecialchars( $this->LanguageCode ); ?>"/>
<meta property="og:locale:alternate" content="<?php echo htmlspecialchars( $this->LanguageCode ); ?>"/>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "<?php echo htmlspecialchars( $meta_title ); ?>",
    "description": "<?php echo htmlspecialchars( $meta_description ); ?>",
    "image": "<?php echo htmlspecialchars( $meta_image_path ); ?>",
    "url": "<?php echo htmlspecialchars( $meta_page_url ); ?>",
    "address":
        {
            "@type": "PostalAddress",
            "addressCountry": "<?php echo htmlspecialchars( $meta_country_code ); ?>",
            "addressLocality": "<?php echo htmlspecialchars( $meta_city_name ); ?>"
        },
    "geo":
        {
            "@type": "GeoCoordinates",
            "latitude": "<?php echo htmlspecialchars( $meta_latitude ); ?>",
            "longitude": "<?php echo htmlspecialchars( $meta_longitude ); ?>"
        },
    "telephone": "<?php echo htmlspecialchars( $meta_contact_phone ); ?>",
    "email": "<?php echo htmlspecialchars( $meta_contact_email ); ?>",
    "openingHours": "<?php echo htmlspecialchars( $meta_opening_hours ); ?>",
    "serviceArea":
        {
            "@type": "GeoCircle",
            "geoMidpoint":
            {
                "@type": "GeoCoordinates",
                "latitude": "<?php echo htmlspecialchars( $meta_latitude ); ?>",
                "longitude": "<?php echo htmlspecialchars( $meta_longitude ); ?>"
            },
            "geoRadius": "<?php echo htmlspecialchars( $meta_radius ); ?>"
        },
    "hasOfferCatalog":
        {
            "@type": "OfferCatalog",
            "name": "<?php echo htmlspecialchars( $meta_offer_name ); ?>",
            "itemListElement":
                [
                    {
                        "@type": "Offer",
                        "itemOffered":
                        {
                            "@type": "Service",
                            "name": "<?php echo htmlspecialchars( $meta_service_name ); ?>",
                            "description": "<?php echo htmlspecialchars( $meta_service_description ); ?>"
                        }
                    }
                ]
        },
    "sameAs":
        [
            "<?php echo JoinArray( $meta_page_url_array, '", "' ); ?>"
        ]
}
</script>
<title>Spark Project | <?php echo htmlspecialchars( $meta_title ); ?></title>
<link rel="canonical" href="<?php echo htmlspecialchars( $meta_page_url ); ?>">
<?php foreach ( LanguageCodeArray as  $meta_language_code ) { ?>
    <?php if ( $meta_language_code === DefaultLanguageCode ) { ?>
        <link rel="alternate" hreflang="x-default" href="https://www.spark-project.com/<?php echo htmlspecialchars( $route ); ?>"/>
    <?php } else { ?>
        <link rel="alternate" hreflang="<?php echo htmlspecialchars( $meta_language_code ); ?>" href="https://www.spark-project.com/<?php echo htmlspecialchars( $meta_language_code ); ?>/<?php echo htmlspecialchars( $route ); ?>"/>
    <?php } ?>
<?php } ?>
<link rel="icon" href="/favicon.ico"/>
<link rel="icon" sizes="512x512" href="/favicon-512x512.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="/favicon-180x180.png"/>
<link rel="mask-icon" href="/favicon.svg" color="#FFFFFF"/>
<link rel="manifest" href="/site.webmanifest"/>
<link rel="stylesheet" href="/static/style.css?v=<?php echo VersionTimestamp; ?>"/>
<?php foreach ( $this->ImagePathArray as  $image_path ) { ?>
    <link rel="preload" href="<?php echo GetPreloadImagePath( $image_path ); ?>?v=<?php echo VersionTimestamp; ?>" as="image"/>
<?php } ?>
