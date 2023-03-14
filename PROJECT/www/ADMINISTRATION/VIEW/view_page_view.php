<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-page-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="PAGE"><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Slug';
                 $field_title = 'Slug';
                 $field_value = $this->Page->Slug;
                require __DIR__ . '/' . 'BLOCK/page_slug_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Slug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Slug">
                <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Slug ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Route';
                 $field_title = 'Route';
                 $field_value = $this->Page->Route;
                require __DIR__ . '/' . 'BLOCK/page_route_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Route">
                <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Route">
                <input-component result-class="form-input" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Route ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'TypeSlug';
                 $field_title = 'Type Slug';
                 $field_value = $this->Page->TypeSlug;
                require __DIR__ . '/' . 'BLOCK/page_type_slug_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                <dropdown-component result-class="form-select" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->TypeSlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->PageTypeArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->PageTypeArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Number';
                 $field_title = 'Number';
                 $field_value = $this->Page->Number;
                require __DIR__ . '/' . 'BLOCK/page_number_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Number">
                <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Number">
                <input-component result-class="form-input" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Number ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'LanguageCodeArray';
                 $field_title = 'Language Code Array';
                 $field_value = $this->Page->LanguageCodeArray;
                require __DIR__ . '/' . 'BLOCK/page_language_code_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="LanguageCodeArray">
                <dropdown-list-component result-class="form-select" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->LanguageCodeArray ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'en', 'fr', 'de', 'ja' ,'ru' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'English', 'French', 'German', 'Japanese', 'Russian' ] ) ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></dropdown-list-component><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'IsActive';
                 $field_title = 'Is Active';
                 $field_value = $this->Page->IsActive;
                require __DIR__ . '/' . 'BLOCK/page_is_active_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="IsActive">
                <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="IsActive">
                <dropdown-component result-class="form-select" result-name="IsActive" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->IsActive ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 0, 1 ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'False', 'True' ] ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Title';
                 $field_title = 'Title';
                 $field_value = $this->Page->Title;
                require __DIR__ . '/' . 'BLOCK/page_title_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Title">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Title">
                <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Title ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Heading';
                 $field_title = 'Heading';
                 $field_value = $this->Page->Heading;
                require __DIR__ . '/' . 'BLOCK/page_heading_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Heading">
                <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Heading">
                <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Heading" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Heading ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Teaser';
                 $field_title = 'Teaser';
                 $field_value = $this->Page->Teaser;
                require __DIR__ . '/' . 'BLOCK/page_teaser_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->Teaser ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImagePath';
                 $field_title = 'Image Path';
                 $field_value = $this->Page->ImagePath;
                require __DIR__ . '/' . 'BLOCK/page_image_path_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImagePath">
                <image-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImagePath ) ); ?>" is-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></image-path-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageVerticalPosition';
                 $field_title = 'Image Vertical Position';
                 $field_value = $this->Page->ImageVerticalPosition;
                require __DIR__ . '/' . 'BLOCK/page_image_vertical_position_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
                <dropdown-component result-class="form-select" result-name="ImageVerticalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImageVerticalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageHorizontalPosition';
                 $field_title = 'Image Horizontal Position';
                 $field_value = $this->Page->ImageHorizontalPosition;
                require __DIR__ . '/' . 'BLOCK/page_image_horizontal_position_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
                <dropdown-component result-class="form-select" result-name="ImageHorizontalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->ImageHorizontalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( ['Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'VideoPath';
                 $field_title = 'Video Path';
                 $field_value = $this->Page->VideoPath;
                require __DIR__ . '/' . 'BLOCK/page_video_path_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="VideoPath">
                <video-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->VideoPath ) ); ?>" is-readonly video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/video" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></video-path-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'MetaTitle';
                 $field_title = 'Meta Title';
                 $field_value = $this->Page->MetaTitle;
                require __DIR__ . '/' . 'BLOCK/page_meta_title_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="MetaTitle">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="MetaTitle">
                <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="MetaTitle" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaTitle ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'MetaDescription';
                 $field_title = 'Meta Description';
                 $field_value = $this->Page->MetaDescription;
                require __DIR__ . '/' . 'BLOCK/page_meta_description_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="MetaDescription">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="MetaDescription">
                <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="MetaDescription" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaDescription ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'MetaImagePath';
                 $field_title = 'Meta Image Path';
                 $field_value = $this->Page->MetaImagePath;
                require __DIR__ . '/' . 'BLOCK/page_meta_image_path_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="MetaImagePath">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="MetaImagePath">
                <image-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="MetaImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Page->MetaImagePath ) ); ?>" is-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></image-path-input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/page' ) ); ?>">
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
