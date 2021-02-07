<?php
    $this->Session->Captcha = GetCaptchaText( 6 );
    $this->Session->Store();
?>
<style>
    .contact-captcha-image
    {
        height: 3rem;
    }
</style>
<div class="container-extended view display-none" data-view-name="contact">
    <div>
        <form name="AddContactForm">
            <div>
                <input id="name" name="Name" type="text" placeholder="Name"/>
            </div>
            <div>
                <input id="email" name="Email" type="text" placeholder="Email"/>
            </div>
            <div>
                <input id="message" name="Message" type="text" placeholder="Message"/>
            </div>
            <div>
                <input name="Captcha" type="text" placeholder="Captcha"/>
                <img class="height-3rem" src="/captcha"/>
            </div>
            <button id="add-contact-button">
                Send
            </button>
            <div id="thanks-text" class="display-none">
                Thanks !
            </div>
        </form>
    </div>
</div>
<script>
    // -- FUNCTIONS

    <?php echo GetCaptchaCode( $this->Session->Captcha ); ?>

    // ~~

    function IsValidAddContactForm()
    {
        var
            add_contact_form,
            captcha_field,
            email_field,
            it_is_valid_add_contact_form;

        it_is_valid_add_contact_form = true;

        add_contact_form = document.AddContactForm;
        email_field = add_contact_form.Email;
        captcha_field = add_contact_form.Captcha;

        if ( email_field.value !== ""
             && /^[a-z-.]+@[a-z-.]+\.[a-z]+$/g.test( email_field.value.toLowerCase() ) )
        {
            email_field.classList.remove( "invalid" );
        }
        else
        {
            email_field.classList.add( "invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( captcha_field.value !== ""
             && IsValidCaptcha( captcha_field.value ) )
        {
            captcha_field.classList.remove( "invalid" );
        }
        else
        {
            captcha_field.classList.add( "invalid" );

            it_is_valid_add_contact_form = false;
        }

        return it_is_valid_add_contact_form;
    }

    // ~~

    async function HandleAddContactButtonClickEvent(
        )
    {
        var
            add_contact_form,
            form_data,
            request;

        add_contact_form = document.AddContactForm;

        if ( IsValidAddContactForm( add_contact_form ) )
        {
            form_data = new FormData();
            form_data.append( "Name", add_contact_form.Name.value );
            form_data.append( "Email", add_contact_form.Email.value );
            form_data.append( "Message", add_contact_form.Message.value );
            form_data.append( "Captcha", add_contact_form.Captcha.value );

            request = await SendRequest(
                "/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/contact",
                "POST",
                form_data
                );

            if ( request.status === 200 )
            {
                GetElementById( "thanks-text" ).RemoveClass( "display-none" );
            }
        }
    }

    // -- STATEMENTS

    GetElementById( "add-contact-button" ).AddEventListener(
        "click",
        function (
            event
            )
        {
            event.preventDefault();

            HandleAddContactButtonClickEvent();
        }
        );
</script>
