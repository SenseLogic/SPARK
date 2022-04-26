<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/session.php';

// -- TYPES

class CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code = DefaultLanguageCode
        )
    {
        $this->Session = new SESSION();

        $this->LanguageCode = $language_code;
        $this->LanguageDecimalSeparator = GetLanguageDecimalSeparator( $this->LanguageCode );
    }

    // -- INQUIRIES

    function GetUntranslatedText(
        string $text
        )
    {
        return GetUntranslatedText( $text );
    }

    // ~~

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
        return $this->GetProcessedText( GetText_( $slug ) );
    }

    // ~~

    function GetMultilineText(
        string $slug
        )
    {
        return $this->GetProcessedMultilineText( GetText_( $slug ) );
    }

    // ~~

    function GetNumber(
        string $slug
        )
    {
        return GetTranslatedNumber( GetText_( $slug ), $this->LanguageDecimalSeparator );
    }
}
