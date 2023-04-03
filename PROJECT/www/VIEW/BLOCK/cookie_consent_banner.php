<?php
     $cookie_consent_banner_has_settings_button = $this->BrowserLocation->IsEurope || $this->BrowserLocation->IsNorthAmerica;
?>




















































































<div id="cookie-consent-banner-container" class="cookie-consent-banner-container is-hidden">
    <?php if ( $cookie_consent_banner_has_settings_button ) { ?>
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
    <?php } else { ?>
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
    <?php } ?>
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
        <?php if ( $cookie_consent_banner_has_settings_button ) { ?>
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
        <?php if ( $cookie_consent_banner_has_settings_button ) { ?>
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
