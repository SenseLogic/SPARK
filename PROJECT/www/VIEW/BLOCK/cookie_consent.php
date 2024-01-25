




































































































































































































































































































































































































































































































<?php if ( $this->BrowserLocation->IsEurope ) { ?>
    <div id="cookie-consent-banner" class="cookie-consent-banner is-hidden">
        <div class="cookie-consent-banner-text is-small">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-european-text' ); ?>
        </div>
        <div class="cookie-consent-banner-button-list">
            <div class="cookie-consent-banner-button" onclick="HandleCookieConsentBannerAcceptAllCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-european-accept-cookies-button' ); ?>
            </div>
            <div class="cookie-consent-banner-button" onclick="HandleCookieConsentBannerAcceptRequiredCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-european-reject-cookies-button' ); ?>
            </div>
            <div class="cookie-consent-banner-button cookie-consent-banner-cookies-settings-button" onclick="HandleCookieConsentBannerPrivacyPreferencesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-european-cookies-settings-button' ); ?>
            </div>
        </div>
    </div>
<?php } else if ( $this->BrowserLocation->IsNorthAmerica ) { ?>
    <div id="cookie-consent-banner" class="cookie-consent-banner is-wide is-hidden">
        <div class="cookie-consent-banner-title">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-american-title' ); ?>
        </div>
        <div class="cookie-consent-banner-text is-small">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-american-text' ); ?>
        </div>
        <div class="cookie-consent-banner-button-list">
            <div class="cookie-consent-banner-button cookie-consent-banner-cookies-settings-button" onclick="HandleCookieConsentBannerPrivacyPreferencesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-american-cookies-settings-button' ); ?>
            </div>
            <div class="cookie-consent-banner-button" onclick="HandleCookieConsentBannerAcceptAllCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-american-accept-cookies-button' ); ?>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div id="cookie-consent-banner" class="cookie-consent-banner is-hidden">
        <div class="cookie-consent-banner-text">
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-text' ); ?>
        </div>
        <div class="cookie-consent-banner-button-list">
            <div class="cookie-consent-banner-button" onclick="HandleCookieConsentBannerAcceptAllCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-accept-cookies-button' ); ?>
            </div>
            <div class="cookie-consent-banner-button" onclick="HandleCookieConsentBannerAcceptRequiredCookiesButtonClickEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-banner-reject-cookies-button' ); ?>
            </div>
        </div>
    </div>
<?php } ?>
<div id="cookie-consent-button" class="cookie-consent-button is-hidden" onclick="HandleCookieConsentButtonClickEvent()">
    <div class="cookie-consent-button-tooltip">
        <?php if ( $this->BrowserLocation->IsEurope ) { ?>
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-button-european-tooltip' ); ?>
        <?php } else if ( $this->BrowserLocation->IsNorthAmerica ) { ?>
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-button-american-tooltip' ); ?>
        <?php } ?>
    </div>
