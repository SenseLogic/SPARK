<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';
require_once __DIR__ . '/' . '../../MODEL/page_model.php';
require_once __DIR__ . '/' . '../../MODEL/page_sub_page_model.php';

// -- TYPES

class MANAGE_PAGES_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Manage pages';
        $this->BlockArray = GetDatabaseBlockArray();
        $this->BlockBySlugMap = GetValidBlockBySlugMap( $this->BlockArray );
        $this->PageArray = GetDatabasePageArray();
        $this->PageSubPageArray = GetDatabasePageSubPageArray();
        $this->PageBySlugMap = GetValidPageBySlugMap( $this->PageArray, $this->PageSubPageArray, $this->BlockArray, $this->BlockBySlugMap );
        $this->ListRoute = '/admin/page/manage';

        SetSessionValue( 'ListRoute', $this->ListRoute );

        require_once __DIR__ . '/' . '../VIEW/manage_pages_view.php';
    }
}

// -- STATEMENTS

 $manage_pages_controller = new MANAGE_PAGES_CONTROLLER();
