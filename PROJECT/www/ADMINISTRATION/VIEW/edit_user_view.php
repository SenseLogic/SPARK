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
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Pseudonym' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Pseudonym" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->User->Pseudonym ) ); ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Password' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Password" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->User->Password ) ); ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Role' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Role" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->User->Role ) ); ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Email" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->User->Email ) ); ?>"></input-component>
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
