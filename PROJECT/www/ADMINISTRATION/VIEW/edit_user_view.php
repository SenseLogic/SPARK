<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<script>
    // -- FUNCTIONS

    function IsValidEditUserForm()
    {
        var
            edit_user_form,
            it_is_valid_edit_user_form,
            pseudonym_field,
            password_field,
            role_field,
            email_field;

        edit_user_form = document.EditUserForm;
        pseudonym_field = edit_user_form.Pseudonym;
        password_field = edit_user_form.Password;
        role_field = edit_user_form.Role;
        email_field = edit_user_form.Email;

        pseudonym_field.RemoveClass( "form-field-error" );
        password_field.RemoveClass( "form-field-error" );
        role_field.RemoveClass( "form-field-error" );
        email_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_user_form = true;

        if ( pseudonym_field.value === "" )
        {
            pseudonym_field.AddClass( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        if ( password_field.value === "" )
        {
            password_field.AddClass( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        if ( role_field.value === "" )
        {
            role_field.AddClass( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        if ( email_field.value === "" )
        {
            email_field.AddClass( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        return it_is_valid_edit_user_form;
    }
</script>
<div id="edit-user-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditUserForm" onsubmit="return IsValidEditUserForm()" action="/admin/user/edit/<?php echo htmlspecialchars( $this->User->Id ); ?>" method="post">
            <div class="form-container" data-is-row data-table-name="USER">
                <div class="form-field-name" data-is-column-title data-column-name="Pseudonym">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Pseudonym' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Pseudonym">
                    <input-component result-class="form-input" result-name="Pseudonym" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Pseudonym ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Password">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Password' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Password">
                    <input-component result-class="form-input" result-name="Password" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Password ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Role">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Role' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Role">
                    <input-component result-class="form-input" result-name="Role" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Role ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Email">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Email">
                    <input-component result-class="form-input" result-name="Email" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Email ) ); ?>"></input-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/user' ) ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
