




















































<div id="cookie-consent-button" class="cookie-consent-button is-hidden" onclick="HandleCookieConsentButtonClickEvent()">
    <div class="cookie-consent-button-tooltip">
        <?php if ( $this->BrowserLocation->IsEurope ) { ?>
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-button-european-tooltip' ); ?>
        <?php } else { ?>
            <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-button-american-tooltip' ); ?>
        <?php } ?>
    </div>
</div>
<script>
    // -- VARIABLES

    var
        CookieConsentButtonElement;

    // -- FUNCTIONS

    function ShowCookieConsentButton(
        )
    {
        CookieConsentButtonElement.RemoveClass( "is-hidden" );
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

    // -- STATEMENTS

    CookieConsentButtonElement = GetElementById( "cookie-consent-button" );
</script>
