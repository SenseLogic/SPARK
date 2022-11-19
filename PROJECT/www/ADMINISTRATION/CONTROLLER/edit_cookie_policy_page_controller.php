<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/cookie_policy_page_model.php';

// -- TYPES

class EDIT_COOKIE_POLICY_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        $cookie_policy_page_id
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Edit a cookie policy page';
        $this->CookiePolicyPage = GetDatabaseCookiePolicyPageById( $cookie_policy_page_id );
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/cookie-policy-page' );

        require_once __DIR__ . '/' . '../VIEW/edit_cookie_policy_page_view.php';
    }
}

// -- STATEMENTS

 $edit_cookie_policy_page_controller = new EDIT_COOKIE_POLICY_PAGE_CONTROLLER(  $language_code,  $cookie_policy_page_id );
