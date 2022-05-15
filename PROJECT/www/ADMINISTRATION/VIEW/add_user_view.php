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

        add_user_form = document.AddUserForm;
        email_field = add_user_form.Email;
        pseudonym_field = add_user_form.Pseudonym;
        password_field = add_user_form.Password;
        role_field = add_user_form.Role;

        email_field.RemoveClass( "form-field-error" );
        pseudonym_field.RemoveClass( "form-field-error" );
        password_field.RemoveClass( "form-field-error" );
        role_field.RemoveClass( "form-field-error" );

        it_is_valid_add_user_form = true;

        if ( email_field.value === "" )
        {
            email_field.AddClass( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        if ( pseudonym_field.value === "" )
        {
            pseudonym_field.AddClass( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        if ( password_field.value === "" )
        {
            password_field.AddClass( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        if ( role_field.value === "" )
        {
            role_field.AddClass( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        return it_is_valid_add_user_form;
    }
</script>
<div id="add-user-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddUserForm" onsubmit="return IsValidAddUserForm()" action="/admin/user/add" method="post">
            <div class="form-container">
                <?php
                     $field_name = 'Email';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Email' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Email" type="text" value="<?php echo $field_value; ?>"/>
                </div>
                <?php
                     $field_name = 'Pseudonym';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Pseudonym' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Pseudonym" type="text" value="<?php echo $field_value; ?>"/>
                </div>
                <?php
                     $field_name = 'Password';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Password' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Password" type="text" value="<?php echo $field_value; ?>"/>
                </div>
                <?php
                     $field_name = 'Role';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Role' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Role" type="text" value="<?php echo $field_value; ?>"/>
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
