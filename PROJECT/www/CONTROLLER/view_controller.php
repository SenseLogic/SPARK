<?php // -- IMPORTS

require_once __DIR__ . '/' . '../MODEL/session.php';
require_once __DIR__ . '/' . '../MODEL/text_model.php';

// -- TYPES

class VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        $this->Session = new SESSION();

        $this->LanguageCode = $language_code;
        $this->LanguageDecimalSeparator = ',';
        $this->TextArray = GetDatabaseTextArray();
        $this->TextBySlugMap = GetTextBySlugMap( $this->TextArray );
    }

    // -- INQUIRIES

    function GetTranslatedText(
        string $text
        )
    {
        return GetTranslatedText( $text, $this->LanguageCode );
    }

    // ~~

    function GetTranslatedNumber(
        string $number
        )
    {
        return GetTranslatedNumber( $number, $this->LanguageDecimalSeparator );
    }

    // ~~

    function GetBareText(
        string $text
        )
    {
        return GetBareText( $this->GetTranslatedText( $text ) );
    }

    // ~~

    function GetProcessedText(
        string $text
        )
    {
        return GetProcessedText( $this->GetTranslatedText( $text ) );
    }

    // ~~

    function GetText(
        string $slug
        )
    {
        return $this->GetProcessedText( $this->TextBySlugMap[ $slug ] );
    }

    // ~~

    function GetNumber(
        string $slug
        )
    {
        return GetTranslatedNumber( $this->TextBySlugMap[ $slug ], $this->LanguageDecimalSeparator );
    }
}
