






























































































































































































































































































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
                <div class="cookie-consent-dialog-button-list">
                    <div class="cookie-consent-dialog-button cookie-consent-dialog-accept-cookies-button" onclick="HandleCookieConsentDialogAcceptAllCookiesButtonClickEvent()">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-accept-cookies-button' ); ?>
                    </div>
                    <div class="cookie-consent-dialog-button cookie-consent-dialog-reject-cookies-button" onclick="HandleCookieConsentDialogAcceptRequiredCookiesButtonClickEvent()">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-reject-cookies-button' ); ?>
                    </div>
                </div>
                <div class="cookie-consent-dialog-setting-list">
                    <div class="cookie-consent-dialog-setting-list-title">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-setting-list-title' ); ?>
                    </div>
                    <div class="cookie-consent-dialog-setting">
                        <div class="cookie-consent-dialog-setting-title" onclick="HandleCookieConsentDialogRequiredCookiesDescriptionButtonClickEvent()">
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
                                <input class="cookie-consent-dialog-setting-input" type="checkbox"/>
                                <span class="cookie-consent-dialog-setting-slider"></span>
                            </label>
                        </div>
                        <div class="cookie-consent-dialog-setting-description is-hidden" onclick="HandleCookieConsentDialogPerformanceCookiesDescriptionButtonClickEvent()">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-performance-cookies-description' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cookie-consent-dialog-button-list">
                <div class="cookie-consent-dialog-button cookie-consent-dialog-confirm-choices-button" onclick="HandleCookieConsentDialogConfirmChoicesButtonClickEvent()">
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
                        <div class="cookie-consent-dialog-setting-title" onclick="HandleCookieConsentDialogPerformanceCookiesDescriptionButtonClickEvent()">
                            <img class="cookie-consent-dialog-setting-title-image" src="/static/image/cookie_consent/plus_icon.svg"/>
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-performance-cookies-title' ); ?>
                        </div>
                        <div class="cookie-consent-dialog-setting-value">
                            <label class="cookie-consent-dialog-setting-switch">
                                <input class="cookie-consent-dialog-setting-input" type="checkbox"/>
                                <span class="cookie-consent-dialog-setting-slider"></span>
                            </label>
                        </div>
                        <div class="cookie-consent-dialog-setting-description is-hidden" onclick="HandleCookieConsentDialogPerformanceCookiesDescriptionButtonClickEvent()">
                            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-performance-cookies-description' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cookie-consent-dialog-button-list">
                <div class="cookie-consent-dialog-button cookie-consent-dialog-confirm-choices-button" onclick="HandleCookieConsentDialogConfirmChoicesButtonClickEvent()">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-american-confirm-choices-button' ); ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script>
    // -- VARIABLES

    var
        CookieConsentDialogContainerElement,
        CookieConsentDialogSettingInputElementArray,
        CookieConsentDialogSettingDescriptionElementArray;

    // -- FUNCTIONS

    function ShowCookieConsentDialog(
        )
    {
        CookieConsentDialogSettingInputElementArray[ 0 ].checked = GetCookieConsent();
        CookieConsentDialogContainerElement.RemoveClass( "is-hidden" );
        CookieConsentDialogSettingDescriptionElementArray[ 0 ].AddClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 1 ].AddClass( 'is-hidden' );
    }

    // ~~

    function HideCookieConsentDialog(
        )
    {
        CookieConsentDialogContainerElement.AddClass( "is-hidden" );
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
        SetCookieConsent( "true" );
        ApplyCookieConsent();
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentDialogAcceptRequiredCookiesButtonClickEvent(
        )
    {
        SetCookieConsent( "false" );
        ApplyCookieConsent();
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentDialogRequiredCookiesDescriptionButtonClickEvent(
        )
    {
        CookieConsentDialogSettingDescriptionElementArray[ 0 ].ToggleClass( 'is-hidden' );
        CookieConsentDialogSettingDescriptionElementArray[ 1 ].AddClass( 'is-hidden' );
    }

    // ~~

    function HandleCookieConsentDialogPerformanceCookiesDescriptionButtonClickEvent(
        )
    {
        CookieConsentDialogSettingDescriptionElementArray[ 1 ].ToggleClass( 'is-hidden' )
        CookieConsentDialogSettingDescriptionElementArray[ 0 ].AddClass( 'is-hidden' )
    }

    // ~~

    function HandleCookieConsentDialogConfirmChoicesButtonClickEvent(
        )
    {
        if ( CookieConsentDialogSettingInputElementArray[ 0 ].checked )
        {
            SetCookieConsent( "true" );
        }
        else
        {
            SetCookieConsent( "false" );
        }

        ApplyCookieConsent();
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // -- STATEMENTS

    CookieConsentDialogContainerElement = GetElementById( "cookie-consent-dialog-container" );
    CookieConsentDialogSettingInputElementArray = GetElements( ".cookie-consent-dialog-setting-input" );
    CookieConsentDialogSettingDescriptionElementArray = GetElements( ".cookie-consent-dialog-setting-description" );
</script>
