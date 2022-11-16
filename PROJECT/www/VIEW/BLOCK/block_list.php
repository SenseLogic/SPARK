

<?php
    foreach (  $page->BlockArray as  $block )
    {
        require __DIR__ . '/' . $block->TypeSlug . '.php';
    }
?>
