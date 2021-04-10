<?php
    $this->Session->Captcha = GetCaptchaText( 6 );
    $this->Session->Store();
?>














































<div class="add-contact-form">
    <form name="AddContactForm">
        <div class="add-contact-form-row">
            <input class="add-contact-form-input" name="Name" type="text" placeholder="Name"/>
        </div>
        <div class="add-contact-form-row">
            <input class="add-contact-form-input" name="Company" type="text" placeholder="Company"/>
        </div>
        <div class="add-contact-form-row">
            <input class="add-contact-form-input" name="Email" type="email" placeholder="Email"/>
        </div>
        <div class="add-contact-form-row">
            <input class="add-contact-form-input" name="Phone" type="tel" placeholder="Phone"/>
        </div>
        <div class="add-contact-form-row">
            <input class="add-contact-form-input" name="Subject" type="text" placeholder="Subject"/>
        </div>
        <div class="add-contact-form-row">
            <input class="add-contact-form-input" name="Message" type="text" placeholder="Message"/>
        </div>
        <div class="add-contact-form-row">
            <input class="add-contact-form-input" name="Captcha" type="text" placeholder="Captcha"/>
            <img class="add-contact-form-captcha-image" src="/captcha"/>
        </div>
        <div id="add-contact-form-send-button">
            Send
        </div>
        <div id="thanks-text" class="display-hidden">
            Thanks !
        </div>
    </form>
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
            phone_field,
            subject_field;

        it_is_valid_add_contact_form = true;

        add_contact_form = document.AddContactForm;
        name_field = add_contact_form.Name;
        company_field = add_contact_form.Company;
        email_field = add_contact_form.Email;
        phone_field = add_contact_form.Phone;
        subject_field = add_contact_form.Subject;
        message_field = add_contact_form.Message;
        captcha_field = add_contact_form.Captcha;

        if ( name_field.value !== "" )
        {
            name_field.classList.remove( "is-invalid" );
        }
        else
        {
            name_field.classList.add( "is-invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( company_field.value !== "" )
        {
            company_field.classList.remove( "is-invalid" );
        }
        else
        {
            company_field.classList.add( "is-invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( email_field.value !== ""
             && /^[a-z-.]+@[a-z-.]+\.[a-z]+$/g.test( email_field.value.toLowerCase() ) )
        {
            email_field.classList.remove( "is-invalid" );
        }
        else
        {
            email_field.classList.add( "is-invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( phone_field.value !== "" )
        {
            phone_field.classList.remove( "is-invalid" );
        }
        else
        {
            phone_field.classList.add( "is-invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( subject_field.value !== "" )
        {
            subject_field.classList.remove( "is-invalid" );
        }
        else
        {
            subject_field.classList.add( "is-invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( message_field.value !== "" )
        {
            message_field.classList.remove( "is-invalid" );
        }
        else
        {
            message_field.classList.add( "is-invalid" );

            it_is_valid_add_contact_form = false;
        }

        if ( captcha_field.value !== ""
             && IsValidCaptcha( captcha_field.value ) )
        {
            captcha_field.classList.remove( "is-invalid" );
        }
        else
        {
            captcha_field.classList.add( "is-invalid" );

            it_is_valid_add_contact_form = false;
        }

        return it_is_valid_add_contact_form;
    }

    // ~~

    function ClearAddContactForm(
        )
    {
        var
            add_contact_form;

        add_contact_form = document.AddContactForm;
        add_contact_form.Name.value = "";
        add_contact_form.Company.value = "";
        add_contact_form.Email.value = "";
        add_contact_form.Phone.value = "";
        add_contact_form.Subject.value = "";
        add_contact_form.Message.value = "";
        add_contact_form.Captcha.value = "";
    }

    // ~~

    async function HandleAddContactFormSendButtonClickEvent(
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
                ClearAddContactForm();
                GetElementById( "thanks-text" ).RemoveClass( "display-hidden" );
            }
        }
    }

    // -- STATEMENTS

    GetElementById( "add-contact-form-send-button" ).AddEventListener(
        "click",
        function (
            event
            )
        {
            event.preventDefault();

            HandleAddContactFormSendButtonClickEvent();
        }
        );
</script>
