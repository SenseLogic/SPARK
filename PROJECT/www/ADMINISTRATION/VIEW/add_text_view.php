<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddTextForm()
    {
        var
            add_text_form,
            it_is_valid_add_text_form,
            slug_field,
            text_field;

        add_text_form = document.AddTextForm;
        slug_field = add_text_form.Slug;
        text_field = add_text_form.Text;

        slug_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );

        it_is_valid_add_text_form = true;

        if ( slug_field.value === "" )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_add_text_form = false;
        }

        if ( text_field.value === "" )
        {
            text_field.AddClass( "form-field-error" );

            it_is_valid_add_text_form = false;
        }

        return it_is_valid_add_text_form;
    }
</script>
<div id="add-text-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddTextForm" onsubmit="return IsValidAddTextForm()" action="/admin/text/add" method="post">
            <div class="form-container">
                <?php
                     $field_name = 'Slug';

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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo $field_value; ?>"/>
                </div>
                <?php
                     $field_name = 'Text';

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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <textarea class="multilingual-input form-textarea" name="Text" hidden><?php echo $field_value; ?></textarea>
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
