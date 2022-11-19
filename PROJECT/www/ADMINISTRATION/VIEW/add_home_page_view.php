<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- FUNCTIONS

    function IsValidAddHomePageForm()
    {
        var
            add_home_page_form,
            it_is_valid_add_home_page_form,
            id_field,
            route_field,
            type_slug_field,
            number_field,
            language_code_array_field,
            is_active_field,
            title_field,
            text_field,
            image_path_field,
            image_vertical_position_field,
            image_horizontal_position_field,
            video_path_field;

        add_home_page_form = document.AddHomePageForm;
        id_field = add_home_page_form.Id;
        route_field = add_home_page_form.Route;
        type_slug_field = add_home_page_form.TypeSlug;
        number_field = add_home_page_form.Number;
        language_code_array_field = add_home_page_form.LanguageCodeArray;
        is_active_field = add_home_page_form.IsActive;
        title_field = add_home_page_form.Title;
        text_field = add_home_page_form.Text;
        image_path_field = add_home_page_form.ImagePath;
        image_vertical_position_field = add_home_page_form.ImageVerticalPosition;
        image_horizontal_position_field = add_home_page_form.ImageHorizontalPosition;
        video_path_field = add_home_page_form.VideoPath;

        id_field.RemoveClass( "form-field-error" );
        route_field.RemoveClass( "form-field-error" );
        type_slug_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );
        language_code_array_field.RemoveClass( "form-field-error" );
        is_active_field.RemoveClass( "form-field-error" );
        title_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );
        image_path_field.RemoveClass( "form-field-error" );
        image_vertical_position_field.RemoveClass( "form-field-error" );
        image_horizontal_position_field.RemoveClass( "form-field-error" );
        video_path_field.RemoveClass( "form-field-error" );

        it_is_valid_add_home_page_form = true;

        if ( id_field.value === "" )
        {
            id_field.AddClass( "form-field-error" );

            it_is_valid_add_home_page_form = false;
        }

        if ( route_field.value === "" )
        {
            route_field.AddClass( "form-field-error" );

            it_is_valid_add_home_page_form = false;
        }

        if ( type_slug_field.value === "" )
        {
            type_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_home_page_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_add_home_page_form = false;
        }

        if ( language_code_array_field.value === "" )
        {
            language_code_array_field.AddClass( "form-field-error" );

            it_is_valid_add_home_page_form = false;
        }

        if ( !IsBooleanText( is_active_field.value )
             && !IsBinaryText( is_active_field.value ) )
        {
            is_active_field.AddClass( "form-field-error" );

            it_is_valid_add_home_page_form = false;
        }

        if ( image_vertical_position_field.value === "" )
        {
            image_vertical_position_field.AddClass( "form-field-error" );

            it_is_valid_add_home_page_form = false;
        }

        if ( image_horizontal_position_field.value === "" )
        {
            image_horizontal_position_field.AddClass( "form-field-error" );

            it_is_valid_add_home_page_form = false;
        }

        return it_is_valid_add_home_page_form;
    }
