<?php
    $this->Session->Captcha = GetCaptchaText( 6 );
    $this->Session->Store();
?>






<div class="container-extended view display-hidden" data-view-name="contact">
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
            <div id="thanks-text" class="display-hidden">
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
            company_field,
            email_field,
            it_is_valid_add_contact_form,
            message_field,
            subject_field,
            consent_field;

        it_is_valid_add_contact_form = true;

        add_contact_form = document.AddContactForm;
        name_field = add_contact_form.Name;
        company_field = add_contact_form.Company;
        email_field = add_contact_form.Email;
        subject_field = add_contact_form.Subject;
        message_field = add_contact_form.Message;
        consent_field = add_contact_form.Consent;
        captcha_field = add_contact_form.Captcha;

        if ( name_field.value !== "" )
        {
            name_field.classList.remove( "invalid" );
        }
        else
        {
            name_field.classList.add( "invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( company_field.value !== "" )
        {
            company_field.classList.remove( "invalid" );
        }
        else
        {
            company_field.classList.add( "invalid" );

            it_is_valid_add_contact_form = false;
        }

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

        if ( subject_field.value !== "" )
        {
            subject_field.classList.remove( "invalid" );
        }
        else
        {
            subject_field.classList.add( "invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( message_field.value !== "" )
        {
            message_field.classList.remove( "invalid" );
        }
        else
        {
            message_field.classList.add( "invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( consent_field.value !== "" )
        {
            consent_field.classList.remove( "invalid" );
        }
        else
        {
            consent_field.classList.add( "invalid" );

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
            form_data.append( "Company", add_contact_form.Company.value );
            form_data.append( "Email", add_contact_form.Email.value );
            form_data.append( "Phone", add_contact_form.Phone.value );
            form_data.append( "Subject", add_contact_form.Subject.value );
            form_data.append( "Message", add_contact_form.Message.value );
            form_data.append( "Captcha", add_contact_form.Captcha.value );

            request = await SendRequest(
                "/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/contact",
                "POST",
                form_data
                );

            if ( request.status === 200 )
            {
                GetElementById( "thanks-text" ).RemoveClass( "display-hidden" );
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