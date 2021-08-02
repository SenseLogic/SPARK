










































































<div id="cookie-consent-banner-container" class="cookie-consent-banner-container">
    <div class="cookie-consent-banner-text">
        We use cookies on our website to provide you with the best possible online experience.
        <a href="/legal-notice" target="_blank">More information</a>
    </div>
    <div class="cookie-consent-banner-button-container">
        <div class="scaled-button cookie-consent-banner-button cookie-consent-banner-accept-button" onclick="HandleCookieConsentBannerAgreeButtonClickEvent()">
            Accept
        </div>
        <div class="scaled-button cookie-consent-banner-button cookie-consent-banner-decline-button" onclick="HandleCookieConsentBannerDisacceptButtonClickEvent()">
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
        CookieConsentBannerContainerElement.RemoveClass( "is-hidden" );
    }

    // ~~

    function HideCookieConsentBanner(
        )
    {
        CookieConsentBannerContainerElement.AddClass( "is-hidden" );
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

    CookieConsentBannerContainerElement = GetElementById( "cookie-consent-banner-container" );

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
