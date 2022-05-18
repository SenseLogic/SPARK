<?php // -- IMPORTS

require_once __DIR__ . '/' . 'block.php';
require_once __DIR__ . '/' . 'block_type.php';

// -- FUNCTIONS

function GetValidBlockBySlugMap(
    array &$block_array,
    array &$block_sub_block_array
    )
{
     $block_by_slug_map = [];

    foreach ( $block_array as  $block )
    {
        $block->SubBlockArray = [];
        $block->BlockSubBlockArray = [];
        $block_by_slug_map[ $block->Slug ] = $block;
    }

    foreach ( $block_sub_block_array as  $block_sub_block )
    {
        if ( isset( $block_by_slug_map[ $block_sub_block->BlockSlug ] )
             && isset( $block_by_slug_map[ $block_sub_block->SubBlockSlug ] ) )
        {
            array_push(
                $block_by_slug_map[ $block_sub_block->BlockSlug ]->SubBlockArray,
                $block_by_slug_map[ $block_sub_block->SubBlockSlug ]
                );

            array_push(
                $block_by_slug_map[ $block_sub_block->BlockSlug ]->BlockSubBlockArray,
                $block_sub_block
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
