<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../MODEL/block_model.php';
require_once __DIR__ . '/' . '../MODEL/language_model.php';
require_once __DIR__ . '/' . '../MODEL/page_model.php';

// -- TYPES

class SHOW_BASE_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        string $route
        )
    {
        parent::__construct( $language_code );

        $this->Route = $route;

        $this->LanguageArray = GetDatabaseLanguageArray();
        $this->LanguageArray = GetActiveLanguageArray( $this->LanguageArray );
        $this->PageArray = GetDatabasePageArray();
        $this->PageArray = GetActivePageArray( $this->PageArray, $language_code );
        $this->BlockArray = GetDatabaseBlockArray();
        $this->BlockArray = GetActiveBlockArray( $this->BlockArray, $language_code );

        $this->LanguageByCodeMap = GetLanguageByCodeMap( $this->LanguageArray );
        $this->Language = GetLanguageByCode( $this->LanguageByCodeMap, $language_code );

        $this->BlockArray = array_merge( $this->BlockArray );
        $this->BlockByIdMap = GetValidBlockByIdMap( $this->BlockArray );

        $this->PageArray = array_merge( $this->PageArray );
        $this->PageByIdMap = GetValidPageByIdMap( $this->PageArray, $this->BlockArray, $this->BlockByIdMap );
        $this->PageByRouteMap = GetPageByRouteMap( $this->PageArray );
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

        $this->BrowserAddress = GetBrowserAddress();

        if ( $this->BrowserAddress === '127.0.0.1' )
        {
            $this->BrowserAddress = GetRandomAddress();
        }

        $this->BrowserLocation = GetBrowserLocation( $this->BrowserAddress );

        require_once __DIR__ . '/' . '../VIEW/show_base_view.php';
    }
}

// -- STATEMENTS

 $show_base_controller = new SHOW_BASE_CONTROLLER(  $language_code,  $route );
