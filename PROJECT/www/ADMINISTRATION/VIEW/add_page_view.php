<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<script>
    // -- FUNCTIONS

    function IsValidAddPageForm()
    {
        var
            add_page_form,
            it_is_valid_add_page_form,
            id_field,
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

        add_page_form = document.AddPageForm;
        id_field = add_page_form.Id;
        slug_field = add_page_form.Slug;
        route_field = add_page_form.Route;
        type_slug_field = add_page_form.TypeSlug;
        number_field = add_page_form.Number;
        language_code_array_field = add_page_form.LanguageCodeArray;
        is_active_field = add_page_form.IsActive;
        title_field = add_page_form.Title;
        heading_field = add_page_form.Heading;
        teaser_field = add_page_form.Teaser;
        image_path_field = add_page_form.ImagePath;
        image_vertical_position_field = add_page_form.ImageVerticalPosition;
        image_horizontal_position_field = add_page_form.ImageHorizontalPosition;
        video_path_field = add_page_form.VideoPath;
        meta_title_field = add_page_form.MetaTitle;
        meta_description_field = add_page_form.MetaDescription;
        meta_image_path_field = add_page_form.MetaImagePath;

        id_field.RemoveClass( "form-field-error" );
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

        it_is_valid_add_page_form = true;

        if ( id_field.value === "" )
        {
            id_field.AddClass( "form-field-error" );

            it_is_valid_add_page_form = false;
        }

        if ( slug_field.value === "" )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_add_page_form = false;
        }

        if ( route_field.value === "" )
        {
            route_field.AddClass( "form-field-error" );

            it_is_valid_add_page_form = false;
        }

        if ( !IsSlugText( type_slug_field.value ) )
        {
            type_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_page_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_add_page_form = false;
        }

        if ( language_code_array_field.value === "" )
        {
            language_code_array_field.AddClass( "form-field-error" );

            it_is_valid_add_page_form = false;
        }

        if ( !IsBooleanText( is_active_field.value )
             && !IsBinaryText( is_active_field.value ) )
        {
            is_active_field.AddClass( "form-field-error" );

            it_is_valid_add_page_form = false;
        }

        if ( image_vertical_position_field.value === "" )
        {
            image_vertical_position_field.AddClass( "form-field-error" );

            it_is_valid_add_page_form = false;
        }

        if ( image_horizontal_position_field.value === "" )
        {
            image_horizontal_position_field.AddClass( "form-field-error" );

            it_is_valid_add_page_form = false;
        }

        return it_is_valid_add_page_form;
    }
</script>
<div id="add-page-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddPageForm" onsubmit="return IsValidAddPageForm()" action="/admin/page/add" method="post">
            <div class="form-container" data-is-row data-table-name="PAGE">
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
                <div class="form-field-name" data-is-column-title data-column-name="Id">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Id' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Id">
                    <input-component result-class="form-input" result-name="Id" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="Slug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Slug">
                    <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="Route">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Route">
                    <input-component result-class="form-input" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                    <dropdown-component result-class="form-select" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"  option-values="<?php echo htmlspecialchars( GetJsonText( GetElementPropertyArray( $this->PageTypeArray, 'Slug' ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->PageTypeArray, 'Name' ) ) ) ); ?>"></dropdown-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="Number">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Number">
                    <input-component result-class="form-input" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="LanguageCodeArray">
                    <input-list-component container-class="form-list-container" result-class="form-input" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="IsActive">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="IsActive">
                    <dropdown-component result-class="form-select" result-name="IsActive" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"  option-values="<?php echo htmlspecialchars( GetJsonText( [ 0, 1 ] ) ); ?>" option-names="<?php echo htmlspecialchars( GetJsonText( [ 'False', 'True' ] ) ); ?>"></dropdown-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="Title">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Title">
                    <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-input-component>
                </div>
                <?php
                     $field_name = 'Heading';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="Heading">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Heading">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Heading" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-text-input-component>
                </div>
                <?php
                     $field_name = 'Teaser';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-text-input-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImagePath">
                    <image-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></image-path-input-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
                    <dropdown-component result-class="form-select" result-name="ImageVerticalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"  option-values="<?php echo htmlspecialchars( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ); ?>" option-names="<?php echo htmlspecialchars( GetJsonText( ['Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ); ?>"></dropdown-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
                    <dropdown-component result-class="form-select" result-name="ImageHorizontalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"  option-values="<?php echo htmlspecialchars( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ); ?>" option-names="<?php echo htmlspecialchars( GetJsonText( ['Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ); ?>"></dropdown-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="VideoPath">
                    <video-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/video" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></video-path-input-component>
                </div>
                <?php
                     $field_name = 'MetaTitle';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="MetaTitle">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaTitle">
                    <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="MetaTitle" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-input-component>
                </div>
                <?php
                     $field_name = 'MetaDescription';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="MetaDescription">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaDescription">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="MetaDescription" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo htmlspecialchars( GetJsonText( LanguageCodeArray ) ); ?>" language-names="<?php echo htmlspecialchars( GetJsonText( LanguageNameArray ) ); ?>"></multilingual-text-input-component>
                </div>
                <?php
                     $field_name = 'MetaImagePath';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="MetaImagePath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaImagePath">
                    <image-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="MetaImagePath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></image-path-input-component>
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