</div>
<div id="cookie-consent-dialog-container" class="cookie-consent-dialog-container is-hidden">
    <div class="cookie-consent-dialog">
        <?php if ( $this->BrowserLocation->IsEurope ) { ?>
            <div class="cookie-consent-dialog-header">
                <img class="cookie-consent-dialog-header-image" src="/static/image/cookie_consent/logo.svg"/>
                <div class="cookie-consent-dialog-header-title">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-title' ); ?>
                </div>
                <div class="cookie-consent-dialog-header-close-button" onclick="HandleCookieConsentDialogCloseButtonClickEvent()">
                </div>
            </div>
            <div class="cookie-consent-dialog-content">
                <div class="cookie-consent-dialog-description">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-description' ); ?>
                </div>
                <div class="cookie-consent-dialog-left-button-list">
                    <div id="cookie-consent-dialog-accept-all-cookies-button" class="cookie-consent-dialog-button" onclick="HandleCookieConsentDialogAcceptAllCookiesButtonClickEvent()">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-accept-cookies-button' ); ?>
                    </div>
                </div>
                <div class="cookie-consent-dialog-setting-list">
                    <div class="cookie-consent-dialog-setting-list-title">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-setting-list-title' ); ?>
                    </div>
                    <div class="cookie-consent-dialog-setting">
                        <div class="cookie-consent-dialog-setting-title is-grayed" onclick="HandleCookieConsentDialogRequiredCookiesDescriptionButtonClickEvent()">
                            <img class="cookie-consent-dialog-setting-title-image" src="/static/image/cookie_consent/plus_icon.svg"/>
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-required-cookies-title' ); ?>
                        </div>
                        <div class="cookie-consent-dialog-setting-value">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-required-cookies-value' ); ?>
                        </div>
                        <div class="cookie-consent-dialog-setting-description is-hidden" onclick="HandleCookieConsentDialogRequiredCookiesDescriptionButtonClickEvent()">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-required-cookies-description' ); ?>
                        </div>
                    </div>
                    <div class="cookie-consent-dialog-setting">
                        <div class="cookie-consent-dialog-setting-title" onclick="HandleCookieConsentDialogPerformanceCookiesDescriptionButtonClickEvent()">
                            <img class="cookie-consent-dialog-setting-title-image" src="/static/image/cookie_consent/plus_icon.svg"/>
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-performance-cookies-title' ); ?>
                        </div>
                        <div class="cookie-consent-dialog-setting-value">
                            <label class="cookie-consent-dialog-setting-switch">
                                <input class="cookie-consent-dialog-setting-input" type="checkbox" onchange="ToggleCookieConsentDialogAcceptAllCookiesButton()"/>
                                <span class="cookie-consent-dialog-setting-slider"></span>
                            </label>
                        </div>
                        <div class="cookie-consent-dialog-setting-description is-hidden" onclick="HandleCookieConsentDialogPerformanceCookiesDescriptionButtonClickEvent()">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-performance-cookies-description' ); ?>
                        </div>
                    </div>
                    <div class="cookie-consent-dialog-setting">
                        <div class="cookie-consent-dialog-setting-title" onclick="HandleCookieConsentDialogFunctionalCookiesDescriptionButtonClickEvent()">
                            <img class="cookie-consent-dialog-setting-title-image" src="/static/image/cookie_consent/plus_icon.svg"/>
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-functional-cookies-title' ); ?>
                        </div>
                        <div class="cookie-consent-dialog-setting-value">
                            <label class="cookie-consent-dialog-setting-switch">
                                <input class="cookie-consent-dialog-setting-input" type="checkbox" onchange="ToggleCookieConsentDialogAcceptAllCookiesButton()"/>
                                <span class="cookie-consent-dialog-setting-slider"></span>
                            </label>
                        </div>
                        <div class="cookie-consent-dialog-setting-description is-hidden" onclick="HandleCookieConsentDialogFunctionalCookiesDescriptionButtonClickEvent()">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-functional-cookies-description' ); ?>
                        </div>
                    </div>
                    <div class="cookie-consent-dialog-setting">
                        <div class="cookie-consent-dialog-setting-title" onclick="HandleCookieConsentDialogTargetingCookiesDescriptionButtonClickEvent()">
                            <img class="cookie-consent-dialog-setting-title-image" src="/static/image/cookie_consent/plus_icon.svg"/>
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-targeting-cookies-title' ); ?>
                        </div>
                        <div class="cookie-consent-dialog-setting-value">
                            <label class="cookie-consent-dialog-setting-switch">
                                <input class="cookie-consent-dialog-setting-input" type="checkbox" onchange="ToggleCookieConsentDialogAcceptAllCookiesButton()"/>
                                <span class="cookie-consent-dialog-setting-slider"></span>
                            </label>
                        </div>
                        <div class="cookie-consent-dialog-setting-description is-hidden" onclick="HandleCookieConsentDialogTargetingCookiesDescriptionButtonClickEvent()">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-targeting-cookies-description' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cookie-consent-dialog-right-button-list">
                <div class="cookie-consent-dialog-button" onclick="HandleCookieConsentDialogAcceptRequiredCookiesButtonClickEvent()">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-reject-cookies-button' ); ?>
                </div>
                <div class="cookie-consent-dialog-button" onclick="HandleCookieConsentDialogConfirmChoicesButtonClickEvent()">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-confirm-choices-button' ); ?>
                </div>
            </div>
        <?php } else if ( $this->BrowserLocation->IsNorthAmerica ) { ?>
            <div class="cookie-consent-dialog-header">
                <img class="cookie-consent-dialog-header-image" src="/static/image/cookie_consent/logo.svg"/>
                <div class="cookie-consent-dialog-header-title">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-title' ); ?>
                </div>
                <div class="cookie-consent-dialog-header-close-button" onclick="HandleCookieConsentDialogCloseButtonClickEvent()">
                </div>
            </div>
            <div class="cookie-consent-dialog-content">
                <div class="cookie-consent-dialog-description">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-description' ); ?>
                </div>
                <div class="cookie-consent-dialog-setting-list">
                    <div class="cookie-consent-dialog-setting-list-title">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-setting-list-title' ); ?>
                    </div>
                    <div class="cookie-consent-dialog-setting">
                        <div class="cookie-consent-dialog-setting-title is-grayed" onclick="HandleCookieConsentDialogRequiredCookiesDescriptionButtonClickEvent()">
                            <img class="cookie-consent-dialog-setting-title-image" src="/static/image/cookie_consent/plus_icon.svg"/>
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-required-cookies-title' ); ?>
                        </div>
                        <div class="cookie-consent-dialog-setting-value">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-required-cookies-value' ); ?>
                        </div>
                        <div class="cookie-consent-dialog-setting-description is-hidden" onclick="HandleCookieConsentDialogRequiredCookiesDescriptionButtonClickEvent()">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-required-cookies-description' ); ?>
                        </div>
                    </div>
                    <div class="cookie-consent-dialog-setting">
                        <div class="cookie-consent-dialog-setting-title" onclick="HandleCookieConsentDialogTrackingCookiesDescriptionButtonClickEvent()">
                            <img class="cookie-consent-dialog-setting-title-image" src="/static/image/cookie_consent/plus_icon.svg"/>
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-tracking-cookies-title' ); ?>
                        </div>
                        <div class="cookie-consent-dialog-setting-value">
                            <label class="cookie-consent-dialog-setting-switch">
                                <input class="cookie-consent-dialog-setting-input" type="checkbox"/>
                                <span class="cookie-consent-dialog-setting-slider"></span>
                            </label>
                        </div>
                        <div class="cookie-consent-dialog-setting-description is-hidden" onclick="HandleCookieConsentDialogPerformanceCookiesDescriptionButtonClickEvent()">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-tracking-cookies-description' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cookie-consent-dialog-right-button-list">
                <div class="cookie-consent-dialog-button" onclick="HandleCookieConsentDialogConfirmChoicesButtonClickEvent()">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-confirm-choices-button' ); ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script>
    // -- VARIABLES

    var
        CookieConsentBannerElement,
        CookieConsentButtonElement,
        CookieConsentDialogContainerElement,
        CookieConsentDialogAcceptAllCookiesButtonElement,
        CookieConsentDialogSettingInputElementArray,
        CookieConsentDialogSettingDescriptionElementArray;

    // -- FUNCTIONS

    function HasPerformanceCookieConsent(
        )
    {
        return localStorage.getItem( "performance-cookie-consent" ) !== null;
    }

    // ~~

    function GetPerformanceCookieConsent(
        )
    {
        return localStorage.getItem( "performance-cookie-consent" ) === "true";
    }

    // ~~

    function SetPerformanceCookieConsent(
        cookie_consent
        )
    {
        localStorage.setItem( "performance-cookie-consent", cookie_consent ? "true" : "false" );
    }

    // ~~

    function RemovePerformanceCookieConsent(
        )
    {
        localStorage.removeItem( "performance-cookie-consent" );
    }

    // ~~

    function HasFunctionalCookieConsent(
        )
    {
        return localStorage.getItem( "functional-cookie-consent" ) !== null;
    }

    // ~~

    function GetFunctionalCookieConsent(
        )
    {
        return localStorage.getItem( "functional-cookie-consent" ) === "true";
    }

    // ~~

    function SetFunctionalCookieConsent(
        cookie_consent
        )
    {
        localStorage.setItem( "functional-cookie-consent", cookie_consent ? "true" : "false" );
    }

    // ~~

    function RemoveFunctionalCookieConsent(
        )
    {
        localStorage.removeItem( "functional-cookie-consent" );
    }

    // ~~

    function HasTargetingCookieConsent(
        )
    {
        return localStorage.getItem( "targeting-cookie-consent" ) !== null;
    }

    // ~~

    function GetTargetingCookieConsent(
        )
    {
        return localStorage.getItem( "targeting-cookie-consent" ) === "true";
    }

    // ~~

    function SetTargetingCookieConsent(
        cookie_consent
        )
    {
        localStorage.setItem( "targeting-cookie-consent", cookie_consent ? "true" : "false" );
    }

    // ~~

    function RemoveTargetingCookies(
        )
    {
        localStorage.removeItem( "targeting-cookie-consent" );
    }

    // ~~

    function HasCookieConsent(
        )
    {
        return (
            HasPerformanceCookieConsent()
            || HasFunctionalCookieConsent()
            || HasTargetingCookieConsent()
            );
    }

    // ~~

    function GetCookieConsent(
        )
    {
        return (
            GetPerformanceCookieConsent()
            || GetFunctionalCookieConsent()
            || GetTargetingCookieConsent()
            );
    }

    // ~~

    function SetCookieConsent(
        cookie_consent
        )
    {
        SetPerformanceCookieConsent( cookie_consent );
        SetFunctionalCookieConsent( cookie_consent );
        SetTargetingCookieConsent( cookie_consent );
    }

    // ~~

    function RemoveCookieConsent(
        )
    {
        RemovePerformanceCookieConsent();
        RemoveFunctionalCookieConsent();
        RemoveTargetingCookieConsent();
    }

    // ~~

    function ApplyCookieConsent(
        )
    {
        if ( GetCookieConsent() )
        {
            <?php if ( defined( 'GoogleAnalyticsTrackingId' ) ) { ?>
                EnableGoogleAnalyticsTracking( "<?php echo constant( 'GoogleAnalyticsTrackingId' ); ?>" );
            <?php } ?>

            <?php if ( defined( 'GoogleTagManagerTrackingId' ) ) { ?>
                EnableGoogleTagManagerTracking( "<?php echo constant( 'GoogleTagManagerTrackingId' ); ?>" );
            <?php } ?>
        }
        else
        {
            <?php if ( defined( 'GoogleAnalyticsTrackingId' ) ) { ?>
                DisableGoogleAnalyticsTracking( "<?php echo constant( 'GoogleAnalyticsTrackingId' ); ?>" );
            <?php } ?>

            <?php if ( defined( 'GoogleTagManagerTrackingId' ) ) { ?>
                DisableGoogleTagManagerTracking( "<?php echo constant( 'GoogleTagManagerTrackingId' ); ?>" );
            <?php } ?>
        }
    }

    // ~~

    function ShowCookieConsentBanner(
        )
    {
        CookieConsentBannerElement.RemoveClass( "is-hidden" );
    }

    // ~~

    function HideCookieConsentBanner(
        )
    {
        CookieConsentBannerElement.AddClass( "is-hidden" );
    }

    // ~~

    function HandleCookieConsentBannerAcceptAllCookiesButtonClickEvent(
        )
    {
        SetCookieConsent( true );
        ApplyCookieConsent();
        HideCookieConsentBanner();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentBannerAcceptRequiredCookiesButtonClickEvent(
        )
    {
        SetCookieConsent( false );
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

    // ~~

    function ShowCookieConsentButton(
        )
    {
        <?php if ( $this->BrowserLocation->IsEurope || $this->BrowserLocation->IsNorthAmerica ) { ?>
            CookieConsentButtonElement.RemoveClass( "is-hidden" );
        <?php } ?>
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

    // ~~

    function ToggleCookieConsentDialogAcceptAllCookiesButton(
        )
    {
        <?php if ( $this->BrowserLocation->IsEurope ) { ?>
            CookieConsentDialogAcceptAllCookiesButtonElement.ToggleClass(
                'is-hidden',
                CookieConsentDialogSettingInputElementArray[ 0 ].checked
                && CookieConsentDialogSettingInputElementArray[ 1 ].checked
                && CookieConsentDialogSettingInputElementArray[ 2 ].checked
                );
        <?php } ?>
    }

    // ~~

    function ShowCookieConsentDialog(
        )
    {
        CookieConsentDialogSettingInputElementArray[ 0 ].checked = GetPerformanceCookieConsent();

        <?php if ( $this->BrowserLocation->IsEurope ) { ?>
            CookieConsentDialogSettingInputElementArray[ 1 ].checked = GetFunctionalCookieConsent();
            CookieConsentDialogSettingInputElementArray[ 2 ].checked = GetTargetingCookieConsent();
        <?php } ?>

        ToggleCookieConsentDialogAcceptAllCookiesButton();

        CookieConsentDialogContainerElement.RemoveClass( "is-hidden" );
        CookieConsentDialogSettingDescriptionElementArray[ 0 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 1 ].AddClass( 'is-hidden' );

        <?php if ( $this->BrowserLocation->IsEurope ) { ?>
            CookieConsentDialogSettingDescriptionElementArray[ 2 ].AddClass( 'is-hidden' );
            CookieConsentDialogSettingDescriptionElementArray[ 3 ].AddClass( 'is-hidden' );
        <?php } ?>
    }

    // ~~

    function HideCookieConsentDialog(
        )
    {
        CookieConsentDialogContainerElement.AddClass( "is-hidden" );
    }

    // ~~

    function HandleCookieConsentDialogRequiredCookiesDescriptionButtonClickEvent(
        )
    {
        CookieConsentDialogSettingDescriptionElementArray[ 0 ].ToggleClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 1 ].AddClass( 'is-hidden' );

        <?php if ( $this->BrowserLocation->IsEurope ) { ?>
            CookieConsentDialogSettingDescriptionElementArray[ 2 ].AddClass( 'is-hidden' );
            CookieConsentDialogSettingDescriptionElementArray[ 3 ].AddClass( 'is-hidden' );
        <?php } ?>
    }

    // ~~

    function HandleCookieConsentDialogPerformanceCookiesDescriptionButtonClickEvent(
        )
    {
        CookieConsentDialogSettingDescriptionElementArray[ 0 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 1 ].ToggleClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 2 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 3 ].AddClass( 'is-hidden' );
    }

    // ~~

    function HandleCookieConsentDialogFunctionalCookiesDescriptionButtonClickEvent(
        )
    {
        CookieConsentDialogSettingDescriptionElementArray[ 0 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 1 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 2 ].ToggleClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 3 ].AddClass( 'is-hidden' );
    }

    // ~~

    function HandleCookieConsentDialogTargetingCookiesDescriptionButtonClickEvent(
        )
    {
        CookieConsentDialogSettingDescriptionElementArray[ 0 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 1 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 2 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 3 ].ToggleClass( 'is-hidden' );
    }

    // ~~

    function HandleCookieConsentDialogTrackingCookiesDescriptionButtonClickEvent(
        )
    {
        CookieConsentDialogSettingDescriptionElementArray[ 0 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 1 ].ToggleClass( 'is-hidden' );
    }

    // ~~

    function HandleCookieConsentDialogCloseButtonClickEvent(
        )
    {
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentDialogAcceptAllCookiesButtonClickEvent(
        )
    {
        SetCookieConsent( true );
        ApplyCookieConsent();
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentDialogAcceptRequiredCookiesButtonClickEvent(
        )
    {
        SetCookieConsent( false );
        ApplyCookieConsent();
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentDialogConfirmChoicesButtonClickEvent(
        )
    {
        SetPerformanceCookieConsent( CookieConsentDialogSettingInputElementArray[ 0 ].checked );

        <?php if ( $this->BrowserLocation->IsEurope ) { ?>
            SetFunctionalCookieConsent( CookieConsentDialogSettingInputElementArray[ 1 ].checked);
            SetTargetingCookieConsent( CookieConsentDialogSettingInputElementArray[ 2 ].checked );
        <?php } else { ?>
            SetFunctionalCookieConsent( CookieConsentDialogSettingInputElementArray[ 0 ].checked);
            SetTargetingCookieConsent( CookieConsentDialogSettingInputElementArray[ 0 ].checked );
        <?php } ?>

        ApplyCookieConsent();
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // -- STATEMENTS

    CookieConsentBannerElement = GetElementById( "cookie-consent-banner" );
    CookieConsentButtonElement = GetElementById( "cookie-consent-button" );
    CookieConsentDialogContainerElement = GetElementById( "cookie-consent-dialog-container" );
    CookieConsentDialogAcceptAllCookiesButtonElement = GetElementById( "cookie-consent-dialog-accept-all-cookies-button" );
    CookieConsentDialogSettingInputElementArray = GetElements( ".cookie-consent-dialog-setting-input" );
    CookieConsentDialogSettingDescriptionElementArray = GetElements( ".cookie-consent-dialog-setting-description" );

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
