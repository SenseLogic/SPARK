<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditPageForm()
    {
        var
            edit_page_form,
            it_is_valid_edit_page_form,
            slug_field,
            route_field,
            type_slug_field,
            number_field,
            language_code_array_field,
            is_active_field,
            title_field,
            heading_field,
            teaser_field,
            image_path_field,
            image_vertical_position_field,
            image_horizontal_position_field,
            video_path_field,
            meta_title_field,
            meta_description_field,
            meta_image_path_field;

        edit_page_form = document.EditPageForm;
        slug_field = edit_page_form.Slug;
        route_field = edit_page_form.Route;
        type_slug_field = edit_page_form.TypeSlug;
        number_field = edit_page_form.Number;
        language_code_array_field = edit_page_form.LanguageCodeArray;
        is_active_field = edit_page_form.IsActive;
        title_field = edit_page_form.Title;
        heading_field = edit_page_form.Heading;
        teaser_field = edit_page_form.Teaser;
        image_path_field = edit_page_form.ImagePath;
        image_vertical_position_field = edit_page_form.ImageVerticalPosition;
        image_horizontal_position_field = edit_page_form.ImageHorizontalPosition;
        video_path_field = edit_page_form.VideoPath;
        meta_title_field = edit_page_form.MetaTitle;
        meta_description_field = edit_page_form.MetaDescription;
        meta_image_path_field = edit_page_form.MetaImagePath;

        slug_field.RemoveClass( "form-field-error" );
        route_field.RemoveClass( "form-field-error" );
        type_slug_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );
        language_code_array_field.RemoveClass( "form-field-error" );
        is_active_field.RemoveClass( "form-field-error" );
        title_field.RemoveClass( "form-field-error" );
        heading_field.RemoveClass( "form-field-error" );
        teaser_field.RemoveClass( "form-field-error" );
        image_path_field.RemoveClass( "form-field-error" );
        image_vertical_position_field.RemoveClass( "form-field-error" );
        image_horizontal_position_field.RemoveClass( "form-field-error" );
        video_path_field.RemoveClass( "form-field-error" );
        meta_title_field.RemoveClass( "form-field-error" );
        meta_description_field.RemoveClass( "form-field-error" );
        meta_image_path_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_page_form = true;

        if ( slug_field.value === "" )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_form = false;
        }

        if ( route_field.value === "" )
        {
            route_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_form = false;
        }

        if ( !IsSlugText( type_slug_field.value ) )
        {
            type_slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_form = false;
        }

        if ( language_code_array_field.value === "" )
        {
            language_code_array_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_form = false;
        }

        if ( !IsBooleanText( is_active_field.value )
             && !IsBinaryText( is_active_field.value ) )
        {
            is_active_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_form = false;
        }

        if ( image_vertical_position_field.value === "" )
        {
            image_vertical_position_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_form = false;
        }

        if ( image_horizontal_position_field.value === "" )
        {
            image_horizontal_position_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_form = false;
        }

        return it_is_valid_edit_page_form;
    }
</script>
<div id="edit-page-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditPageForm" onsubmit="return IsValidEditPageForm()" action="/admin/page/edit/<?php echo htmlspecialchars( $this->Page->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Slug" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Slug ) ); ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Route" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Route ) ); ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="TypeSlug">
                        <?php  $page_type_array = $this->PageTypeArray; ?>
                        <?php foreach ( $page_type_array as  $page_type ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $page_type->Slug ) ); ?>"<?php if ( $this->Page->TypeSlug === $page_type->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page_type->Title ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="Number" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Number ) ); ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div>
                    <input-component class_="form-input" name_="LanguageCodeArray" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->LanguageCodeArray ) ); ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="IsActive">
                        <option value="0"<?php if ( $this->Page->IsActive === '0' ) echo ' selected'; ?>>False</option>
                        <option value="1"<?php if ( $this->Page->IsActive === '1' ) echo ' selected'; ?>>True</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                </div>
                <div>
                    <multilingual-input-component class_="form-input" name_="Title" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Title ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
                </div>
                <div>
                    <multilingual-input-component class_="form-input" name_="Heading" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->Heading ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                </div>
                <div>
                    <multilingual-textarea-component class_="form-textarea" name_="Teaser" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $this->Page->Teaser ); ?></textarea-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->Page->ImagePath ); ?>" oninput="HandleImagePathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Page->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageVerticalPosition">
                        <option value="top"<?php if ( $this->Page->ImageVerticalPosition === 'top' ) echo ' selected'; ?>>Top</option>
                        <option value="10%"<?php if ( $this->Page->ImageVerticalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                        <option value="20%"<?php if ( $this->Page->ImageVerticalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                        <option value="30%"<?php if ( $this->Page->ImageVerticalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                        <option value="40%"<?php if ( $this->Page->ImageVerticalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                        <option value="center"<?php if ( $this->Page->ImageVerticalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                        <option value="60%"<?php if ( $this->Page->ImageVerticalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                        <option value="70%"<?php if ( $this->Page->ImageVerticalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                        <option value="80%"<?php if ( $this->Page->ImageVerticalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                        <option value="90%"<?php if ( $this->Page->ImageVerticalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                        <option value="bottom"<?php if ( $this->Page->ImageVerticalPosition === 'bottom' ) echo ' selected'; ?>>Bottom</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageHorizontalPosition">
                        <option value="left"<?php if ( $this->Page->ImageHorizontalPosition === 'left' ) echo ' selected'; ?>>Left</option>
                        <option value="10%"<?php if ( $this->Page->ImageHorizontalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                        <option value="20%"<?php if ( $this->Page->ImageHorizontalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                        <option value="30%"<?php if ( $this->Page->ImageHorizontalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                        <option value="40%"<?php if ( $this->Page->ImageHorizontalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                        <option value="center"<?php if ( $this->Page->ImageHorizontalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                        <option value="60%"<?php if ( $this->Page->ImageHorizontalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                        <option value="70%"<?php if ( $this->Page->ImageHorizontalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                        <option value="80%"<?php if ( $this->Page->ImageHorizontalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                        <option value="90%"<?php if ( $this->Page->ImageHorizontalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                        <option value="right"<?php if ( $this->Page->ImageHorizontalPosition === 'right' ) echo ' selected'; ?>>Right</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="VideoPath" type="text" value="<?php echo htmlspecialchars( $this->Page->VideoPath ); ?>" oninput="HandleVideoPathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <video class="form-upload-video" src="<?php echo htmlspecialchars( $this->Page->VideoPath ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="video/mp4" onchange="HandleVideoFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
                </div>
                <div>
                    <multilingual-input-component class_="form-input" name_="MetaTitle" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaTitle ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
                </div>
                <div>
                    <multilingual-textarea-component class_="form-textarea" name_="MetaDescription" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $this->Page->MetaDescription ); ?></textarea-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="MetaImagePath" type="text" value="<?php echo htmlspecialchars( $this->Page->MetaImagePath ); ?>" oninput="HandleImagePathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Page->MetaImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
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
