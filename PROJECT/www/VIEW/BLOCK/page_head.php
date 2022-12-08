<?php
     $meta_title = 'Spark Project';
     $meta_description = 'Spark Project';

    if ( isset( $this->PageByRouteMap[ $this->Route ] ) )
    {
         $page = $this->PageByRouteMap[ $this->Route ];

        if ( property_exists( $page, 'MetaTitle' ) )
        {
            $meta_title = $page->MetaTitle;
        }

        if ( property_exists( $page, 'MetaDescription' ) )
        {
            $meta_description = $page->MetaDescription;
        }
    }
?>
<meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta name="title" content="<?php echo $meta_title; ?>"/>
<meta name="description" content="<?php echo $meta_description; ?>"/>
<meta name="keywords" content="spark, project"/>
<meta name="author" content="Spark Team"/>
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
<meta name="twitter:card" content="Spark Project"/>
<meta name="twitter:title" content="Spark Project"/>
<meta name="twitter:description" content="Spark Project"/>
<meta name="twitter:image" content="/favicon-512x512.png"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="Spark Project"/>
<meta property="og:title" content="Spark Project"/>
<meta property="og:description" content="Spark Project"/>
<meta property="og:url" content="https://www.spark-project.com/"/>
<meta property="og:image" content="/favicon-512x512.png"/>
<title>Spark Project</title>
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
    <link rel="preload" href="<?php echo $image_path; ?>.preload.jpg" as="image"/>
<?php } ?>
