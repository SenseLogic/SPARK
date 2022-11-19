<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/legal_notice_page_model.php';

// -- TYPES

class DO_REMOVE_LEGAL_NOTICE_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $legal_notice_page_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseLegalNoticePageById( $legal_notice_page_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/legal-notice-page' ) );
    }
}

// -- STATEMENTS

 $do_remove_legal_notice_page_controller = new DO_REMOVE_LEGAL_NOTICE_PAGE_CONTROLLER(  $language_code,  $legal_notice_page_id );
