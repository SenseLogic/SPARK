<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditUserForm()
    {
        var
            edit_user_form,
            it_is_valid_edit_user_form,
            email_field,
            pseudonym_field,
            password_field,
            role_field;

        it_is_valid_edit_user_form = true;

        edit_user_form = document.EditUserForm;

        if ( email_field.value !== "" )
        {
            email_field.RemoveClass( "form-field-error" );
        }
        else
        {
            email_field.AddClass( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        if ( pseudonym_field.value !== "" )
        {
            pseudonym_field.RemoveClass( "form-field-error" );
        }
        else
        {
            pseudonym_field.AddClass( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        if ( password_field.value !== "" )
        {
            password_field.RemoveClass( "form-field-error" );
        }
        else
        {
            password_field.AddClass( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        if ( role_field.value !== "" )
        {
            role_field.RemoveClass( "form-field-error" );
        }
        else
        {
            role_field.AddClass( "form-field-error" );

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
                    <?php echo htmlspecialchars( $this->GetText( 'Email' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Email" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->User->Email ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Pseudonym' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Pseudonym" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->User->Pseudonym ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Password' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Password" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->User->Password ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetText( 'Role' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Role" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->User->Role ) ); ?>"/>
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
