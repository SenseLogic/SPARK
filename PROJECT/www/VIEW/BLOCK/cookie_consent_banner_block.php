











































































<div id="cookie-consent-banner-block-container" class="cookie-consent-banner-block-container">
    <div class="cookie-consent-banner-block-text">
        We use cookies on our website to provide you with the best possible online experience.
        <a href="/legal-notice" target="_blank">More information</a>
    </div>
    <div class="cookie-consent-banner-block-button-container">
        <div class="cookie-consent-banner-block-button cookie-consent-banner-block-accept-button" onclick="HandleCookieConsentBannerAgreeButtonClickEvent()">
            Accept
        </div>
        <div class="cookie-consent-banner-block-button cookie-consent-banner-block-decline-button" onclick="HandleCookieConsentBannerDisacceptButtonClickEvent()">
            Decline
        </div>
    </div>
</div>
<script>
    // -- VARIABLES

    var
        CookieConsentBannerContainerElement;

    // -- FUNCTIONS

    function HasCookieConsent(
        )
    {
        return localStorage.getItem( "cookie-consent" ) !== null;
    }

    // ~~

    function GetCookieConsent(
        )
    {
        return localStorage.getItem( "cookie-consent" ) === "true";
    }

    // ~~

    function SetCookieConsent(
        cookie_consent
        )
    {
        localStorage.setItem( "cookie-consent", "true" );
    }

    // ~~

    function RemoveCookieConsent(
        )
    {
        localStorage.removeItem( "cookie-consent" );
    }

    // ~~

    function ApplyCookieConsent(
        )
    {
        if ( GetCookieConsent() )
        {
            EnableGoogleAnalyticsTracking( "G-ABCDEFGHIJ" );
        }
        else
        {
            DisableGoogleAnalyticsTracking( "G-ABCDEFGHIJ" );
        }
    }

    // ~~

    function ShowCookieConsentBanner(
        )
    {
        CookieConsentBannerContainerElement.RemoveClass( "hidden" );
    }

    // ~~

    function HideCookieConsentBanner(
        )
    {
        CookieConsentBannerContainerElement.AddClass( "hidden" );
    }

    // ~~

    function HandleCookieConsentBannerAgreeButtonClickEvent(
        )
    {
        SetCookieConsent( "true" );
        ApplyCookieConsent();
        HideCookieConsentBanner();
    }

    // ~~

    function HandleCookieConsentBannerDisacceptButtonClickEvent(
        )
    {
        SetCookieConsent( "false" );
        ApplyCookieConsent();
        HideCookieConsentBanner();
    }

    // -- STATEMENTS

    CookieConsentBannerContainerElement = GetElementById( "cookie-consent-banner-block-container" );

    // RemoveCookieConsent();

    if ( HasCookieConsent() )
    {
        ApplyCookieConsent();
        HideCookieConsentBanner();
    }
    else
    {
        ShowCookieConsentBanner();
    }
</script>
