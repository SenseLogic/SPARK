<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../MODEL/block_model.php';
require_once __DIR__ . '/' . '../MODEL/image_block_model.php';
require_once __DIR__ . '/' . '../MODEL/language_model.php';
require_once __DIR__ . '/' . '../MODEL/page_model.php';
require_once __DIR__ . '/' . '../MODEL/text_block_model.php';
require_once __DIR__ . '/' . '../MODEL/text_and_image_block_model.php';

// -- TYPES

class SHOW_BASE_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->LanguageArray = GetDatabaseLanguageArray();

        $this->PageArray = GetDatabasePageArray();
        $this->PageArray = GetActivePageArray( $this->PageArray, $language_code );

        $this->TextBlockArray = GetDatabaseTextBlockArray();
        $this->TextBlockArray = GetActiveBlockArray( $this->TextBlockArray, $language_code );
        $this->ImageBlockArray = GetDatabaseImageBlockArray();
        $this->ImageBlockArray = GetActiveBlockArray( $this->ImageBlockArray, $language_code );
        $this->TextAndImageBlockArray = GetDatabaseTextAndImageBlockArray();
        $this->TextAndImageBlockArray = GetActiveBlockArray( $this->TextAndImageBlockArray, $language_code );

        $this->BlockArray = array_merge( $this->TextBlockArray, $this->ImageBlockArray, $this->TextAndImageBlockArray );
        $this->BlockByIdMap = GetValidBlockByIdMap( $this->BlockArray );

        $this->PageArray = array_merge( $this->PageArray );
        $this->PageByIdMap = GetValidPageByIdMap( $this->PageArray, $this->BlockArray, $this->BlockByIdMap );
        $this->PageArrayByTypeSlugMap = GetPageArrayByTypeSlugMap( $this->PageArray );

        $this->ImagePathArray = [];

        foreach ( $this->PageByIdMap as  $page_id =>  $page )
        {
            if ( property_exists( $page, 'ImagePath' )
                 && $page->ImagePath !== '' )
            {
                array_push( $this->ImagePathArray, $page->ImagePath );
            }
        }

        foreach ( $this->BlockByIdMap as  $block_id =>  $block )
        {
            if ( property_exists( $block, 'ImagePath' )
                 && $block->ImagePath !== '' )
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
