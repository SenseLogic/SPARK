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
            text_field,
            image_path_field,
            image_vertical_position_field,
            image_horizontal_position_field,
            image_fit_field,
            video_path_field,
            meta_title_field,
            meta_description_field,
            meta_image_path_field,
            meta_sub_route_array_field,
            meta_sub_title_array_field,
            meta_sub_description_array_field;

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
        text_field = edit_page_form.Text;
        image_path_field = edit_page_form.ImagePath;
        image_vertical_position_field = edit_page_form.ImageVerticalPosition;
        image_horizontal_position_field = edit_page_form.ImageHorizontalPosition;
        image_fit_field = edit_page_form.ImageFit;
        video_path_field = edit_page_form.VideoPath;
        meta_title_field = edit_page_form.MetaTitle;
        meta_description_field = edit_page_form.MetaDescription;
        meta_image_path_field = edit_page_form.MetaImagePath;
        meta_sub_route_array_field = edit_page_form.MetaSubRouteArray;
        meta_sub_title_array_field = edit_page_form.MetaSubTitleArray;
        meta_sub_description_array_field = edit_page_form.MetaSubDescriptionArray;

        slug_field.RemoveClass( "form-field-error" );
        route_field.RemoveClass( "form-field-error" );
        type_slug_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );
        language_code_array_field.RemoveClass( "form-field-error" );
        is_active_field.RemoveClass( "form-field-error" );
        title_field.RemoveClass( "form-field-error" );
        heading_field.RemoveClass( "form-field-error" );
        teaser_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );
        image_path_field.RemoveClass( "form-field-error" );
        image_vertical_position_field.RemoveClass( "form-field-error" );
        image_horizontal_position_field.RemoveClass( "form-field-error" );
        image_fit_field.RemoveClass( "form-field-error" );
        video_path_field.RemoveClass( "form-field-error" );
        meta_title_field.RemoveClass( "form-field-error" );
        meta_description_field.RemoveClass( "form-field-error" );
        meta_image_path_field.RemoveClass( "form-field-error" );
        meta_sub_route_array_field.RemoveClass( "form-field-error" );
        meta_sub_title_array_field.RemoveClass( "form-field-error" );
        meta_sub_description_array_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_page_form = true;

        if ( !IsSlugText( slug_field.value )
             && slug_field.value !== ""  )
        {
            slug_field.AddClass( "form-field-error" );

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

        if ( title_field.value === "" )
        {
            title_field.AddClass( "form-field-error" );

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

        if ( image_fit_field.value === "" )
        {
            image_fit_field.AddClass( "form-field-error" );

            it_is_valid_edit_page_form = false;
        }

        return it_is_valid_edit_page_form;
    }
</script>
<div id="edit-page-view">
    <div class="page-section form-section">
        <form class="form-centered" name="EditPageForm" onsubmit="return IsValidEditPageForm()" action="/admin/page/edit/<?php echo htmlspecialchars( $this->Page->Id ); ?>" method="post">
            <div class="form-container" data-is-row data-table-name="PAGE">
                <div class="form-field-name" data-is-column-title data-column-name="Slug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Slug">
                    <input-component class="form-component" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Slug ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Route">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Route">
                    <input-component class="form-component" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Route ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                    <dropdown-component class="form-component" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->TypeSlug ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->PageTypeArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->PageTypeArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Number">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Number">
                    <input-component class="form-component" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Number ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="LanguageCodeArray">
                    <dropdown-list-component class="form-component" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->LanguageCodeArray ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'en', 'fr', 'de', 'ja', 'ru' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'English', 'French', 'German', 'Japanese', 'Russian' ] ) ) ); ?>"></dropdown-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="IsActive">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="IsActive">
                    <dropdown-component class="form-component" result-name="IsActive" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->IsActive ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ '0', '1' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'False', 'True' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Title">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Title">
                    <multilingual-input-component class="form-component" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Title ) ); ?>" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Heading">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Heading">
                    <multilingual-text-input-component class="form-component" result-name="Heading" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Heading ) ); ?>" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                    <multilingual-text-input-component class="form-component" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Teaser ) ); ?>" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Text">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Text">
                    <multilingual-text-input-component class="form-component" result-name="Text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Text ) ); ?>" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImagePath">
                    <multilingual-image-path-input-component class="form-component" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImagePath ) ); ?>" error-image-path="/static/image/admin/missing_image.svg" upload-api-url="/admin/upload/image" delete-api-url="/admin/delete/file" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-image-path-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
                    <dropdown-component class="form-component" result-name="ImageVerticalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImageVerticalPosition ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
                    <dropdown-component class="form-component" result-name="ImageHorizontalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImageHorizontalPosition ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageFit">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Fit' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageFit">
                    <dropdown-component class="form-component" result-name="ImageFit" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImageFit ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'cover', 'contain' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Cover', 'Contain' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="VideoPath">
                    <multilingual-video-path-input-component class="form-component" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->VideoPath ) ); ?>" error-video-path="/static/video/admin/missing_video.mp4" upload-api-url="/admin/upload/video" delete-api-url="/admin/delete/file" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-video-path-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaTitle">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaTitle">
                    <multilingual-input-component class="form-component" result-name="MetaTitle" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaTitle ) ); ?>" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaDescription">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaDescription">
                    <multilingual-text-input-component class="form-component" result-name="MetaDescription" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaDescription ) ); ?>" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaImagePath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaImagePath">
                    <multilingual-image-path-input-component class="form-component" result-name="MetaImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaImagePath ) ); ?>" error-image-path="/static/image/admin/missing_image.svg" upload-api-url="/admin/upload/image" delete-api-url="/admin/delete/file" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-image-path-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaSubRouteArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Route Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaSubRouteArray">
                    <input-list-component class="form-component" result-name="MetaSubRouteArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaSubRouteArray ) ); ?>"></input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaSubTitleArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Title Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaSubTitleArray">
                    <multilingual-input-list-component class="form-component" result-name="MetaSubTitleArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaSubTitleArray ) ); ?>" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MetaSubDescriptionArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Description Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MetaSubDescriptionArray">
                    <multilingual-text-input-list-component class="form-component" result-name="MetaSubDescriptionArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaSubDescriptionArray ) ); ?>" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-list-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/page' ) ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button">
                </button>
            </div>
        </form>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
