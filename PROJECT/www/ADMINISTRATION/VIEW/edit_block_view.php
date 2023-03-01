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
            title_array_field,
            teaser_field,
            teaser_array_field,
            text_field,
            text_array_field,
            route_field,
            route_array_field,
            image_side_field,
            image_legend_field,
            image_legend_array_field,
            image_path_field,
            image_path_array_field,
            image_vertical_position_field,
            image_vertical_position_array_field,
            image_horizontal_position_field,
            image_horizontal_position_array_field,
            video_path_field,
            video_path_array_field;

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
        title_array_field = edit_block_form.TitleArray;
        teaser_field = edit_block_form.Teaser;
        teaser_array_field = edit_block_form.TeaserArray;
        text_field = edit_block_form.Text;
        text_array_field = edit_block_form.TextArray;
        route_field = edit_block_form.Route;
        route_array_field = edit_block_form.RouteArray;
        image_side_field = edit_block_form.ImageSide;
        image_legend_field = edit_block_form.ImageLegend;
        image_legend_array_field = edit_block_form.ImageLegendArray;
        image_path_field = edit_block_form.ImagePath;
        image_path_array_field = edit_block_form.ImagePathArray;
        image_vertical_position_field = edit_block_form.ImageVerticalPosition;
        image_vertical_position_array_field = edit_block_form.ImageVerticalPositionArray;
        image_horizontal_position_field = edit_block_form.ImageHorizontalPosition;
        image_horizontal_position_array_field = edit_block_form.ImageHorizontalPositionArray;
        video_path_field = edit_block_form.VideoPath;
        video_path_array_field = edit_block_form.VideoPathArray;

        slug_field.RemoveClass( "form-field-error" );
        page_id_field.RemoveClass( "form-field-error" );
        category_slug_field.RemoveClass( "form-field-error" );
        content_slug_field.RemoveClass( "form-field-error" );
        type_slug_field.RemoveClass( "form-field-error" );
        number_field.RemoveClass( "form-field-error" );
        language_code_array_field.RemoveClass( "form-field-error" );
        minimum_height_field.RemoveClass( "form-field-error" );
        title_field.RemoveClass( "form-field-error" );
        title_array_field.RemoveClass( "form-field-error" );
        teaser_field.RemoveClass( "form-field-error" );
        teaser_array_field.RemoveClass( "form-field-error" );
        text_field.RemoveClass( "form-field-error" );
        text_array_field.RemoveClass( "form-field-error" );
        route_field.RemoveClass( "form-field-error" );
        route_array_field.RemoveClass( "form-field-error" );
        image_side_field.RemoveClass( "form-field-error" );
        image_legend_field.RemoveClass( "form-field-error" );
        image_legend_array_field.RemoveClass( "form-field-error" );
        image_path_field.RemoveClass( "form-field-error" );
        image_path_array_field.RemoveClass( "form-field-error" );
        image_vertical_position_field.RemoveClass( "form-field-error" );
        image_vertical_position_array_field.RemoveClass( "form-field-error" );
        image_horizontal_position_field.RemoveClass( "form-field-error" );
        image_horizontal_position_array_field.RemoveClass( "form-field-error" );
        video_path_field.RemoveClass( "form-field-error" );
        video_path_array_field.RemoveClass( "form-field-error" );

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
            <div class="form-container" data-is-row data-table-name="BLOCK">
                <div class="form-field-name" data-is-column-title data-column-name="Slug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Slug">
                    <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Slug ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="PageId">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Page Id' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="PageId">
                    <select class="form-select" name="PageId">
                        <?php  $page_array = $this->PageArray; ?>
                        <?php foreach ( $page_array as  $page ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $page->Id ) ); ?>"<?php if ( $this->Block->PageId === $page->Id ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page->Title ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="CategorySlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Category Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="CategorySlug">
                    <select class="form-select" name="CategorySlug">
                        <?php  $block_category_array = $this->BlockCategoryArray; ?>
                        <?php foreach ( $block_category_array as  $block_category ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_category->Slug ) ); ?>"<?php if ( $this->Block->CategorySlug === $block_category->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_category->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ContentSlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Content Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ContentSlug">
                    <select class="form-select" name="ContentSlug">
                        <?php  $block_content_array = $this->BlockContentArray; ?>
                        <?php foreach ( $block_content_array as  $block_content ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_content->Slug ) ); ?>"<?php if ( $this->Block->ContentSlug === $block_content->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_content->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                    <select class="form-select" name="TypeSlug">
                        <?php  $block_type_array = $this->BlockTypeArray; ?>
                        <?php foreach ( $block_type_array as  $block_type ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_type->Slug ) ); ?>"<?php if ( $this->Block->TypeSlug === $block_type->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_type->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Number">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Number">
                    <input-component result-class="form-input" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Number ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="LanguageCodeArray">
                    <input-list-component container-class="form-list-container" result-class="form-input" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->LanguageCodeArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="MinimumHeight">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Minimum Height' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="MinimumHeight">
                    <input-component result-class="form-input" result-name="MinimumHeight" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->MinimumHeight ) ); ?>"></input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Title">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Title">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Title ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TitleArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TitleArray">
                    <multilingual-text-input-list-component container-class="form-multilingual-text-input-container" result-class="form-textarea" result-name="TitleArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TitleArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Teaser ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TeaserArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TeaserArray">
                    <multilingual-text-input-list-component container-class="form-multilingual-text-input-container" result-class="form-textarea" result-name="TeaserArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TeaserArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Text">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Text">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Text ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TextArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TextArray">
                    <multilingual-text-input-list-component container-class="form-multilingual-text-input-container" result-class="form-textarea" result-name="TextArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TextArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Route">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Route">
                    <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Route ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="RouteArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="RouteArray">
                    <multilingual-input-list-component container-class="form-multilingual-input-container" result-class="form-input" result-name="RouteArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->RouteArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageSide">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Side' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageSide">
                    <select class="form-select" name="ImageSide">
                        <option value="left"<?php if ( $this->Block->ImageSide === 'left' ) echo ' selected'; ?>>Left</option>
                        <option value="right"<?php if ( $this->Block->ImageSide === 'right' ) echo ' selected'; ?>>Right</option>
                    </select>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageLegend">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageLegend">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="ImageLegend" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageLegend ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageLegendArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageLegendArray">
                    <multilingual-text-input-list-component container-class="form-multilingual-text-input-container" result-class="form-textarea" result-name="ImageLegendArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageLegendArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImagePath">
                    <image-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImagePath ) ); ?>" image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></image-path-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImagePathArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Path Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImagePathArray">
                    <input-list-component container-class="form-list-container" result-class="form-input" result-name="ImagePathArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImagePathArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
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
                <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPositionArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPositionArray">
                    <input-list-component container-class="form-list-container" result-class="form-input" result-name="ImageVerticalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageVerticalPositionArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
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
                <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPositionArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPositionArray">
                    <input-list-component container-class="form-list-container" result-class="form-input" result-name="ImageHorizontalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageHorizontalPositionArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="VideoPath">
                    <video-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->VideoPath ) ); ?>" video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/video" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></video-path-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="VideoPathArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Video Path Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="VideoPathArray">
                    <video-path-input-list-component container-class="form-multilingual-text-input-container" result-class="form-textarea" result-name="VideoPathArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->VideoPathArray ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></video-path-input-list-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/block_footer.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
