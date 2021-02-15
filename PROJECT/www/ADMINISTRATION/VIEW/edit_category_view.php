<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<script>
    // -- FUNCTIONS

    function IsValidEditCategoryForm()
    {
        var
            edit_category_form,
            it_is_valid_edit_category_form,
            slug_field,
            name_field,
            text_field,
            image_field,
            number_field;

        it_is_valid_edit_category_form = true;

        edit_category_form = document.EditCategoryForm;
        slug_field = edit_category_form.Slug;
        name_field = edit_category_form.Name;
        text_field = edit_category_form.Text;
        image_field = edit_category_form.Image;
        number_field = edit_category_form.Number;

        if ( slug_field.value !== "" )
        {
            slug_field.classList.remove( "form-field-error" );
        }
        else
        {
            slug_field.classList.add( "form-field-error" );

            it_is_valid_edit_category_form = false;
        }

        if ( name_field.value !== "" )
        {
            name_field.classList.remove( "form-field-error" );
        }
        else
        {
            name_field.classList.add( "form-field-error" );

            it_is_valid_edit_category_form = false;
        }

        if ( text_field.value !== "" )
        {
            text_field.classList.remove( "form-field-error" );
        }
        else
        {
            text_field.classList.add( "form-field-error" );

            it_is_valid_edit_category_form = false;
        }

        if ( image_field.value !== "" )
        {
            image_field.classList.remove( "form-field-error" );
        }
        else
        {
            image_field.classList.add( "form-field-error" );

            it_is_valid_edit_category_form = false;
        }

        if ( number_field.value !== "" )
        {
            number_field.classList.remove( "form-field-error" );
        }
        else
        {
            number_field.classList.add( "form-field-error" );

            it_is_valid_edit_category_form = false;
        }

        return it_is_valid_edit_category_form;
    }
</script>
<div>
    <div class="page-section form-section">
        <form class="form-centered" name="EditCategoryForm" onsubmit="return IsValidEditCategoryForm()" action="/admin/category/edit/<?php echo htmlspecialchars( $this->Category->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    Slug :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( $this->Category->Slug ); ?>"/>
                </div>
                <div class="form-field-name">
                    Name :
                </div>
                <div>
                    <input class="form-input" name="Name" type="text" value="<?php echo htmlspecialchars( $this->Category->Name ); ?>"/>
                </div>
                <div class="form-field-name">
                    Text :
                </div>
                <div>
                    <textarea class="form-textarea" name="Text"><?php echo htmlspecialchars( $this->Category->Text ); ?></textarea>
                </div>
                <div class="form-field-name">
                    Image :
                </div>
                <div>
                    <input class="form-input" name="Image" type="text" value="<?php echo htmlspecialchars( $this->Category->Image ); ?>" oninput="HandleImageNameInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="/upload/image/<?php echo htmlspecialchars( $this->Category->Image ); ?>" onerror="this.src='/upload/image/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/icon/admin/upload_icon.svg"/><input id="file" class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                    </div>
                </div>
                <div class="form-field-name">
                    Number :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( $this->Category->Number ); ?>"/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/category">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
