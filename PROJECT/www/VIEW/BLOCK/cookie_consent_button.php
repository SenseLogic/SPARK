
























<div id="cookie-consent-button" class="cookie-consent-button is-hidden" onclick="HandleCookieConsentButtonClickEvent()">
</div>
<script>
    // -- VARIABLES

    var
        CookieConsentButtonElement;

    // -- FUNCTIONS

    function ShowCookieConsentButton(
        )
    {
        CookieConsentButtonElement.RemoveClass( "is-hidden" );
    }

    // ~~

    function HideCookieConsentButton(
        )
    {
        CookieConsentButtonElement.AddClass( "is-hidden" );
    }

    // ~~

    function HandleCookieConsentButtonClickEvent(
        )
    {
        HideCookieConsentButton();
        ShowCookieConsentDialog();
    }

    // -- STATEMENTS

    CookieConsentButtonElement = GetElementById( "cookie-consent-button" );
</script>
