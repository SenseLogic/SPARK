<?php // -- IMPORTS

require_once __DIR__ . '/' . 'block.php';
require_once __DIR__ . '/' . 'page.php';
require_once __DIR__ . '/' . 'page_type.php';

// -- FUNCTIONS

function GetValidPageBySlugMap(
    array &$page_array,
    array &$page_content_block_array,
    array &$page_sub_page_array,
    array &$block_by_slug_map
    )
{
     $page_by_slug_map = [];

    foreach ( $page_array as  $page )
    {
        $page->ContentBlockArray = [];
        $page->PageContentBlockArray = [];
        $page->SubPageArray = [];
        $page->PageSubPageArray = [];
        $page_by_slug_map[ $page->Slug ] = $page;
    }

    foreach ( $page_content_block_array as  $page_content_block )
    {
        if ( isset( $page_by_slug_map[ $page_content_block->PageSlug ] )
             && isset( $block_by_slug_map[ $page_content_block->BlockSlug ] ) )
        {
            array_push(
                $page_by_slug_map[ $page_content_block->PageSlug ]->ContentBlockArray,
                $block_by_slug_map[ $page_content_block->BlockSlug ]
                );

            array_push(
                $page_by_slug_map[ $page_content_block->PageSlug ]->PageContentBlockArray,
                $page_content_block
                );
        }
    }

    foreach ( $page_sub_page_array as  $page_sub_page )
    {
        if ( isset( $page_by_slug_map[ $page_sub_page->PageSlug ] )
             && isset( $page_by_slug_map[ $page_sub_page->SubPageSlug ] ) )
        {
            array_push(
                $page_by_slug_map[ $page_sub_page->PageSlug ]->SubPageArray,
                $page_by_slug_map[ $page_sub_page->SubPageSlug ]
                );

            array_push(
                $page_by_slug_map[ $page_sub_page->PageSlug ]->PageSubPageArray,
                $page_sub_page
                );
        }
    }

    return $page_by_slug_map;
}


// ~~

function GetValidPageById(
    array &$page_by_slug_map,
    int $id
    )
{
    foreach ( $page_by_slug_map as  $page_slug =>  $page )
    {
        if ( $page->Id === $id )
        {
            return $page;
        }
    }

    return null;
}
