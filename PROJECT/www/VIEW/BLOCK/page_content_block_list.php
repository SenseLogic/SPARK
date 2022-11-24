

<?php
    foreach (  $page->ContentBlockArray as  $block )
    {
        require __DIR__ . '/' . str_replace( '-', '_', $block->TypeSlug ) . '.php';
    }
?>
