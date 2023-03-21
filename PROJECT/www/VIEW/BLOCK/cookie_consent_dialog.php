








































































































































































































































<div id="cookie-consent-dialog-container" class="cookie-consent-dialog-container is-hidden">
    <div class="cookie-consent-dialog">
        <div class="cookie-consent-dialog-header">
            <div class="cookie-consent-dialog-header-logo">
            </div>
            <div class="cookie-consent-dialog-header-close-button" onclick="HandleCookieConsentDialogCloseButtonClickedEvent()">
            </div>
        </div>
        <div class="cookie-consent-dialog-content">
            <div class="cookie-consent-dialog-title">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-title' ); ?>
            </div>
            <div class="cookie-consent-dialog-description">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-description' ); ?>
            </div>
            <div class="cookie-consent-dialog-button" onclick="HandleCookieConsentDialogAllowAllButtonClickedEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-allow-all-button' ); ?>
            </div>
            <div class="cookie-consent-dialog-preference-list">
                <div class="cookie-consent-dialog-preference">
                    <div class="cookie-consent-dialog-preference-title">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-necessary-cookies-title' ); ?>
                    </div>
                    <div class="cookie-consent-dialog-preference-value">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-always-active-label' ); ?>
                    </div>
                    <div class="cookie-consent-dialog-preference-description">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-necessary-cookies-description' ); ?>
                    </div>
                </div>
                <div class="cookie-consent-dialog-preference">
                    <div class="cookie-consent-dialog-preference-title">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-performance-cookies-title' ); ?>
                    </div>
                    <div class="cookie-consent-dialog-preference-value">
                        <label class="cookie-consent-dialog-switch">
                            <input id="cookie-consent-dialog-input" type="checkbox">
                            <span class="cookie-consent-dialog-slider"></span>
                        </label>
                    </div>
                    <div class="cookie-consent-dialog-preference-description">
                        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-performance-cookies-description' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cookie-consent-dialog-footer">
            <div class="cookie-consent-dialog-button" onclick="HandleCookieConsentDialogRejectAllButtonClickedEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-reject-all-button' ); ?>
            </div>
            <div class="cookie-consent-dialog-button" onclick="HandleCookieConsentDialogConfirmButtonClickedEvent()">
                <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-dialog-confirm-button' ); ?>
            </div>
        </div>
    </div>
</div>
<script>
    // -- VARIABLES

    var
        CookieConsentDialogContainerElement,
        CookieConsentDialogInputElement;

    // -- FUNCTIONS

    function ShowCookieConsentDialog(
        )
    {
        CookieConsentDialogInputElement.checked = GetCookieConsent();
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
        if ( CookieConsentDialogInputElement.checked )
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
    CookieConsentDialogInputElement = GetElementById( "cookie-consent-dialog-input" );
</script>
