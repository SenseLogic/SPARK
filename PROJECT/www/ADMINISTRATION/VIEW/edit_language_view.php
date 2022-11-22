<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditLanguageForm()
    {
        var
            edit_language_form,
            it_is_valid_edit_language_form,
            code_field,
            number_field,
            text_field,
            is_active_field;

        edit_language_form = document.EditLanguageForm;
        code_field = edit_language_form.Code;
        number_field = edit_language_form.Number;
        text_field = edit_language_form.Text;
        is_active_field = edit_language_form.IsActive;

        code_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );
        is_active_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_language_form = true;

        if ( code_field.value === "" )
        {
            code_field.AddClass( "form-field-error" );

            it_is_valid_edit_language_form = false;
        }

        if ( number_field.value === "" )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_edit_language_form = false;
        }

        if ( text_field.value === "" )
        {
            text_field.AddClass( "form-field-error" );

            it_is_valid_edit_language_form = false;
        }

        if ( !IsBooleanText( is_active_field.value )
             && !IsBinaryText( is_active_field.value ) )
        {
            is_active_field.AddClass( "form-field-error" );

            it_is_valid_edit_language_form = false;
        }

        return it_is_valid_edit_language_form;
    }
</script>
<div id="edit-language-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditLanguageForm" onsubmit="return IsValidEditLanguageForm()" action="/admin/language/edit/<?php echo htmlspecialchars( $this->Language->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Code' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Code" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Language->Code ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Language->Number ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Text" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Language->Text ) ); ?>" hidden/>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="multilingual-input-translation form-translation form-input" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"/>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Is Active' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="IsActive">
                        <option value="0"<?php if ( $this->Language->IsActive === '0' ) echo ' selected'; ?>>False</option>
                        <option value="1"<?php if ( $this->Language->IsActive === '1' ) echo ' selected'; ?>>True</option>
                    </select>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
