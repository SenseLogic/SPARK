<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_category_model.php';

// -- TYPES

class DO_EDIT_BLOCK_CATEGORY_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $block_category_id
        )
    {
        parent::__construct( $language_code );

        if ( HasSessionMinimumUserRole( 'author' ) )
        {

             $slug = GetPostValue( 'Slug' );
             $name = GetPostValue( 'Name' );

            SetDatabaseBlockCategory( $block_category_id, $slug, $name );

            Redirect( FindSessionValue( 'ListRoute', '/admin/block-category' ) );
        }
    }
}

// -- STATEMENTS

 $do_edit_block_category_controller = new DO_EDIT_BLOCK_CATEGORY_CONTROLLER(  $language_code,  $block_category_id );
