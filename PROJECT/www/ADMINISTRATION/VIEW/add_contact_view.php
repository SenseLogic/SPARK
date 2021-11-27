<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddContactForm()
    {
        var
            add_contact_form,
            it_is_valid_add_contact_form,
            name_field,
            company_field,
            email_field,
            phone_field,
            subject_field,
            message_field,
            date_time_field;

        it_is_valid_add_contact_form = true;

        add_contact_form = document.AddContactForm;
        name_field = add_contact_form.Name;
        company_field = add_contact_form.Company;
        email_field = add_contact_form.Email;
        phone_field = add_contact_form.Phone;
        subject_field = add_contact_form.Subject;
        message_field = add_contact_form.Message;
        date_time_field = add_contact_form.DateTime;

        if ( name_field.value !== "" )
        {
            name_field.classList.remove( "form-field-error" );
        }
        else
        {
            name_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        if ( company_field.value !== "" )
        {
            company_field.classList.remove( "form-field-error" );
        }
        else
        {
            company_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        if ( email_field.value !== "" )
        {
            email_field.classList.remove( "form-field-error" );
        }
        else
        {
            email_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        if ( phone_field.value !== "" )
        {
            phone_field.classList.remove( "form-field-error" );
        }
        else
        {
            phone_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        if ( subject_field.value !== "" )
        {
            subject_field.classList.remove( "form-field-error" );
        }
        else
        {
            subject_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        if ( message_field.value !== "" )
        {
            message_field.classList.remove( "form-field-error" );
        }
        else
        {
            message_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        return it_is_valid_add_contact_form;
    }
</script>
<div id="add-contact-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddContactForm" onsubmit="return IsValidAddContactForm()" action="/admin/contact/add" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetText_( 'Name' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Name" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetText_( 'Company' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Company" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetText_( 'Email' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Email" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetText_( 'Phone' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Phone" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetText_( 'Subject' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Subject" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetText_( 'Message' ) ); ?> :
                </div>
                <div>
                    <textarea class="form-textarea" name="Message"></textarea>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
