<?php // -- IMPORTS

require_once __DIR__ . '/' . 'block_type.php';
require_once __DIR__ . '/' . 'content_block.php';
require_once __DIR__ . '/' . 'page.php';

// -- FUNCTIONS

function GetValidContentBlockBySlugMap(
    array &$content_block_array
    )
{
     $content_block_by_slug_map = [];

    foreach ( $content_block_array as  $content_block )
    {
        $content_block->SubBlockArray = [];
        $content_block_by_slug_map[ $content_block->Slug ] = $content_block;
    }

    foreach ( $content_block_array as  $content_block )
    {
        if ( isset( $content_block_by_slug_map[ $content_block->BlockSlug ] ) )
        {
            array_push(
                $content_block_by_slug_map[ $content_block->BlockSlug ]->SubBlockArray,
                $content_block
                );
        }
    }

    return $content_block_by_slug_map;
}

// ~~

function GetValidContentBlockById(
    array &$content_block_by_slug_map,
    int $id
    )
{
    foreach ( $content_block_by_slug_map as  $content_block_slug =>  $content_block )
    {
        if ( $content_block->Id === $id )
        {
            return $content_block;
        }
    }

    return null;
}
