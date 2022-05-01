<?php // -- IMPORTS

require_once __DIR__ . '/' . 'block.php';
require_once __DIR__ . '/' . 'page.php';
require_once __DIR__ . '/' . 'page_type.php';

// -- FUNCTIONS

function GetPageBySlugMap(
    array &$page_array,
    array &$page_content_block_array,
    array &$page_sub_page_array
    )
{
     $page_by_slug_map = [];

    foreach ( $page_array as  $page )
    {
        $page->ContentBlockSlugArray = [];
        $page->SubPageSlugArray = [];

        $page_by_slug_map[ $page->Slug ] = $page;
    }

    foreach ( $page_content_block_array as  $page_content_block )
    {
        if ( isset( $page_by_slug_map[ $page_content_block->PageSlug ] ) )
        {
            array_push(
                $page_by_slug_map[ $page_content_block->PageSlug ]->ContentBlockSlugArray,
                $page_content_block->BlockSlug
                );
        }
    }

    foreach ( $page_sub_page_array as  $page_sub_page )
    {
        if ( isset( $page_by_slug_map[ $page_sub_page->PageSlug ] ) )
        {
            array_push(
                $page_by_slug_map[ $page_sub_page->PageSlug ]->SubPageSlugArray,
                $page_sub_page->SubPageSlug
                );
        }
    }

    return $page_by_slug_map;
}
