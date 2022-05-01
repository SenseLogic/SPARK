<?php // -- IMPORTS

require_once __DIR__ . '/' . 'block.php';
require_once __DIR__ . '/' . 'block_type.php';

// -- FUNCTIONS

function GetBlockBySlugMap(
    array &$block_array,
    array &$block_sub_block_array
    )
{
     $block_by_slug_map = [];

    foreach ( $block_array as  $block )
    {
        $block->SubBlockSlugArray = [];

        $block_by_slug_map[ $block->Slug ] = $block;
    }

    foreach ( $block_sub_block_array as  $block_sub_block )
    {
        if ( isset( $block_by_slug_map[ $block_sub_block->BlockSlug ] ) )
        {
            array_push(
                $block_by_slug_map[ $block_sub_block->BlockSlug ]->SubBlockSlugArray,
                $block_sub_block->SubBlockSlug
                );
        }
    }

    return $block_by_slug_map;
}
