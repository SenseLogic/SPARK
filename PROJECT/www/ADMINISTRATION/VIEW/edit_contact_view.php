<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<script>
    // -- FUNCTIONS

    function IsValidEditContactForm()
    {
        var
            edit_contact_form,
            it_is_valid_edit_contact_form,
            name_field,
            company_field,
            email_field,
            phone_field,
            subject_field,
            message_field,
            date_time_field;

        edit_contact_form = document.EditContactForm;
        name_field = edit_contact_form.Name;
        company_field = edit_contact_form.Company;
        email_field = edit_contact_form.Email;
        phone_field = edit_contact_form.Phone;
        subject_field = edit_contact_form.Subject;
        message_field = edit_contact_form.Message;
        date_time_field = edit_contact_form.DateTime;

        name_field.RemoveClass( "form-field-error" );
        company_field.RemoveClass( "form-field-error" );
        email_field.RemoveClass( "form-field-error" );
        phone_field.RemoveClass( "form-field-error" );
        subject_field.RemoveClass( "form-field-error" );
        message_field.RemoveClass( "form-field-error" );
        date_time_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_contact_form = true;

        if ( name_field.value === "" )
        {
            name_field.AddClass( "form-field-error" );

            it_is_valid_edit_contact_form = false;
        }

        if ( company_field.value === "" )
        {
            company_field.AddClass( "form-field-error" );

            it_is_valid_edit_contact_form = false;
        }

        if ( email_field.value === "" )
        {
            email_field.AddClass( "form-field-error" );

            it_is_valid_edit_contact_form = false;
        }

        if ( phone_field.value === "" )
        {
            phone_field.AddClass( "form-field-error" );

            it_is_valid_edit_contact_form = false;
        }

        if ( subject_field.value === "" )
        {
            subject_field.AddClass( "form-field-error" );

            it_is_valid_edit_contact_form = false;
        }

        if ( message_field.value === "" )
        {
            message_field.AddClass( "form-field-error" );

            it_is_valid_edit_contact_form = false;
        }

        if ( date_time_field.value === "" )
        {
            date_time_field.AddClass( "form-field-error" );

            it_is_valid_edit_contact_form = false;
        }

        return it_is_valid_edit_contact_form;
    }
</script>
<div id="edit-contact-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditContactForm" onsubmit="return IsValidEditContactForm()" action="/admin/contact/edit/<?php echo htmlspecialchars( $this->Contact->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name" data-is-column-title data-column-name="Name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="Name" result-class="form-input" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Name ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Company">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Company' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="Company" result-class="form-input" result-name="Company" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Company ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Email">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="Email" result-class="form-input" result-name="Email" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Email ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Phone">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Phone' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="Phone" result-class="form-input" result-name="Phone" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Phone ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Subject">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Subject' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="Subject" result-class="form-input" result-name="Subject" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Subject ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Message">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Message' ) ); ?> :
                </div>
                <div>
                    <text-input-component data-is-column-value data-column-name="Message" result-class="form-textarea" result-name="Message" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->Message ) ); ?>"></text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="DateTime">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="DateTime" result-class="form-input" result-name="DateTime" result-value="<?php echo htmlspecialchars( GetValueText( $this->Contact->DateTime ) ); ?>"></input-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
