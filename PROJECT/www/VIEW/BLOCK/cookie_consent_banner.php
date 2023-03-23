



















































































<div id="cookie-consent-banner-container" class="cookie-consent-banner-container is-hidden">
    <div class="cookie-consent-banner-text">
        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-text' ); ?>
    </div>
    <div class="cookie-consent-banner-button-list">
        <div class="cookie-consent-banner-button cookie-consent-banner-accept-all-cookies-button" onclick="HandleCookieConsentBannerAcceptAllCookiesButtonClickEvent()">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-accept-all-cookies-button' ); ?>
        </div>
        <div class="cookie-consent-banner-button cookie-consent-banner-accept-required-cookies-button" onclick="HandleCookieConsentBannerAcceptRequiredCookiesButtonClickEvent()">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-accept-required-cookies-button' ); ?>
        </div>
        <div class="cookie-consent-banner-button cookie-consent-banner-privacy-preferences-button" onclick="HandleCookieConsentBannerPrivacyPreferencesButtonClickEvent()">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-privacy-preferences-button' ); ?>
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
        localStorage.setItem( "cookie-consent", cookie_consent );
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

    function HandleCookieConsentBannerAcceptAllCookiesButtonClickEvent(
        )
    {
        SetCookieConsent( "true" );
        ApplyCookieConsent();
        HideCookieConsentBanner();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentBannerAcceptRequiredCookiesButtonClickEvent(
        )
    {
        SetCookieConsent( "false" );
        ApplyCookieConsent();
        HideCookieConsentBanner();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentBannerPrivacyPreferencesButtonClickEvent(
        )
    {
        HideCookieConsentBanner();
        ShowCookieConsentDialog();
    }

    // -- STATEMENTS

    CookieConsentBannerContainerElement = GetElementById( "cookie-consent-banner-container" );

    RemoveCookieConsent();

    if ( HasCookieConsent() )
    {
        ApplyCookieConsent();
        ShowCookieConsentButton();
    }
    else
    {
        ShowCookieConsentBanner();
    }
</script>
