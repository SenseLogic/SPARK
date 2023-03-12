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
            video_path_array_field,
            document_path_field,
            document_path_array_field;

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
        document_path_field = edit_block_form.DocumentPath;
        document_path_array_field = edit_block_form.DocumentPathArray;

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
        document_path_field.RemoveClass( "form-field-error" );
        document_path_array_field.RemoveClass( "form-field-error" );

        it_is_valid_edit_block_form = true;

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
                    <dropdown-component result-class="form-select" result-name="PageId" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->PageId ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->PageArray, 'Id' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->PageArray, 'Title' ) ) ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="CategorySlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Category Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="CategorySlug">
                    <dropdown-component result-class="form-select" result-name="CategorySlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->CategorySlug ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockCategoryArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockCategoryArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ContentSlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Content Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ContentSlug">
                    <dropdown-component result-class="form-select" result-name="ContentSlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ContentSlug ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockContentArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockContentArray,'Name' ) ) ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                    <dropdown-component result-class="form-select" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TypeSlug ) ); ?>"  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockTypeArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockTypeArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
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
                    <input-list-component container-class="form-list-container" result-class="form-input" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->LanguageCodeArray ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
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
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Title ) ); ?>" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TitleArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TitleArray">
                    <multilingual-text-input-list-component container-class="form-multilingual-container" result-class="form-textarea" result-name="TitleArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TitleArray ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Teaser ) ); ?>" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TeaserArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TeaserArray">
                    <multilingual-text-input-list-component container-class="form-multilingual-container" result-class="form-textarea" result-name="TeaserArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TeaserArray ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Text">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Text">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Text" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Text ) ); ?>" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="TextArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="TextArray">
                    <multilingual-text-input-list-component container-class="form-multilingual-container" result-class="form-textarea" result-name="TextArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->TextArray ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="Route">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="Route">
                    <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->Route ) ); ?>" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="RouteArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="RouteArray">
                    <multilingual-input-list-component container-class="form-multilingual-container" result-class="form-input" result-name="RouteArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->RouteArray ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageSide">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Side' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageSide">
                    <dropdown-component result-class="form-select" result-name="ImageSide" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageSide ) ); ?>" is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', 'right' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Left', 'Right' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageLegend">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageLegend">
                    <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="ImageLegend" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageLegend ) ); ?>" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageLegendArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageLegendArray">
                    <multilingual-text-input-list-component container-class="form-multilingual-container" result-class="form-textarea" result-name="ImageLegendArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageLegendArray ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-list-component>
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
                    <image-path-input-list-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePathArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImagePathArray ) ); ?>" image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></image-path-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
                    <dropdown-component result-class="form-select" result-name="ImageVerticalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageVerticalPosition ) ); ?>" is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( ['Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPositionArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPositionArray">
                    <dropdown-list-component result-class="form-select" result-name="ImageVerticalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageVerticalPositionArray ) ); ?>" is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( ['Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></dropdown-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
                    <dropdown-component result-class="form-select" result-name="ImageHorizontalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageHorizontalPosition ) ); ?>" is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( ['Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>"></dropdown-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPositionArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPositionArray">
                    <dropdown-list-component result-class="form-select" result-name="ImageHorizontalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->ImageHorizontalPositionArray ) ); ?>" is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( ['Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></dropdown-list-component>
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
                    <video-path-input-list-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPathArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->VideoPathArray ) ); ?>" video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/video" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></video-path-input-list-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="DocumentPath">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Document Path' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="DocumentPath">
                    <document-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="DocumentPath" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->DocumentPath ) ); ?>" image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" document-image-path="/static/image/admin/document_icon.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/document" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></document-path-input-component>
                </div>
                <div class="form-field-name" data-is-column-title data-column-name="DocumentPathArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Document Path Array' ) ); ?> :
                </div>
                <div class="form-field-value" data-is-column-value data-column-name="DocumentPathArray">
                    <document-path-input-list-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="DocumentPathArray" result-value="<?php echo htmlspecialchars( GetValueText( $this->Block->DocumentPathArray ) ); ?>" image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" document-image-path="/static/image/admin/document_icon.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/document" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></document-path-input-list-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/block' ) ); ?>">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/block_footer.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
