<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../MODEL/block_type_model.php';
require_once __DIR__ . '/' . '../MODEL/block_model.php';
require_once __DIR__ . '/' . '../MODEL/page_model.php';
require_once __DIR__ . '/' . '../MODEL/page_sub_page_model.php';

// -- TYPES

class SHOW_BASE_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->BlockTypeBySlugMap = GetDatabaseBlockTypeBySlugMap();
        $this->BlockArray = GetDatabaseBlockArray();
        $this->PageArray = GetDatabasePageArray();
        $this->PageSubPageArray = GetDatabasePageSubPageArray();

        $this->BlockBySlugMap = GetValidBlockBySlugMap( $this->BlockArray );
        $this->PageBySlugMap = GetValidPageBySlugMap( $this->PageArray, $this->PageSubPageArray, $this->BlockArray, $this->BlockBySlugMap );

        $this->ImagePathArray = [];

        foreach ( $this->PageBySlugMap as  $page_slug =>  $page )
        {
            if ( $page->ImagePath !== '' )
            {
                array_push( $this->ImagePathArray, $page->ImagePath );
            }
        }

        foreach ( $this->BlockBySlugMap as  $block_slug =>  $block )
        {
            if ( $block->ImagePath !== '' )
            {
                array_push( $this->ImagePathArray, $block->ImagePath );
            }
        }

        $this->Captcha = GetCaptchaText( 6 );
        $this->Session->Captcha = $this->Captcha;
        $this->Session->Store();

        require_once __DIR__ . '/' . '../VIEW/show_base_view.php';
    }
}

// -- STATEMENTS

 $show_base_controller = new SHOW_BASE_CONTROLLER(  $language_code );
