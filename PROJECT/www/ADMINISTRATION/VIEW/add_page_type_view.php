<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddPageTypeForm()
    {
        var
            add_page_type_form,
            it_is_valid_add_page_type_form,
            slug_field,
            title_field;

        add_page_type_form = document.AddPageTypeForm;
        slug_field = add_page_type_form.Slug;
        title_field = add_page_type_form.Title;

        slug_field.RemoveClass( "form-field-error" );
        title_field.RemoveClass( "form-field-error" );

        it_is_valid_add_page_type_form = true;

        if ( slug_field.value === "" )
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
                    <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo $field_value; ?>"/>
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
                    <?php echo htmlspecialchars( $this->GetText( 'Title' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Title" type="text" value="<?php echo $field_value; ?>" hidden/>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="multilingual-input-translation form-translation form-input" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetText( $language_code ) ); ?>"/>
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
