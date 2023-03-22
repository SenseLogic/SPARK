

















































































































































































































































































<div id="cookie-consent-dialog-container" class="cookie-consent-dialog-container is-hidden">
    <div class="cookie-consent-dialog">
        <div class="cookie-consent-dialog-header">
            <img class="cookie-consent-dialog-header-image" src="/static/image/base/logo.svg"/>
            <div class="cookie-consent-dialog-header-title">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-title' ); ?>
            </div>
            <div class="cookie-consent-dialog-header-close-button" onclick="HandleCookieConsentDialogCloseButtonClickedEvent()">
            </div>
        </div>
        <div class="cookie-consent-dialog-content">
            <div class="cookie-consent-dialog-description">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-description' ); ?>
            </div>
            <div class="cookie-content-dialog-button-list">
                <div class="cookie-consent-dialog-button cookie-consent-dialog-allow-button" onclick="HandleCookieConsentDialogAllowAllButtonClickedEvent()">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-allow-all-button' ); ?>
                </div>
                <div class="cookie-consent-dialog-button cookie-consent-dialog-reject-button" onclick="HandleCookieConsentDialogRejectAllButtonClickedEvent()">
                    <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-reject-all-button' ); ?>
                </div>
            </div>
            <div class="cookie-consent-dialog-setting-list">
                <div class="cookie-consent-dialog-setting">
                    <div class="cookie-consent-dialog-setting-title" onclick="CookieConsentDialogSettingDescriptionElementArray[ 0 ].ToggleClass( 'is-hidden' )">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-necessary-cookies-title' ); ?>
                        <image class="cookie-consent-dialog-setting-title-image" src="/static/image/base/help_icon.svg"/>
                    </div>
                    <div class="cookie-consent-dialog-setting-value">
                        <label class="cookie-consent-dialog-setting-switch">
                            <input class="cookie-consent-dialog-setting-input" type="checkbox" checked="checked" onclick="event.Cancel()">
                            <span class="cookie-consent-dialog-setting-slider is-readonly"></span>
                        </label>
                    </div>
                    <div class="cookie-consent-dialog-setting-description is-hidden" onclick="event.currentTarget.AddClass( 'is-hidden' )">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-necessary-cookies-description' ); ?>
                    </div>
                </div>
                <div class="cookie-consent-dialog-setting">
                    <div class="cookie-consent-dialog-setting-title" onclick="CookieConsentDialogSettingDescriptionElementArray[ 1 ].ToggleClass( 'is-hidden' )">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-performance-cookies-title' ); ?>
                        <image class="cookie-consent-dialog-setting-title-image" src="/static/image/base/help_icon.svg"/>
                    </div>
                    <div class="cookie-consent-dialog-setting-value">
                        <label class="cookie-consent-dialog-setting-switch">
                            <input class="cookie-consent-dialog-setting-input" type="checkbox">
                            <span class="cookie-consent-dialog-setting-slider"></span>
                        </label>
                    </div>
                    <div class="cookie-consent-dialog-setting-description is-hidden" onclick="event.currentTarget.AddClass( 'is-hidden' )">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-performance-cookies-description' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cookie-consent-dialog-button-list">
            <div class="cookie-consent-dialog-button cookie-consent-dialog-confirm-button" onclick="HandleCookieConsentDialogConfirmButtonClickedEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-confirm-button' ); ?>
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
    }

    // ~~

    function HideCookieConsentDialog(
        )
    {
        CookieConsentDialogContainerElement.AddClass( "is-hidden" );
    }

    // ~~

    function HandleCookieConsentDialogCloseButtonClickedEvent(
        )
    {
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentDialogAllowAllButtonClickedEvent(
        )
    {
        SetCookieConsent( "true" );
        ApplyCookieConsent();
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentDialogRejectAllButtonClickedEvent(
        )
    {
        SetCookieConsent( "false" );
        ApplyCookieConsent();
        HideCookieConsentDialog();
        ShowCookieConsentButton();
    }

    // ~~

    function HandleCookieConsentDialogConfirmButtonClickedEvent(
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
