

<?php
    foreach (  $page->ContentBlockSlugArray as  $block_slug )
    {
         $block = $this->BlockBySlugMap[ $block_slug ];
        require __DIR__ . '/' . $block->TypeSlug . '.php';
    }
?>
