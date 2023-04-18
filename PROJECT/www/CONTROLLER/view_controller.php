<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/session.php';
require_once __DIR__ . '/' . '../MODEL/text_model.php';

// -- TYPES

class VIEW_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        if ( GetServerName() === 'localhost' )
        {
            $this->BrowserAddress = GetRandomAddress();
        }
        else
        {
            $this->BrowserAddress = GetBrowserAddress();
        }

        $this->BrowserLocation = GetBrowserLocation( $this->BrowserAddress );

        $this->TextArray = GetDatabaseTextArray();
        $this->TextBySlugMap = GetTextBySlugMap( $this->TextArray );
    }

    // -- INQUIRIES

    function GetTranslatedNumberBySlug(
        string $slug
        )
    {
        return $this->GetTranslatedNumber( $this->TextBySlugMap[ $slug ] );
    }

    // ~~

    function GetProcessedTextBySlug(
        string $slug
        )
    {
        return $this->GetProcessedText( $this->TextBySlugMap[ $slug ] );
    }

    // ~~

    function GetProcessedMultilineTextBySlug(
        string $slug
        )
    {
        return $this->GetProcessedMultilineText( $this->TextBySlugMap[ $slug ] );
    }
}
