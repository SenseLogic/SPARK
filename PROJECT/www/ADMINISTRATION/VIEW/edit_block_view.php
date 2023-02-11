<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidEditBlockForm()
    {
        var
            edit_block_form,
            it_is_valid_edit_block_form,
            slug_field,
            page_id_field,
            category_slug_field,
            content_slug_field,
            type_slug_field,
            number_field,
            language_code_array_field,
            minimum_height_field,
            title_field,
            text_field,
            image_path_field,
            image_vertical_position_field,
            image_horizontal_position_field,
            image_side_field,
            video_path_field;

        edit_block_form = document.EditBlockForm;
        slug_field = edit_block_form.Slug;
        page_id_field = edit_block_form.PageId;
        category_slug_field = edit_block_form.CategorySlug;
        content_slug_field = edit_block_form.ContentSlug;
        type_slug_field = edit_block_form.TypeSlug;
        number_field = edit_block_form.Number;
        language_code_array_field = edit_block_form.LanguageCodeArray;
        minimum_height_field = edit_block_form.MinimumHeight;
        title_field = edit_block_form.Title;
        text_field = edit_block_form.Text;
        image_path_field = edit_block_form.ImagePath;
        image_vertical_position_field = edit_block_form.ImageVerticalPosition;
        image_horizontal_position_field = edit_block_form.ImageHorizontalPosition;
        image_side_field = edit_block_form.ImageSide;
        video_path_field = edit_block_form.VideoPath;

        slug_field.RemoveClass( "form-field-error" );
        page_id_field.RemoveClass( "form-field-error" );
        category_slug_field.RemoveClass( "form-field-error" );
        content_slug_field.RemoveClass( "form-field-error" );
        type_slug_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );
        language_code_array_field.RemoveClass( "form-field-error" );
        minimum_height_field.RemoveClass( "form-field-error" );
        title_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );
        image_path_field.RemoveClass( "form-field-error" );
        image_vertical_position_field.RemoveClass( "form-field-error" );
        image_horizontal_position_field.RemoveClass( "form-field-error" );
        image_side_field.RemoveClass( "form-field-error" );
        video_path_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_block_form = true;

        if ( slug_field.value === "" )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_form = false;
        }

        if ( page_id_field.value === "" )
        {
            page_id_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_form = false;
        }

        if ( !IsSlugText( category_slug_field.value ) )
        {
            category_slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_form = false;
        }

        if ( !IsSlugText( content_slug_field.value ) )
        {
            content_slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_form = false;
        }

        if ( !IsSlugText( type_slug_field.value ) )
        {
            type_slug_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_form = false;
        }

        if ( language_code_array_field.value === "" )
        {
            language_code_array_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_form = false;
        }

        if ( minimum_height_field.value === "" )
        {
            minimum_height_field.AddClass( "form-field-error" );

            it_is_valid_edit_block_form = false;
        }

        return it_is_valid_edit_block_form;
    }
</script>
<div id="edit-block-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditBlockForm" onsubmit="return IsValidEditBlockForm()" action="/admin/block/edit/<?php echo htmlspecialchars( $this->Block->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Block->Slug ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page Id' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="PageId">
                        <?php  $page_array = $this->PageArray; ?>
                        <?php foreach ( $page_array as  $page ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $page->Id ) ); ?>"<?php if ( $this->Block->PageId === $page->Id ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page->Title ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Category Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="CategorySlug">
                        <?php  $block_category_array = $this->BlockCategoryArray; ?>
                        <?php foreach ( $block_category_array as  $block_category ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_category->Slug ) ); ?>"<?php if ( $this->Block->CategorySlug === $block_category->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_category->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Content Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ContentSlug">
                        <?php  $block_content_array = $this->BlockContentArray; ?>
                        <?php foreach ( $block_content_array as  $block_content ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_content->Slug ) ); ?>"<?php if ( $this->Block->ContentSlug === $block_content->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_content->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="TypeSlug">
                        <?php  $block_type_array = $this->BlockTypeArray; ?>
                        <?php foreach ( $block_type_array as  $block_type ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_type->Slug ) ); ?>"<?php if ( $this->Block->TypeSlug === $block_type->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_type->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Block->Number ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="LanguageCodeArray" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Block->LanguageCodeArray ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Minimum Height' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="MinimumHeight" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Block->MinimumHeight ) ); ?>"/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Title" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Block->Title ) ); ?>" hidden/>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="multilingual-input-translation form-translation form-input" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"/>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <textarea class="multilingual-input form-textarea" name="Text" hidden><?php echo htmlspecialchars( $this->Block->Text ); ?></textarea>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <textarea class="multilingual-input-translation form-translation form-textarea" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"></textarea>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->Block->ImagePath ); ?>" oninput="HandleImagePathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Block->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Vertical Position' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageVerticalPosition">
                        <option value="top"<?php if ( $this->Block->ImageVerticalPosition === 'top' ) echo ' selected'; ?>>Top</option>
                        <option value="10%"<?php if ( $this->Block->ImageVerticalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                        <option value="20%"<?php if ( $this->Block->ImageVerticalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                        <option value="30%"<?php if ( $this->Block->ImageVerticalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                        <option value="40%"<?php if ( $this->Block->ImageVerticalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                        <option value="center"<?php if ( $this->Block->ImageVerticalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                        <option value="60%"<?php if ( $this->Block->ImageVerticalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                        <option value="70%"<?php if ( $this->Block->ImageVerticalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                        <option value="80%"<?php if ( $this->Block->ImageVerticalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                        <option value="90%"<?php if ( $this->Block->ImageVerticalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                        <option value="bottom"<?php if ( $this->Block->ImageVerticalPosition === 'bottom' ) echo ' selected'; ?>>Bottom</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Horizontal Position' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageHorizontalPosition">
                        <option value="left"<?php if ( $this->Block->ImageHorizontalPosition === 'left' ) echo ' selected'; ?>>Left</option>
                        <option value="10%"<?php if ( $this->Block->ImageHorizontalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                        <option value="20%"<?php if ( $this->Block->ImageHorizontalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                        <option value="30%"<?php if ( $this->Block->ImageHorizontalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                        <option value="40%"<?php if ( $this->Block->ImageHorizontalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                        <option value="center"<?php if ( $this->Block->ImageHorizontalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                        <option value="60%"<?php if ( $this->Block->ImageHorizontalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                        <option value="70%"<?php if ( $this->Block->ImageHorizontalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                        <option value="80%"<?php if ( $this->Block->ImageHorizontalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                        <option value="90%"<?php if ( $this->Block->ImageHorizontalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                        <option value="right"<?php if ( $this->Block->ImageHorizontalPosition === 'right' ) echo ' selected'; ?>>Right</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Side' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageSide">
                        <option value="left"<?php if ( $this->Block->ImageSide === 'left' ) echo ' selected'; ?>>Left</option>
                        <option value="right"<?php if ( $this->Block->ImageSide === 'right' ) echo ' selected'; ?>>Right</option>
                    </select>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Video Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="VideoPath" type="text" value="<?php echo htmlspecialchars( $this->Block->VideoPath ); ?>" oninput="HandleVideoPathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <video class="form-upload-video" src="<?php echo htmlspecialchars( $this->Block->VideoPath ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="video/mp4" onchange="HandleVideoFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
