<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddPageTypeForm()
    {
        var
            add_page_type_form,
            it_is_valid_add_page_type_form,
            id_field,
            slug_field,
            title_field;

        add_page_type_form = document.AddPageTypeForm;
        id_field = add_page_type_form.Id;
        slug_field = add_page_type_form.Slug;
        title_field = add_page_type_form.Title;

        id_field.RemoveClass( "form-field-error" );
        slug_field.RemoveClass( "form-field-error" );
        title_field.RemoveClass( "form-field-error" );

        it_is_valid_add_page_type_form = true;

        if ( id_field.value === "" )
        {
            id_field.AddClass( "form-field-error" );

            it_is_valid_add_page_type_form = false;
        }

        if ( !IsSlugText( slug_field.value ) )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_add_page_type_form = false;
        }

        return it_is_valid_add_page_type_form;
    }
</script>
<div id="add-page-type-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddPageTypeForm" onsubmit="return IsValidAddPageTypeForm()" action="/admin/page-type/add" method="post">
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
                    <?php echo htmlspecialchars( GetTextBySlug( 'Id' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Id" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Slug" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
                </div>
                <?php
                     $field_name = 'Title';

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
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Title" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
