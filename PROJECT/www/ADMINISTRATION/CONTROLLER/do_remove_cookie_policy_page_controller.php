<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/cookie_policy_page_model.php';

// -- TYPES

class DO_REMOVE_COOKIE_POLICY_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $cookie_policy_page_id
        )
    {
        parent::__construct( $language_code );

        RemoveDatabaseCookiePolicyPageById( $cookie_policy_page_id );

        Redirect( FindSessionValue( 'ListRoute', '/admin/cookie-policy-page' ) );
    }
}

// -- STATEMENTS

 $do_remove_cookie_policy_page_controller = new DO_REMOVE_COOKIE_POLICY_PAGE_CONTROLLER(  $language_code,  $cookie_policy_page_id );
