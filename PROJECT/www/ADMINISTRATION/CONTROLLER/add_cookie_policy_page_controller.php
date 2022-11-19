<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/cookie_policy_page_model.php';

// -- TYPES

class ADD_COOKIE_POLICY_PAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'Add a cookie policy page';
        $this->ListRoute = FindSessionValue( 'ListRoute', '/admin/cookie-policy-page' );

        require_once __DIR__ . '/' . '../VIEW/add_cookie_policy_page_view.php';
    }
}

// -- STATEMENTS

 $add_cookie_policy_page_controller = new ADD_COOKIE_POLICY_PAGE_CONTROLLER(  $language_code );
