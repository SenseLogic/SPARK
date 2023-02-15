<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddBlockContentForm()
    {
        var
            add_block_content_form,
            it_is_valid_add_block_content_form,
            id_field,
            slug_field,
            name_field;

        add_block_content_form = document.AddBlockContentForm;
        id_field = add_block_content_form.Id;
        slug_field = add_block_content_form.Slug;
        name_field = add_block_content_form.Name;

        id_field.RemoveClass( "form-field-error" );
        slug_field.RemoveClass( "form-field-error" );
        name_field.RemoveClass( "form-field-error" );

        it_is_valid_add_block_content_form = true;

        if ( id_field.value === "" )
        {
            id_field.AddClass( "form-field-error" );

            it_is_valid_add_block_content_form = false;
        }

        if ( !IsSlugText( slug_field.value ) )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_add_block_content_form = false;
        }

        if ( name_field.value === "" )
        {
            name_field.AddClass( "form-field-error" );

            it_is_valid_add_block_content_form = false;
        }

        return it_is_valid_add_block_content_form;
    }
</script>
<div id="add-block-content-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddBlockContentForm" onsubmit="return IsValidAddBlockContentForm()" action="/admin/block-content/add" method="post">
            <div class="form-container">
                <?php
                     $field_name = 'Id';

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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Id' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Id" type="text" value="<?php echo $field_value; ?>"/>
                </div>
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
                     $field_name = 'Name';

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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Name' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Name" type="text" value="<?php echo $field_value; ?>"/>
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
