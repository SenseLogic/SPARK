<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddPageContentBlockForm()
    {
        var
            add_page_content_block_form,
            it_is_valid_add_page_content_block_form,
            page_slug_field,
            block_slug_field,
            number_field;

        add_page_content_block_form = document.AddPageContentBlockForm;
        page_slug_field = add_page_content_block_form.PageSlug;
        block_slug_field = add_page_content_block_form.BlockSlug;
        number_field = add_page_content_block_form.Number;

        page_slug_field.RemoveClass( "form-field-error" );
        block_slug_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );

        it_is_valid_add_page_content_block_form = true;

        if ( page_slug_field.value === "" )
        {
            page_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_page_content_block_form = false;
        }

        if ( block_slug_field.value === "" )
        {
            block_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_page_content_block_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_add_page_content_block_form = false;
        }

        return it_is_valid_add_page_content_block_form;
    }
</script>
<div id="add-page-content-block-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddPageContentBlockForm" onsubmit="return IsValidAddPageContentBlockForm()" action="/admin/page-content-block/add" method="post">
            <div class="form-container">
                <?php
                     $field_name = 'PageSlug';

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
                    <?php echo htmlspecialchars( $this->GetText( 'Page Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="PageSlug">
                        <?php  $page_array = GetDatabasePageArray(); ?>
                        <?php foreach ( $page_array as  $page ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $page->Slug ) ); ?>"<?php if ( GetValueText( $page->Slug ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( $page->Slug ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php
                     $field_name = 'BlockSlug';

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
                    <?php echo htmlspecialchars( $this->GetText( 'Block Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="BlockSlug">
                        <?php  $block_array = GetDatabaseBlockArray(); ?>
                        <?php foreach ( $block_array as  $block ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block->Slug ) ); ?>"<?php if ( GetValueText( $block->Slug ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( $block->Slug ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php
                     $field_name = 'Number';

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
                    <?php echo htmlspecialchars( $this->GetText( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo $field_value; ?>"/>
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
