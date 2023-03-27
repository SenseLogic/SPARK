


















































































































































































































































































<div id="cookie-consent-dialog-container" class="cookie-consent-dialog-container is-hidden">
    <div class="cookie-consent-dialog">
        <div class="cookie-consent-dialog-header">
            <img class="cookie-consent-dialog-header-image" src="/static/image/base/logo.svg"/>
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
            <div class="cookie-content-dialog-button-list">
                <div class="cookie-consent-dialog-button cookie-consent-dialog-accept-all-cookies-button" onclick="HandleCookieConsentDialogAcceptAllCookiesButtonClickEvent()">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-accept-all-cookies-button' ); ?>
                </div>
                <div class="cookie-consent-dialog-button cookie-consent-dialog-accept-required-cookies-button" onclick="HandleCookieConsentDialogAcceptRequiredCookiesButtonClickEvent()">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-accept-required-cookies-button' ); ?>
                </div>
            </div>
            <div class="cookie-consent-dialog-setting-list">
                <div class="cookie-consent-dialog-setting">
                    <div class="cookie-consent-dialog-setting-title" onclick="HandleCookieConsentDialogRequiredCookiesDescriptionButtonClickEvent()">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-required-cookies-title' ); ?>
                        <image class="cookie-consent-dialog-setting-title-image" src="/static/image/base/help_icon.svg"/>
                    </div>
                    <div class="cookie-consent-dialog-setting-value">
                        <label class="cookie-consent-dialog-setting-switch">
                            <input class="cookie-consent-dialog-setting-input" type="checkbox" checked="checked" onclick="event.Cancel()">
                            <span class="cookie-consent-dialog-setting-slider is-readonly"></span>
                        </label>
                    </div>
                    <div class="cookie-consent-dialog-setting-description is-hidden" onclick="HandleCookieConsentDialogRequiredCookiesDescriptionButtonClickEvent()">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-required-cookies-description' ); ?>
                    </div>
                </div>
                <div class="cookie-consent-dialog-setting">
                    <div class="cookie-consent-dialog-setting-title" onclick="HandleCookieConsentDialogPerformanceCookiesDescriptionButtonClickEvent()">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-european-performance-cookies-title' ); ?>
                        <image class="cookie-consent-dialog-setting-title-image" src="/static/image/base/help_icon.svg"/>
                    </div>
                    <div class="cookie-consent-dialog-setting-value">
                        <label class="cookie-consent-dialog-setting-switch">
                            <input class="cookie-consent-dialog-setting-input" type="checkbox">
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
        CookieConsentDialogSettingInputElementArray[ 1 ].checked = GetCookieConsent();
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
        if ( CookieConsentDialogSettingInputElementArray[ 1 ].checked )
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
