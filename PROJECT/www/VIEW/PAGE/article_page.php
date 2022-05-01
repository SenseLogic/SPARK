

<div class="page">
    <?php require __DIR__ . '/' . '../BLOCK/header_menu.php'; ?>
    <?php require __DIR__ . '/' . '../BLOCK/page_heading.php'; ?>
    <?php require __DIR__ . '/' . '../BLOCK/content_block_list.php'; ?>
    <?php  $page_slug_array = $this->PageBySlugMap[ 'articles' ]->SubPageSlugArray; ?>
    <?php require __DIR__ . '/' . '../BLOCK/adjacent_page_list.php'; ?>
    <?php require __DIR__ . '/' . '../BLOCK/footer_menu.php'; ?>
</div>
