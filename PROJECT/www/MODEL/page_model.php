<?php // -- IMPORTS

require_once __DIR__ . '/' . 'page.php';
require_once __DIR__ . '/' . 'page_type.php';

// -- FUNCTIONS

function GetActivePageArray(
    array &$page_array,
    string $language_code
    )
{
     $active_page_array = [];

    foreach ( $page_array as  $page )
    {
        if ( $page->IsActive
             && in_array( $language_code, $page->LanguageCodeArray, true ) )
        {
            array_push( $active_page_array, $page );
        }
    }

    return $active_page_array;
}

// ~~

function GetValidPageByIdMap(
    array &$page_array,
    array &$block_array,
    array &$block_by_id_map
    )
{
     $page_by_id_map = [];

    foreach ( $page_array as  $page )
    {
        $page->BlockArray = [];
        $page->SubPageArray = [];
        $page_by_id_map[ $page->Id ] = $page;
    }

    foreach ( $block_array as  $block )
    {
        if ( isset( $page_by_id_map[ $block->PageId ] ) )
        {
            array_push(
                $page_by_id_map[ $block->PageId ]->BlockArray,
                $block
                );
        }
    }

    foreach ( $page_array as  $page )
    {
        if ( property_exists( $page, 'PageId' )
             && isset( $page_by_id_map[ $page->PageId ] ) )
        {
            array_push(
                $page_by_id_map[ $page->PageId ]->SubPageArray,
                $page
                );
        }
    }

    return $page_by_id_map;
}

// ~~

function GetValidPageById(
    array &$page_by_id_map,
    int $id
    )
{
    foreach ( $page_by_id_map as  $page_id =>  $page )
    {
        if ( $page->Id === $id )
        {
            return $page;
        }
    }

    return null;
}
