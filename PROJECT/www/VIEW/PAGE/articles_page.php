<?php
     $page_slug_array = $this->PageBySlugMap[ 'articles' ]->SubPageSlugArray;
     $article_array = [];

    foreach ( $page_slug_array as  $page_slug )
    {
        array_push( $article_array, $this->PageBySlugMap[ $page_slug ] );
    }
?>


<div class="page">
    <?php require __DIR__ . '/' . '../BLOCK/header_menu.php'; ?>
    <?php require __DIR__ . '/' . '../BLOCK/article_carousel.php'; ?>
    <?php require __DIR__ . '/' . '../BLOCK/content_block_list.php'; ?>
    <?php require __DIR__ . '/' . '../BLOCK/footer_menu.php'; ?>
</div>
