<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddPageSubPageForm()
    {
        var
            add_page_sub_page_form,
            it_is_valid_add_page_sub_page_form,
            page_slug_field,
            sub_page_slug_field,
            number_field;

        add_page_sub_page_form = document.AddPageSubPageForm;
        page_slug_field = add_page_sub_page_form.PageSlug;
        sub_page_slug_field = add_page_sub_page_form.SubPageSlug;
        number_field = add_page_sub_page_form.Number;

        page_slug_field.RemoveClass( "form-field-error" );
        sub_page_slug_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );

        it_is_valid_add_page_sub_page_form = true;

        if ( page_slug_field.value === "" )
        {
            page_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_page_sub_page_form = false;
        }

        if ( sub_page_slug_field.value === "" )
        {
            sub_page_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_page_sub_page_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_add_page_sub_page_form = false;
        }

        return it_is_valid_add_page_sub_page_form;
    }
</script>
<div id="add-page-sub-page-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddPageSubPageForm" onsubmit="return IsValidAddPageSubPageForm()" action="/admin/page-sub-page/add" method="post">
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
                     $field_name = 'SubPageSlug';

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
                    <?php echo htmlspecialchars( $this->GetText( 'Sub Page Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="SubPageSlug">
                        <?php  $page_array = GetDatabasePageArray(); ?>
                        <?php foreach ( $page_array as  $page ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $page->Slug ) ); ?>"<?php if ( GetValueText( $page->Slug ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( $page->Slug ); ?></option>
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
