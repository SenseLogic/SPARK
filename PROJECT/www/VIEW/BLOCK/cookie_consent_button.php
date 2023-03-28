




















































<div id="cookie-consent-button" class="cookie-consent-button is-hidden" onclick="HandleCookieConsentButtonClickEvent()">
    <div class="cookie-consent-button-tooltip">
        <?php echo $this->GetProcessedTextBySlug( 'cookie-consent-button-european-tooltip' ); ?>
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
