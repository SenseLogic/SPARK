<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditBlockTypeForm()
    {
        var
            edit_block_type_form,
            it_is_valid_edit_block_type_form,
            slug_field,
            name_field;

        edit_block_type_form = document.EditBlockTypeForm;
        slug_field = edit_block_type_form.Slug;
        name_field = edit_block_type_form.Name;

        slug_field.RemoveClass( "form-field-error" );
        name_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_block_type_form = true;

        if ( slug_field.value === "" )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_type_form = false;
        }

        if ( name_field.value === "" )
        {
            name_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_type_form = false;
        }

        return it_is_valid_edit_block_type_form;
    }
</script>
<div id="edit-block-type-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditBlockTypeForm" onsubmit="return IsValidEditBlockTypeForm()" action="/admin/block-type/edit/<?php echo htmlspecialchars( $this->BlockType->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockType->Slug ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Name' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Name" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockType->Name ) ); ?>" hidden/>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="multilingual-input-translation form-translation form-input" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"/>
                        <?php } ?>
                    </div>
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
