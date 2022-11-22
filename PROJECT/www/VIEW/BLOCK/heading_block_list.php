

<?php
    foreach (  $page->BlockArray as  $block )
    {
        if ( $block->CategorySlug === 'heading' )
        {
            require __DIR__ . '/' . str_replace( '-', '_', $block->TypeSlug ) . '.php';
        }
    }
?>
