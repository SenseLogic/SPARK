<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddUserForm()
    {
        var
            add_user_form,
            it_is_valid_add_user_form,
            email_field,
            pseudonym_field,
            password_field,
            role_field;

        it_is_valid_add_user_form = true;

        add_user_form = document.AddUserForm;
        email_field = add_user_form.Email;
        pseudonym_field = add_user_form.Pseudonym;
        password_field = add_user_form.Password;
        role_field = add_user_form.Role;

        if ( email_field.value !== "" )
        {
            email_field.classList.remove( "form-field-error" );
        }
        else
        {
            email_field.classList.add( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        if ( pseudonym_field.value !== "" )
        {
            pseudonym_field.classList.remove( "form-field-error" );
        }
        else
        {
            pseudonym_field.classList.add( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        if ( password_field.value !== "" )
        {
            password_field.classList.remove( "form-field-error" );
        }
        else
        {
            password_field.classList.add( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        if ( role_field.value !== "" )
        {
            role_field.classList.remove( "form-field-error" );
        }
        else
        {
            role_field.classList.add( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        return it_is_valid_add_user_form;
    }
</script>
<div id="add-user-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddUserForm" onsubmit="return IsValidAddUserForm()" action="/admin/user/add" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Email' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Email" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Pseudonym' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Pseudonym" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Password' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Password" type="text"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Role' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Role" type="text"/>
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
