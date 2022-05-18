

<?php
    foreach (  $page->ContentBlockArray as  $block )
    {
        require __DIR__ . '/' . $block->TypeSlug . '.php';
    }
?>
