











































































































<?php if ( $this->BrowserLocation->IsEurope ) { ?>
    <div id="cookie-consent-banner-container" class="cookie-consent-banner-container is-hidden">
        <div class="cookie-consent-banner-text">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-european-text' ); ?>
        </div>
        <div class="cookie-consent-banner-button-list">
            <div class="cookie-consent-banner-button cookie-consent-banner-accept-cookies-button" onclick="HandleCookieConsentBannerAcceptAllCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-european-accept-cookies-button' ); ?>
            </div>
            <div class="cookie-consent-banner-button cookie-consent-banner-reject-cookies-button" onclick="HandleCookieConsentBannerAcceptRequiredCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-european-reject-cookies-button' ); ?>
            </div>
            <div class="cookie-consent-banner-button cookie-consent-banner-cookies-settings-button" onclick="HandleCookieConsentBannerPrivacyPreferencesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-european-cookies-settings-button' ); ?>
            </div>
        </div>
    </div>
<?php } else if ( $this->BrowserLocation->IsNorthAmerica ) { ?>
    <div id="cookie-consent-banner-container" class="cookie-consent-banner-container is-wide is-hidden">
        <div class="cookie-consent-banner-title">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-american-title' ); ?>
        </div>
        <div class="cookie-consent-banner-text">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-american-text' ); ?>
        </div>
        <div class="cookie-consent-banner-button-list">
            <div class="cookie-consent-banner-button cookie-consent-banner-cookies-settings-button" onclick="HandleCookieConsentBannerPrivacyPreferencesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-american-cookies-settings-button' ); ?>
            </div>
            <div class="cookie-consent-banner-button cookie-consent-banner-accept-cookies-button" onclick="HandleCookieConsentBannerAcceptAllCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-american-accept-cookies-button' ); ?>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div id="cookie-consent-banner-container" class="cookie-consent-banner-container is-hidden">
        <div class="cookie-consent-banner-text">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-text' ); ?>
        </div>
        <div class="cookie-consent-banner-button-list">
            <div class="cookie-consent-banner-button cookie-consent-banner-accept-cookies-button" onclick="HandleCookieConsentBannerAcceptAllCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-accept-cookies-button' ); ?>
            </div>
            <div class="cookie-consent-banner-button cookie-consent-banner-reject-cookies-button" onclick="HandleCookieConsentBannerAcceptRequiredCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-reject-cookies-button' ); ?>
            </div>
        </div>
    </div>
<?php } ?>
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
            EnableGoogleAnalyticsTracking( "<?php echo GoogleAnalyticsTrackingId; ?>" );
        }
        else
        {
            DisableGoogleAnalyticsTracking( "<?php echo GoogleAnalyticsTrackingId; ?>" );
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
        <?php if ( $this->BrowserLocation->IsEurope || $this->BrowserLocation->IsNorthAmerica ) { ?>
            ShowCookieConsentButton();
        <?php } ?>
    }

    // ~~

    function HandleCookieConsentBannerAcceptRequiredCookiesButtonClickEvent(
        )
    {
        SetCookieConsent( "false" );
        ApplyCookieConsent();
        HideCookieConsentBanner();
        <?php if ( $this->BrowserLocation->IsEurope || $this->BrowserLocation->IsNorthAmerica ) { ?>
            ShowCookieConsentButton();
        <?php } ?>
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

    // RemoveCookieConsent();

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
