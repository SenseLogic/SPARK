<?php
     $meta_title = 'Spark Project';
     $meta_description = 'Spark Project';
     $meta_image_path = '/favicon-512x512.png';

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
        $meta_page_url = 'https://www.spark-project.com/' . $this->LanguageCode . '/' . $meta_page_url;
    }
?>
<meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta name="title" content="<?php echo htmlspecialchars( $meta_title ); ?>"/>
<meta name="description" content="<?php echo htmlspecialchars( $meta_description ); ?>"/>
<meta name="keywords" content="spark, project"/>
<meta name="author" content="Spark Project Team"/>
<meta name="language" content="English"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="30 days"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="HandheldFriendly" content="true"/>
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "<?php echo htmlspecialchars( $meta_title ); ?>",
  "description": "<?php echo htmlspecialchars( $meta_description ); ?>",
  "image": "<?php echo htmlspecialchars( $meta_image_path ); ?>",
  "url": "<?php echo htmlspecialchars( $meta_page_url ); ?>"
}
</script>
<title>Spark Project</title>
<link rel="canonical" href="<?php echo htmlspecialchars( $meta_page_url ); ?>">
<link rel="icon" href="/favicon.ico"/>
<link rel="icon" sizes="48x48" href="/favicon-48x48.png"/>
<link rel="icon" sizes="96x96" href="/favicon-96x96.png"/>
<link rel="icon" sizes="144x144" href="/favicon-144x144.png"/>
<link rel="icon" sizes="192x192" href="/favicon-192x192.png"/>
<link rel="icon" sizes="256x256" href="/favicon-256x256.png"/>
<link rel="icon" sizes="384x384" href="/favicon-384x384.png"/>
<link rel="icon" sizes="512x512" href="/favicon-512x512.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="/favicon-180x180.png"/>
<link rel="mask-icon" href="/favicon.svg" color="#FFFFFF"/>
<link rel="manifest" href="/site.webmanifest"/>
<link rel="stylesheet" href="/static/style.css?v=<?php echo VersionTimestamp; ?>"/>
<?php foreach ( $this->ImagePathArray as  $image_path ) { ?>
    <link rel="preload" href="<?php echo GetPreloadImagePath( $image_path ); ?>?v=<?php echo VersionTimestamp; ?>" as="image"/>
<?php } ?>
