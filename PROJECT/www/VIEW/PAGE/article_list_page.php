

<div id="<?php echo  $page->Slug; ?>" class="page">
    <?php require __DIR__ . '/' . '../BLOCK/header_menu.php'; ?>
    <?php  $article_page_array = $this->PageArrayByTypeSlugMap[ 'article' ]; ?>
    <?php require __DIR__ . '/' . '../BLOCK/article_carousel.php'; ?>
    <?php require __DIR__ . '/' . '../BLOCK/page_content_block_list.php'; ?>
    <?php require __DIR__ . '/' . '../BLOCK/page_padding.php'; ?>
    <?php require __DIR__ . '/' . '../BLOCK/footer_menu.php'; ?>
</div>
