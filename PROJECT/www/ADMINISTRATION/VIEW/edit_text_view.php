<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditTextForm()
    {
        var
            edit_text_form,
            it_is_valid_edit_text_form,
            slug_field,
            text_field;

        edit_text_form = document.EditTextForm;
        slug_field = edit_text_form.Slug;
        text_field = edit_text_form.Text;

        slug_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_text_form = true;

        if ( !IsSlugText( slug_field.value ) )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_text_form = false;
        }

        if ( text_field.value === "" )
        {
            text_field.AddClass( "form-field-error" );

            it_is_valid_edit_text_form = false;
        }

        return it_is_valid_edit_text_form;
    }
</script>
<div id="edit-text-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditTextForm" onsubmit="return IsValidEditTextForm()" action="/admin/text/edit/<?php echo htmlspecialchars( $this->Text->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Slug" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Text->Slug ) ); ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <multilingual-textarea-component class_="form-textarea" name_="Text" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $this->Text->Text ); ?></textarea-component>
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
