

<div class="page">
    <?php
        require __DIR__ . '/' . '../BLOCK/header_menu.php';
        require __DIR__ . '/' . '../BLOCK/page_heading.php';
        require __DIR__ . '/' . '../BLOCK/content_block_list.php';
         $page_array = $this->PageBySlugMap[ 'articles' ]->SubPageArray;
        require __DIR__ . '/' . '../BLOCK/adjacent_page_list.php';
        require __DIR__ . '/' . '../BLOCK/footer_menu.php';
    ?>
</div>
