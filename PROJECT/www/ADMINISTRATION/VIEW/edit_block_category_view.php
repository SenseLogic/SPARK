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
                <div class="form-field-name" data-is-column-title data-column-name="Slug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="Slug" result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->BlockCategory->Slug ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="Name" result-class="form-input" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $this->BlockCategory->Name ) ); ?>"></input-component>
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
