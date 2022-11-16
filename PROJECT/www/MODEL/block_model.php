<?php // -- IMPORTS

require_once __DIR__ . '/' . 'block_type.php';
require_once __DIR__ . '/' . 'block.php';
require_once __DIR__ . '/' . 'page.php';

// -- FUNCTIONS

function GetValidBlockBySlugMap(
    array &$block_array
    )
{
     $block_by_slug_map = [];

    foreach ( $block_array as  $block )
    {
        $block->SubBlockArray = [];
        $block_by_slug_map[ $block->Slug ] = $block;
    }

    foreach ( $block_array as  $block )
    {
        if ( isset( $block_by_slug_map[ $block->BlockSlug ] ) )
        {
            array_push(
                $block_by_slug_map[ $block->BlockSlug ]->SubBlockArray,
                $block
                );
        }
    }

    return $block_by_slug_map;
}

// ~~

function GetValidBlockById(
    array &$block_by_slug_map,
    int $id
    )
{
    foreach ( $block_by_slug_map as  $block_slug =>  $block )
    {
        if ( $block->Id === $id )
        {
            return $block;
        }
    }

    return null;
}
