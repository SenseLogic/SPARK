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
        $this->TextMap = array();

        foreach ( $this->TextArray as  $text )
        {
            $this->TextMap[ $text->Slug ] = $text->Text;
        }
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
        return $this->GetProcessedText( GetTranslatedText( $this->TextMap[ $slug ], $this->LanguageCode ) );
    }

    // ~~

    function GetNumber(
        string $slug
        )
    {
        return GetTranslatedNumber( $this->TextMap[ $slug ], $this->LanguageDecimalSeparator );
    }
}
