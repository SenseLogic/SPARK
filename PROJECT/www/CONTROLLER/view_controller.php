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

        $this->TextArray = GetDatabaseTextArray();
        $this->TextBySlugMap = GetTextBySlugMap( $this->TextArray );
    }

    // -- INQUIRIES

    function GetText(
        string $slug
        )
    {
        return $this->GetProcessedText( $this->TextBySlugMap[ $slug ] );
    }

    // ~~

    function GetMultilineText(
        string $slug
        )
    {
        return $this->GetProcessedMultilineText( $this->TextBySlugMap[ $slug ] );
    }

    // ~~

    function GetNumber(
        string $slug
        )
    {
        return GetTranslatedNumber( $this->TextBySlugMap[ $slug ], $this->LanguageDecimalSeparator );
    }
}
