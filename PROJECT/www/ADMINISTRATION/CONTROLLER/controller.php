<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/session.php';

// -- TYPES

class CONTROLLER
{
    // -- ATTRIBUTES

    public
        $Session,
        $LanguageCode,
        $LanguageDecimalSeparator;

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

    function GetTextBySlug(
        string $slug
        )
    {
        return GetTextBySlug( $slug );
    }

    // ~~

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

    function GetTranslatedNumberBySlug(
        string $slug
        )
    {
        return $this->GetTranslatedNumber( $this->GetTextBySlug( $slug ) );
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

    function GetProcessedTextBySlug(
        string $slug
        )
    {
        return $this->GetProcessedText( $this->GetTextBySlug( $slug ) );
    }

    // ~~

    function GetProcessedMultilineText(
        string $text
        )
    {
        return GetProcessedMultilineText( $this->GetTranslatedText( $text ) );
    }

    // ~~

    function GetProcessedMultilineTextBySlug(
        string $slug
        )
    {
        return $this->GetProcessedMultilineText( $this->GetTextBySlug( $slug ) );
    }
}
