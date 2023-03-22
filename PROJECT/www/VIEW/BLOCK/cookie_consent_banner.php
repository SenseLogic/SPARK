




























































































<div id="cookie-consent-banner-container" class="cookie-consent-banner-container is-hidden">
    <div class="cookie-consent-banner-text">
        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-text' ); ?>
    </div>
    <div class="cookie-consent-banner-link">
        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-link' ); ?>
    </div>
    <div class="cookie-consent-banner-button-container">
        <div class="cookie-consent-banner-button cookie-consent-banner-settings-button" onclick="HandleCookieConsentBannerSettingsButtonClickEvent()">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-settings-button' ); ?>
        </div>
        <div class="margin-left-auto! cookie-consent-banner-button cookie-consent-banner-accept-button" onclick="HandleCookieConsentBannerAgreeButtonClickEvent()">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-accept-button' ); ?>
        </div>
        <div class="cookie-consent-banner-button cookie-consent-banner-decline-button" onclick="HandleCookieConsentBannerDeclineButtonClickEvent()">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-decline-button' ); ?>
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

    function HandleCookieConsentBannerAgreeButtonClickEvent(
        )
    {
        SetCookieConsent( "true" );
        ApplyCookieConsent();
        HideCookieConsentBanner();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentBannerDeclineButtonClickEvent(
        )
    {
        SetCookieConsent( "false" );
        ApplyCookieConsent();
        HideCookieConsentBanner();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentBannerSettingsButtonClickEvent(
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
