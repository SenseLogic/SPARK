<?php
    $this->Session->Captcha = GetCaptchaText( 6 );
    $this->Session->Store();
?>













































































































<div class="narrow-margined-container contact-form">
    <form id="contact-form-container" class="contact-form-container" name="ContactForm">
        <div class="contact-form-row">
            <input class="contact-form-input" name="Name" type="text" placeholder="<?php echo $this->GetText( 'ContactFormNamePlaceholder' ); ?>"/>
        </div>
        <div class="contact-form-row">
            <input class="contact-form-input" name="Company" type="text" placeholder="<?php echo $this->GetText( 'ContactFormCompanyPlaceholder' ); ?>"/>
        </div>
        <div class="contact-form-row">
            <input class="contact-form-input" name="Email" type="email" placeholder="<?php echo $this->GetText( 'ContactFormEmailPlaceholder' ); ?>"/>
        </div>
        <div class="contact-form-row">
            <input class="contact-form-input" name="Phone" type="tel" placeholder="<?php echo $this->GetText( 'ContactFormPhonePlaceholder' ); ?>"/>
        </div>
        <div class="contact-form-row">
            <input class="contact-form-input" name="Subject" type="text" placeholder="<?php echo $this->GetText( 'ContactFormSubjectPlaceholder' ); ?>"/>
        </div>
        <div class="contact-form-row">
            <textarea class="contact-form-input contact-form-textarea" name="Message" type="text" placeholder="<?php echo $this->GetText( 'ContactFormMessagePlaceholder' ); ?>"></textarea>
        </div>
        <div class="contact-form-row">
            <input class="contact-form-input" name="Captcha" type="text" placeholder="<?php echo $this->GetText( 'ContactFormCaptchaPlaceholder' ); ?>"/>
            <img class="contact-form-captcha-image" src="/captcha"/>
        </div>
        <div class="contact-form-row">
            <div id="contact-form-send-button" class="contact-form-send-button" onclick="CancelEvent( event ); HandleContactFormSendButtonClickEvent()">
                <?php echo $this->GetText( 'ContactFormSendButton' ); ?>
            </div>
        </div>
    </form>
    <div id="contact-form-thanks-container" class="contact-form-thanks-container is-hidden">
        <div class="contact-form-thanks-text">
            <?php echo $this->GetText( 'ContactFormThanksText' ); ?>
        </div>
    </div>
</div>
<script>
    // -- FUNCTIONS

    <?php echo GetCaptchaCode( $this->Session->Captcha ); ?>

    // ~~

    function IsValidContactForm()
    {
        var
            contact_form,
            captcha_input_element,
            company_input_element,
            email_input_element,
            it_is_valid_contact_form,
            message_input_element,
            name_input_element,
            phone_input_element,
            subject_input_element;

        it_is_valid_contact_form = true;

        contact_form = document.ContactForm;
        name_input_element = contact_form.Name;
        company_input_element = contact_form.Company;
        email_input_element = contact_form.Email;
        phone_input_element = contact_form.Phone;
        subject_input_element = contact_form.Subject;
        message_textarea_element = contact_form.Message;
        captcha_input_element = contact_form.Captcha;

        if ( name_input_element.value !== "" )
        {
            name_input_element.RemoveClass( "is-invalid" );
        }
        else
        {
            name_input_element.AddClass( "is-invalid" );

            it_is_valid_contact_form = false;
        }

        if ( company_input_element.value !== "" )
        {
            company_input_element.RemoveClass( "is-invalid" );
        }
        else
        {
            company_input_element.AddClass( "is-invalid" );

            it_is_valid_contact_form = false;
        }

        if ( email_input_element.value !== ""
             && /^[a-z-.]+@[a-z-.]+\.[a-z]+$/g.test( email_input_element.value.toLowerCase() ) )
        {
            email_input_element.RemoveClass( "is-invalid" );
        }
        else
        {
            email_input_element.AddClass( "is-invalid" );

            it_is_valid_contact_form = false;
        }

        if ( phone_input_element.value !== "" )
        {
            phone_input_element.RemoveClass( "is-invalid" );
        }
        else
        {
            phone_input_element.AddClass( "is-invalid" );

            it_is_valid_contact_form = false;
        }

        if ( subject_input_element.value !== "" )
        {
            subject_input_element.RemoveClass( "is-invalid" );
        }
        else
        {
            subject_input_element.AddClass( "is-invalid" );

            it_is_valid_contact_form = false;
        }

        if ( message_textarea_element.value !== "" )
        {
            message_textarea_element.RemoveClass( "is-invalid" );
        }
        else
        {
            message_textarea_element.AddClass( "is-invalid" );

            it_is_valid_contact_form = false;
        }

        if ( captcha_input_element.value !== ""
             && IsValidCaptcha( captcha_input_element.value ) )
        {
            captcha_input_element.RemoveClass( "is-invalid" );
        }
        else
        {
            captcha_input_element.AddClass( "is-invalid" );

            it_is_valid_contact_form = false;
        }

        return it_is_valid_contact_form;
    }

    // ~~

    function ClearContactForm(
        )
    {
        var
            contact_form;

        contact_form = document.ContactForm;
        contact_form.Name.value = "";
        contact_form.Company.value = "";
        contact_form.Email.value = "";
        contact_form.Phone.value = "";
        contact_form.Subject.value = "";
        contact_form.Message.value = "";
        contact_form.Captcha.value = "";
    }

    // ~~

    async function HandleContactFormSendButtonClickEvent(
        )
    {
        var
            contact_form,
            form_data,
            request;

        contact_form = document.ContactForm;

        if ( IsValidContactForm( contact_form ) )
        {
            form_data = new FormData();
            form_data.append( "Name", contact_form.Name.value );
            form_data.append( "Company", contact_form.Company.value );
            form_data.append( "Email", contact_form.Email.value );
            form_data.append( "Phone", contact_form.Phone.value );
            form_data.append( "Subject", contact_form.Subject.value );
            form_data.append( "Message", contact_form.Message.value );
            form_data.append( "Captcha", contact_form.Captcha.value );

            request = await SendRequest(
                "/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/contact",
                "POST",
                form_data
                );

            if ( request.status === 200 )
            {
                GetElementById( "contact-form-container" )
                    .AnimateStyles(
                        {
                            "opacity" : [ "100%", "0%", "0%", "100%" ]
                        },
                        [ 0.0, 0.5, 4.5, 5.0 ]
                        );

                GetElementById( "contact-form-thanks-container" )
                    .AnimateStyles(
                        {
                            "opacity" : [ "0%", "100%", "100%", "0%" ],
                            "class-list" : [ "-is-hidden", "-is-hidden", "-is-hidden", "+is-hidden" ]
                        },
                        [ 0.0, 0.5, 4.5, 5.0 ]
                        );

                DelayCall( ClearContactForm, 0.5 );
            }
        }
    }
</script>
