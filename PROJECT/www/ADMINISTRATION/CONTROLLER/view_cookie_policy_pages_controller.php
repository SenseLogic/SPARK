<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/cookie_policy_page_model.php';

// -- TYPES

class VIEW_COOKIE_POLICY_PAGES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Title = 'View cookie policy pages';
        $this->CookiePolicyPageArray = GetDatabaseCookiePolicyPageArray();

        SetSessionValue( 'ListRoute', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_cookie_policy_pages_view.php';
    }
}

// -- STATEMENTS

 $view_cookie_policy_pages_controller = new VIEW_COOKIE_POLICY_PAGES_CONTROLLER(  $language_code );
