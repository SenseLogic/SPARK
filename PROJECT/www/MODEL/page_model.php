<?php // -- IMPORTS

require_once __DIR__ . '/' . 'content_block.php';
require_once __DIR__ . '/' . 'page.php';
require_once __DIR__ . '/' . 'page_type.php';

// -- FUNCTIONS

function GetValidPageBySlugMap(
    array &$page_array,
    array &$page_sub_page_array,
    array &$content_block_array,
    array &$content_block_by_slug_map
    )
{
     $page_by_slug_map = [];

    foreach ( $page_array as  $page )
    {
        $page->ContentBlockArray = [];
        $page->SubPageArray = [];
        $page->PageSubPageArray = [];
        $page_by_slug_map[ $page->Slug ] = $page;
    }

    foreach ( $content_block_array as  $content_block )
    {
        if ( isset( $page_by_slug_map[ $content_block->PageSlug ] ) )
        {
            array_push(
                $page_by_slug_map[ $content_block->PageSlug ]->ContentBlockArray,
                $content_block
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
