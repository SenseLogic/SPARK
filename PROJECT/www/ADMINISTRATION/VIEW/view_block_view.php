<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-block-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="BLOCK"><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Slug';
                 $field_title = 'Slug';
                 $field_value = $this->Block->Slug;
                require __DIR__ . '/' . 'BLOCK/block_slug_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Slug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Slug">
                <input-component class="form-component" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Slug ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'PageId';
                 $field_title = 'Page Id';
                 $field_value = $this->Block->PageId;
                require __DIR__ . '/' . 'BLOCK/block_page_id_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="PageId">
                <?php echo htmlspecialchars( GetTextBySlug( 'Page Id' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="PageId">
                <dropdown-component class="form-component" result-name="PageId" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->PageId ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->PageArray, 'Id' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->PageArray, 'Title' ) ) ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'CategorySlug';
                 $field_title = 'Category Slug';
                 $field_value = $this->Block->CategorySlug;
                require __DIR__ . '/' . 'BLOCK/block_category_slug_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="CategorySlug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Category Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="CategorySlug">
                <dropdown-component class="form-component" result-name="CategorySlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->CategorySlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockCategoryArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockCategoryArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ContentSlug';
                 $field_title = 'Content Slug';
                 $field_value = $this->Block->ContentSlug;
                require __DIR__ . '/' . 'BLOCK/block_content_slug_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ContentSlug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Content Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ContentSlug">
                <dropdown-component class="form-component" result-name="ContentSlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ContentSlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockContentArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockContentArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'TypeSlug';
                 $field_title = 'Type Slug';
                 $field_value = $this->Block->TypeSlug;
                require __DIR__ . '/' . 'BLOCK/block_type_slug_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                <dropdown-component class="form-component" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TypeSlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockTypeArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockTypeArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Number';
                 $field_title = 'Number';
                 $field_value = $this->Block->Number;
                require __DIR__ . '/' . 'BLOCK/block_number_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Number">
                <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Number">
                <input-component class="form-component" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Number ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'LanguageCodeArray';
                 $field_title = 'Language Code Array';
                 $field_value = $this->Block->LanguageCodeArray;
                require __DIR__ . '/' . 'BLOCK/block_language_code_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="LanguageCodeArray">
                <dropdown-list-component class="form-component" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->LanguageCodeArray ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'en', 'fr', 'de', 'ja', 'ru' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'English', 'French', 'German', 'Japanese', 'Russian' ] ) ) ); ?>"></dropdown-list-component><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'MinimumHeight';
                 $field_title = 'Minimum Height';
                 $field_value = $this->Block->MinimumHeight;
                require __DIR__ . '/' . 'BLOCK/block_minimum_height_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="MinimumHeight">
                <?php echo htmlspecialchars( GetTextBySlug( 'Minimum Height' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="MinimumHeight">
                <input-component class="form-component" result-name="MinimumHeight" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->MinimumHeight ) ); ?>" is-readonly></input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Title';
                 $field_title = 'Title';
                 $field_value = $this->Block->Title;
                require __DIR__ . '/' . 'BLOCK/block_title_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Title">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Title">
                <multilingual-text-input-component class="form-component" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Title ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'TitleArray';
                 $field_title = 'Title Array';
                 $field_value = $this->Block->TitleArray;
                require __DIR__ . '/' . 'BLOCK/block_title_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="TitleArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="TitleArray">
                <multilingual-text-input-list-component class="form-component" result-name="TitleArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TitleArray ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-list-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Teaser';
                 $field_title = 'Teaser';
                 $field_value = $this->Block->Teaser;
                require __DIR__ . '/' . 'BLOCK/block_teaser_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                <multilingual-text-input-component class="form-component" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Teaser ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'TeaserArray';
                 $field_title = 'Teaser Array';
                 $field_value = $this->Block->TeaserArray;
                require __DIR__ . '/' . 'BLOCK/block_teaser_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="TeaserArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Teaser Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="TeaserArray">
                <multilingual-text-input-list-component class="form-component" result-name="TeaserArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TeaserArray ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-list-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Text';
                 $field_title = 'Text';
                 $field_value = $this->Block->Text;
                require __DIR__ . '/' . 'BLOCK/block_text_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Text">
                <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Text">
                <multilingual-text-input-component class="form-component" result-name="Text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Text ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'TextArray';
                 $field_title = 'Text Array';
                 $field_value = $this->Block->TextArray;
                require __DIR__ . '/' . 'BLOCK/block_text_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="TextArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Text Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="TextArray">
                <multilingual-text-input-list-component class="form-component" result-name="TextArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TextArray ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-list-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'Route';
                 $field_title = 'Route';
                 $field_value = $this->Block->Route;
                require __DIR__ . '/' . 'BLOCK/block_route_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="Route">
                <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Route">
                <multilingual-input-component class="form-component" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Route ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'RouteArray';
                 $field_title = 'Route Array';
                 $field_value = $this->Block->RouteArray;
                require __DIR__ . '/' . 'BLOCK/block_route_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="RouteArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Route Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="RouteArray">
                <multilingual-input-list-component class="form-component" result-name="RouteArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->RouteArray ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-input-list-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageSide';
                 $field_title = 'Image Side';
                 $field_value = $this->Block->ImageSide;
                require __DIR__ . '/' . 'BLOCK/block_image_side_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageSide">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Side' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageSide">
                <dropdown-component class="form-component" result-name="ImageSide" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageSide ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', 'right' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Left', 'Right' ] ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageTitle';
                 $field_title = 'Image Title';
                 $field_value = $this->Block->ImageTitle;
                require __DIR__ . '/' . 'BLOCK/block_image_title_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageTitle">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Title' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageTitle">
                <multilingual-text-input-component class="form-component" result-name="ImageTitle" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageTitle ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageTitleArray';
                 $field_title = 'Image Title Array';
                 $field_value = $this->Block->ImageTitleArray;
                require __DIR__ . '/' . 'BLOCK/block_image_title_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageTitleArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Title Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageTitleArray">
                <multilingual-text-input-list-component class="form-component" result-name="ImageTitleArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageTitleArray ) ); ?>" is-readonly language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-text-input-list-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImagePath';
                 $field_title = 'Image Path';
                 $field_value = $this->Block->ImagePath;
                require __DIR__ . '/' . 'BLOCK/block_image_path_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImagePath">
                <multilingual-image-path-input-component class="form-component" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImagePath ) ); ?>" is-readonly error-image-path="/static/image/admin/missing_image.svg" upload-api-url="/admin/upload/image" delete-api-url="/admin/delete/file" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-image-path-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImagePathArray';
                 $field_title = 'Image Path Array';
                 $field_value = $this->Block->ImagePathArray;
                require __DIR__ . '/' . 'BLOCK/block_image_path_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImagePathArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Path Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImagePathArray">
                <image-path-input-list-component class="form-component" result-name="ImagePathArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImagePathArray ) ); ?>" is-readonly error-image-path="/static/image/admin/missing_image.svg" upload-api-url="/admin/upload/image" delete-api-url="/admin/delete/file"></image-path-input-list-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageVerticalPosition';
                 $field_title = 'Image Vertical Position';
                 $field_value = $this->Block->ImageVerticalPosition;
                require __DIR__ . '/' . 'BLOCK/block_image_vertical_position_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
                <dropdown-component class="form-component" result-name="ImageVerticalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageVerticalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageVerticalPositionArray';
                 $field_title = 'Image Vertical Position Array';
                 $field_value = $this->Block->ImageVerticalPositionArray;
                require __DIR__ . '/' . 'BLOCK/block_image_vertical_position_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPositionArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPositionArray">
                <dropdown-list-component class="form-component" result-name="ImageVerticalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageVerticalPositionArray ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>"></dropdown-list-component><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageHorizontalPosition';
                 $field_title = 'Image Horizontal Position';
                 $field_value = $this->Block->ImageHorizontalPosition;
                require __DIR__ . '/' . 'BLOCK/block_image_horizontal_position_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
                <dropdown-component class="form-component" result-name="ImageHorizontalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageHorizontalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageHorizontalPositionArray';
                 $field_title = 'Image Horizontal Position Array';
                 $field_value = $this->Block->ImageHorizontalPositionArray;
                require __DIR__ . '/' . 'BLOCK/block_image_horizontal_position_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPositionArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPositionArray">
                <dropdown-list-component class="form-component" result-name="ImageHorizontalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageHorizontalPositionArray ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>"></dropdown-list-component><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'ImageFit';
                 $field_title = 'Image Fit';
                 $field_value = $this->Block->ImageFit;
                require __DIR__ . '/' . 'BLOCK/block_image_fit_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="ImageFit">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Fit' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="ImageFit">
                <dropdown-component class="form-component" result-name="ImageFit" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageFit ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'cover', 'contain' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Cover', 'Contain' ] ) ) ); ?>"></dropdown-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'VideoPath';
                 $field_title = 'Video Path';
                 $field_value = $this->Block->VideoPath;
                require __DIR__ . '/' . 'BLOCK/block_video_path_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="VideoPath">
                <multilingual-video-path-input-component class="form-component" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->VideoPath ) ); ?>" is-readonly error-video-path="/static/video/admin/missing_video.mp4" upload-api-url="/admin/upload/video" delete-api-url="/admin/delete/file" language-tags="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageTagArray ) ) ); ?>"></multilingual-video-path-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'VideoPathArray';
                 $field_title = 'Video Path Array';
                 $field_value = $this->Block->VideoPathArray;
                require __DIR__ . '/' . 'BLOCK/block_video_path_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="VideoPathArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Video Path Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="VideoPathArray">
                <video-path-input-list-component class="form-component" result-name="VideoPathArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->VideoPathArray ) ); ?>" is-readonly error-video-path="/static/video/admin/missing_video.mp4" upload-api-url="/admin/upload/video" delete-api-url="/admin/delete/file"></video-path-input-list-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'DocumentPath';
                 $field_title = 'Document Path';
                 $field_value = $this->Block->DocumentPath;
                require __DIR__ . '/' . 'BLOCK/block_document_path_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="DocumentPath">
                <?php echo htmlspecialchars( GetTextBySlug( 'Document Path' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="DocumentPath">
                <document-path-input-component class="form-component" result-name="DocumentPath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->DocumentPath ) ); ?>" is-readonly error-image-path="/static/image/admin/missing_image.svg" document-image-path="/static/image/admin/document_icon.svg" upload-api-url="/admin/upload/document" delete-api-url="/admin/delete/file"></document-path-input-component>
            </div><~false<>
            <?php
                 $field_mode = 'view';
                 $field_name = 'DocumentPathArray';
                 $field_title = 'Document Path Array';
                 $field_value = $this->Block->DocumentPathArray;
                require __DIR__ . '/' . 'BLOCK/block_document_path_array_field.php';
            ?><>
            <div class="form-field-name" data-is-column-title data-column-name="DocumentPathArray">
                <?php echo htmlspecialchars( GetTextBySlug( 'Document Path Array' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="DocumentPathArray">
                <document-path-input-list-component class="form-component" result-name="DocumentPathArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->DocumentPathArray ) ); ?>" is-readonly error-image-path="/static/image/admin/missing_image.svg" document-image-path="/static/image/admin/document_icon.svg" upload-api-url="/admin/upload/document" delete-api-url="/admin/delete/file"></document-path-input-list-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/block' ) ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/block_footer.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
