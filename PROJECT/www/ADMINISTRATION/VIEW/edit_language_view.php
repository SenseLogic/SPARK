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

        if ( !IsNumericText( number_field.value ) )
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
            <div class="form-container" data-is-row data-table-name="LANGUAGE">
                <div class="form-field-name" data-is-column-title data-column-name="Code">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Code' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Code">
                    <input-component class="form-component" result-name="Code" result-value="<?php echo htmlspecialchars( GetValueText( $this->Language->Code ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Number">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Number">
                    <input-component class="form-component" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $this->Language->Number ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Text">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Text">
                    <multilingual-input-component class="form-component" result-name="Text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Language->Text ) ); ?>" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="IsActive">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="IsActive">
                    <dropdown-component class="form-component" result-name="IsActive" result-value="<?php echo htmlspecialchars( GetValueText( $this->Language->IsActive ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ '0', '1' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'False', 'True' ] ) ) ); ?>"></dropdown-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/language' ) ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button">
                </button>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
