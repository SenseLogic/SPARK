

<?php
    foreach (  $page->BlockArray as  $block )
    {
        if ( $block->CategorySlug === 'content' )
        {
            require __DIR__ . '/' . str_replace( '-', '_', $block->TypeSlug ) . '.php';
        }
    }
?>
