<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<script>
    // -- FUNCTIONS

    function IsValidEditBlockContentForm()
    {
        var
            edit_block_content_form,
            it_is_valid_edit_block_content_form,
            slug_field,
            name_field;

        edit_block_content_form = document.EditBlockContentForm;
        slug_field = edit_block_content_form.Slug;
        name_field = edit_block_content_form.Name;

        slug_field.RemoveClass( "form-field-error" );
        name_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_block_content_form = true;

        if ( !IsSlugText( slug_field.value ) )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_content_form = false;
        }

        if ( name_field.value === "" )
        {
            name_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_content_form = false;
        }

        return it_is_valid_edit_block_content_form;
    }
</script>
<div id="edit-block-content-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditBlockContentForm" onsubmit="return IsValidEditBlockContentForm()" action="/admin/block-content/edit/<?php echo htmlspecialchars( $this->BlockContent->Id ); ?>" method="post">
            <div class="form-container" data-is-row data-table-name="BLOCK_CONTENT">
                <div class="form-field-name" data-is-column-title data-column-name="Slug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Slug">
                    <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->BlockContent->Slug ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Name">
                    <input-component result-class="form-input" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $this->BlockContent->Name ) ); ?>"></input-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/block-content' ) ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
