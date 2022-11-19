<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/legal_notice_page_model.php';

// -- TYPES

class REMOVE_LEGAL_NOTICE_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $legal_notice_page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Remove a legal notice page';
        $this->LegalNoticePage = GetDatabaseLegalNoticePageById( $legal_notice_page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/legal-notice-page' );

        require_once __DIR__ . '/' . '../VIEW/remove_legal_notice_page_view.php';
    }
}

// -- STATEMENTS

 $remove_legal_notice_page_controller = new REMOVE_LEGAL_NOTICE_PAGE_CONTROLLER(  $language_code,  $legal_notice_page_id );
