<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../MODEL/block_type_model.php';
require_once __DIR__ . '/' . '../MODEL/image_block_model.php';
require_once __DIR__ . '/' . '../MODEL/text_block_model.php';
require_once __DIR__ . '/' . '../MODEL/text_and_image_block_model.php';
require_once __DIR__ . '/' . '../MODEL/block_model.php';
require_once __DIR__ . '/' . '../MODEL/page_model.php';
require_once __DIR__ . '/' . '../MODEL/home_page_model.php';
require_once __DIR__ . '/' . '../MODEL/contact_page_model.php';
require_once __DIR__ . '/' . '../MODEL/legal_notice_page_model.php';
require_once __DIR__ . '/' . '../MODEL/cookie_policy_page_model.php';
require_once __DIR__ . '/' . '../MODEL/article_page_model.php';
require_once __DIR__ . '/' . '../MODEL/articles_page_model.php';
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
        $this->TextBlockArray = GetDatabaseTextBlockArray();
        $this->ImageBlockArray = GetDatabaseImageBlockArray();
        $this->TextAndImageBlockArray = GetDatabaseTextAndImageBlockArray();
        $this->HomePageArray = GetDatabaseHomePageArray();
        $this->ArticlePageArray = GetDatabaseArticlePageArray();
        $this->ArticlesPageArray = GetDatabaseArticlesPageArray();
        $this->CookiePolicyPageArray = GetDatabaseCookiePolicyPageArray();
        $this->LegalNoticePageArray = GetDatabaseLegalNoticePageArray();
        $this->ContactPageArray = GetDatabaseContactPageArray();
        $this->PageSubPageArray = GetDatabasePageSubPageArray();

        $this->BlockArray = array_merge( $this->TextBlockArray, $this->ImageBlockArray, $this->TextAndImageBlockArray );
        $this->BlockArray = GetActiveBlockArray( $this->BlockArray, $language_code );
        $this->BlockByIdMap = GetValidBlockByIdMap( $this->BlockArray, $language_code );

        $this->PageArray = array_merge( $this->HomePageArray, $this->ArticlePageArray, $this->ArticlesPageArray, $this->CookiePolicyPageArray, $this->LegalNoticePageArray, $this->ContactPageArray );
        $this->PageArray = GetActivePageArray( $this->PageArray, $language_code );
        $this->PageByIdMap = GetValidPageByIdMap( $this->PageArray, $this->PageSubPageArray, $this->BlockArray, $this->BlockByIdMap, $language_code );

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
