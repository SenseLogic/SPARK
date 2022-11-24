

<?php
    foreach (  $page->HeadingBlockArray as  $block )
    {
        require __DIR__ . '/' . str_replace( '-', '_', $block->TypeSlug ) . '.php';
    }
?>
