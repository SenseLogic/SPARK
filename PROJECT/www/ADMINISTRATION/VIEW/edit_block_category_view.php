<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditBlockCategoryForm()
    {
        var
            edit_block_category_form,
            it_is_valid_edit_block_category_form,
            slug_field,
            name_field;

        edit_block_category_form = document.EditBlockCategoryForm;
        slug_field = edit_block_category_form.Slug;
        name_field = edit_block_category_form.Name;

        slug_field.RemoveClass( "form-field-error" );
        name_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_block_category_form = true;

        if ( !IsSlugText( slug_field.value ) )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_category_form = false;
        }

        if ( name_field.value === "" )
        {
            name_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_category_form = false;
        }

        return it_is_valid_edit_block_category_form;
    }
</script>
<div id="edit-block-category-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditBlockCategoryForm" onsubmit="return IsValidEditBlockCategoryForm()" action="/admin/block-category/edit/<?php echo htmlspecialchars( $this->BlockCategory->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockCategory->Slug ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Name' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Name" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockCategory->Name ) ); ?>"/>
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
