<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/block_category_model.php';
require_once __DIR__ . '/' . '../../MODEL/block_content_model.php';
require_once __DIR__ . '/' . '../../MODEL/block_model.php';
require_once __DIR__ . '/' . '../../MODEL/block_type_model.php';
require_once __DIR__ . '/' . '../../MODEL/page_model.php';
require_once __DIR__ . '/' . '../../MODEL/page_type_model.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class VIEW_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        )
    {
        parent::__construct();

        $this->TextArray = GetDatabaseTextArray();
        $this->TextBySlugMap = GetTextBySlugMap( $this->TextArray );
        $this->BlockArray = GetDatabaseBlockArray();
        $this->BlockByIdMap = GetValidBlockByIdMap( $this->BlockArray );
        $this->BlockCategoryArray = GetDatabaseBlockCategoryArray();
        $this->BlockCategoryBySlugMap = GetElementByKeyMap( $this->BlockCategoryArray, 'Slug' );
        $this->BlockContentArray = GetDatabaseBlockContentArray();
        $this->BlockContentBySlugMap = GetElementByKeyMap( $this->BlockContentArray, 'Slug' );
        $this->BlockTypeArray = GetDatabaseBlockTypeArray();
        $this->BlockTypeBySlugMap = GetElementByKeyMap( $this->BlockTypeArray, 'Slug' );
        $this->PageArray = GetDatabasePageArray();
        $this->PageByIdMap = GetValidPageByIdMap( $this->PageArray, $this->BlockArray, $this->BlockByIdMap );
        $this->PageBySlugMap = GetPageBySlugMap( $this->PageByIdMap );
        $this->PageTypeArray = GetDatabasePageTypeArray();
        $this->PageTypeBySlugMap = GetElementByKeyMap( $this->PageTypeArray, 'Slug' );
    }

    // -- INQUIRIES

    function GetTextBySlug(
        string $slug
        )
    {
        if ( array_key_exists( $slug, $this->TextBySlugMap ) )
        {
            return $this->TextBySlugMap[ $slug ];
        }
        else
        {
            return $slug;
        }

        return GetTextBySlug( $slug );
    }
}
