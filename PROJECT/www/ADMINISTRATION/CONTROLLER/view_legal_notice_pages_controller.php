<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/legal_notice_page_model.php';

// -- TYPES

class VIEW_LEGAL_NOTICE_PAGES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View legal notice pages';
        $this->LegalNoticePageArray = GetDatabaseLegalNoticePageArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_legal_notice_pages_view.php';
    }
}

// -- STATEMENTS

 $view_legal_notice_pages_controller = new VIEW_LEGAL_NOTICE_PAGES_CONTROLLER(  $language_code );
