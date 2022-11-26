<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditTextBlockForm()
    {
        var
            edit_text_block_form,
            it_is_valid_edit_text_block_form,
            page_id_field,
            category_slug_field,
            type_slug_field,
            number_field,
            language_code_array_field,
            minimum_height_field,
            title_field,
            text_field;

        edit_text_block_form = document.EditTextBlockForm;
        page_id_field = edit_text_block_form.PageId;
        category_slug_field = edit_text_block_form.CategorySlug;
        type_slug_field = edit_text_block_form.TypeSlug;
        number_field = edit_text_block_form.Number;
        language_code_array_field = edit_text_block_form.LanguageCodeArray;
        minimum_height_field = edit_text_block_form.MinimumHeight;
        title_field = edit_text_block_form.Title;
        text_field = edit_text_block_form.Text;

        page_id_field.RemoveClass( "form-field-error" );
        category_slug_field.RemoveClass( "form-field-error" );
        type_slug_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );
        language_code_array_field.RemoveClass( "form-field-error" );
        minimum_height_field.RemoveClass( "form-field-error" );
        title_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_text_block_form = true;

        if ( page_id_field.value === "" )
        {
            page_id_field.AddClass( "form-field-error" );

            it_is_valid_edit_text_block_form = false;
        }

        if ( category_slug_field.value === "" )
        {
            category_slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_text_block_form = false;
        }

        if ( type_slug_field.value === "" )
        {
            type_slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_text_block_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_edit_text_block_form = false;
        }

        if ( language_code_array_field.value === "" )
        {
            language_code_array_field.AddClass( "form-field-error" );

            it_is_valid_edit_text_block_form = false;
        }

        if ( minimum_height_field.value === "" )
        {
            minimum_height_field.AddClass( "form-field-error" );

            it_is_valid_edit_text_block_form = false;
        }

        if ( text_field.value === "" )
        {
            text_field.AddClass( "form-field-error" );

            it_is_valid_edit_text_block_form = false;
        }

        return it_is_valid_edit_text_block_form;
    }
</script>
<div id="edit-text-block-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditTextBlockForm" onsubmit="return IsValidEditTextBlockForm()" action="/admin/text-block/edit/<?php echo htmlspecialchars( $this->TextBlock->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page Id' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="PageId" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->TextBlock->PageId ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Category Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="CategorySlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->TextBlock->CategorySlug ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->TextBlock->TypeSlug ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->TextBlock->Number ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="LanguageCodeArray" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->TextBlock->LanguageCodeArray ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Minimum Height' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="MinimumHeight" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->TextBlock->MinimumHeight ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Title" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->TextBlock->Title ) ); ?>" hidden/>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="multilingual-input-translation form-translation form-input" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"/>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <textarea class="multilingual-input form-textarea" name="Text" hidden><?php echo htmlspecialchars( $this->TextBlock->Text ); ?></textarea>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <textarea class="multilingual-input-translation form-translation form-textarea" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"></textarea>
                        <?php } ?>
                    </div>
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
