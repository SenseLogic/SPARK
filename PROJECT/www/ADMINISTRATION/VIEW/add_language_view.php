<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddLanguageForm()
    {
        var
            add_language_form,
            it_is_valid_add_language_form,
            id_field,
            code_field,
            number_field,
            text_field,
            is_active_field;

        add_language_form = document.AddLanguageForm;
        id_field = add_language_form.Id;
        code_field = add_language_form.Code;
        number_field = add_language_form.Number;
        text_field = add_language_form.Text;
        is_active_field = add_language_form.IsActive;

        id_field.RemoveClass( "form-field-error" );
        code_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );
        is_active_field.RemoveClass( "form-field-error" );

        it_is_valid_add_language_form = true;

        if ( id_field.value === "" )
        {
            id_field.AddClass( "form-field-error" );

            it_is_valid_add_language_form = false;
        }

        if ( code_field.value === "" )
        {
            code_field.AddClass( "form-field-error" );

            it_is_valid_add_language_form = false;
        }

        if ( number_field.value === "" )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_add_language_form = false;
        }

        if ( text_field.value === "" )
        {
            text_field.AddClass( "form-field-error" );

            it_is_valid_add_language_form = false;
        }

        if ( !IsBooleanText( is_active_field.value )
             && !IsBinaryText( is_active_field.value ) )
        {
            is_active_field.AddClass( "form-field-error" );

            it_is_valid_add_language_form = false;
        }

        return it_is_valid_add_language_form;
    }
</script>
<div id="add-language-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddLanguageForm" onsubmit="return IsValidAddLanguageForm()" action="/admin/language/add" method="post">
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
                     $field_name = 'Code';

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
                    <?php echo htmlspecialchars( GetTextBySlug( 'Code' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Code" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                    <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Number" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <multilingual-input-component class_="form-input" name_="Text" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                </div>
                <?php
                     $field_name = 'IsActive';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '1';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="IsActive">
                        <option value="0"<?php if ( $field_value === '0' ) echo ' selected'; ?>>False</option>
                        <option value="1"<?php if ( $field_value === '1' ) echo ' selected'; ?>>True</option>
                    </select>
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