</script>
<div id="add-home-page-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddHomePageForm" onsubmit="return IsValidAddHomePageForm()" action="/admin/home-page/add" method="post">
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
                     $field_name = 'Route';

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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Route' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Route" type="text" value="<?php echo $field_value; ?>"/>
                </div>
                <?php
                     $field_name = 'TypeSlug';

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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="TypeSlug" type="text" value="<?php echo $field_value; ?>"/>
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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo $field_value; ?>"/>
                </div>
                <?php
                     $field_name = 'LanguageCodeArray';

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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="LanguageCodeArray" type="text" value="<?php echo $field_value; ?>"/>
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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Is Active' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="IsActive">
                        <option value="0"<?php if ( $field_value === '0' ) echo ' selected'; ?>>False</option>
                        <option value="1"<?php if ( $field_value === '1' ) echo ' selected'; ?>>True</option>
                    </select>
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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?> :
                </div>
                <div>
                    <div>
                        <input class="multilingual-input form-input" name="Title" type="text" value="<?php echo $field_value; ?>" hidden/>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <input class="multilingual-input-translation form-translation form-input" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"/>
                        <?php } ?>
                    </div>
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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <textarea class="multilingual-input form-textarea" name="Text" hidden><?php echo $field_value; ?></textarea>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <textarea class="multilingual-input-translation form-translation form-textarea" data-language-code="<?php echo htmlspecialchars( $language_code ); ?>" placeholder="<?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $language_code ) ); ?>"></textarea>
                        <?php } ?>
                    </div>
                </div>
                <?php
                     $field_name = 'ImagePath';

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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="ImagePath" type="text" value="<?php echo $field_value; ?>" oninput="HandleImagePathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="<?php echo $field_value; ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/admin/upload_icon.svg"/><input class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                        <img class="form-delete-icon" src="/static/image/admin/remove_icon.svg" onclick="HandleFileInputDeleteButtonClickEvent( this )"/>
                    </div>
                </div>
                <?php
                     $field_name = 'ImageVerticalPosition';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = 'center';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Vertical Position' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageVerticalPosition">
                        <option value="top"<?php if ( $field_value === 'top' ) echo ' selected'; ?>>Top</option>
                        <option value="10%"<?php if ( $field_value === '10%' ) echo ' selected'; ?>>10%</option>
                        <option value="20%"<?php if ( $field_value === '20%' ) echo ' selected'; ?>>20%</option>
                        <option value="30%"<?php if ( $field_value === '30%' ) echo ' selected'; ?>>30%</option>
                        <option value="40%"<?php if ( $field_value === '40%' ) echo ' selected'; ?>>40%</option>
                        <option value="center"<?php if ( $field_value === 'center' ) echo ' selected'; ?>>Center</option>
                        <option value="60%"<?php if ( $field_value === '60%' ) echo ' selected'; ?>>60%</option>
                        <option value="70%"<?php if ( $field_value === '70%' ) echo ' selected'; ?>>70%</option>
                        <option value="80%"<?php if ( $field_value === '80%' ) echo ' selected'; ?>>80%</option>
                        <option value="90%"<?php if ( $field_value === '90%' ) echo ' selected'; ?>>90%</option>
                        <option value="bottom"<?php if ( $field_value === 'bottom' ) echo ' selected'; ?>>Bottom</option>
                    </select>
                </div>
                <?php
                     $field_name = 'ImageHorizontalPosition';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = 'center';
                    }
                ?>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Horizontal Position' ) ); ?> :
                </div>
                <div>
                    <select class="form-select" name="ImageHorizontalPosition">
                        <option value="left"<?php if ( $field_value === 'left' ) echo ' selected'; ?>>Left</option>
                        <option value="10%"<?php if ( $field_value === '10%' ) echo ' selected'; ?>>10%</option>
                        <option value="20%"<?php if ( $field_value === '20%' ) echo ' selected'; ?>>20%</option>
                        <option value="30%"<?php if ( $field_value === '30%' ) echo ' selected'; ?>>30%</option>
                        <option value="40%"<?php if ( $field_value === '40%' ) echo ' selected'; ?>>40%</option>
                        <option value="center"<?php if ( $field_value === 'center' ) echo ' selected'; ?>>Center</option>
                        <option value="60%"<?php if ( $field_value === '60%' ) echo ' selected'; ?>>60%</option>
                        <option value="70%"<?php if ( $field_value === '70%' ) echo ' selected'; ?>>70%</option>
                        <option value="80%"<?php if ( $field_value === '80%' ) echo ' selected'; ?>>80%</option>
                        <option value="90%"<?php if ( $field_value === '90%' ) echo ' selected'; ?>>90%</option>
                        <option value="right"<?php if ( $field_value === 'right' ) echo ' selected'; ?>>Right</option>
                    </select>
                </div>
                <?php
                     $field_name = 'VideoPath';

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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Video Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="VideoPath" type="text" value="<?php echo $field_value; ?>" oninput="HandleVideoPathInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <video class="form-upload-video" src="<?php echo $field_value; ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
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
