<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<script>
    // -- FUNCTIONS

    function IsValidAddBlockForm()
    {
        var
            add_block_form,
            it_is_valid_add_block_form,
            id_field,
            slug_field,
            page_id_field,
            category_slug_field,
            type_slug_field,
            content_slug_field,
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

        add_block_form = document.AddBlockForm;
        id_field = add_block_form.Id;
        slug_field = add_block_form.Slug;
        page_id_field = add_block_form.PageId;
        category_slug_field = add_block_form.CategorySlug;
        type_slug_field = add_block_form.TypeSlug;
        content_slug_field = add_block_form.ContentSlug;
        number_field = add_block_form.Number;
        language_code_array_field = add_block_form.LanguageCodeArray;
        minimum_height_field = add_block_form.MinimumHeight;
        title_field = add_block_form.Title;
        title_array_field = add_block_form.TitleArray;
        teaser_field = add_block_form.Teaser;
        teaser_array_field = add_block_form.TeaserArray;
        text_field = add_block_form.Text;
        text_array_field = add_block_form.TextArray;
        route_field = add_block_form.Route;
        route_array_field = add_block_form.RouteArray;
        image_side_field = add_block_form.ImageSide;
        image_legend_field = add_block_form.ImageLegend;
        image_legend_array_field = add_block_form.ImageLegendArray;
        image_path_field = add_block_form.ImagePath;
        image_path_array_field = add_block_form.ImagePathArray;
        image_vertical_position_field = add_block_form.ImageVerticalPosition;
        image_vertical_position_array_field = add_block_form.ImageVerticalPositionArray;
        image_horizontal_position_field = add_block_form.ImageHorizontalPosition;
        image_horizontal_position_array_field = add_block_form.ImageHorizontalPositionArray;
        video_path_field = add_block_form.VideoPath;
        video_path_array_field = add_block_form.VideoPathArray;

        id_field.RemoveClass( "form-field-error" );
        slug_field.RemoveClass( "form-field-error" );
        page_id_field.RemoveClass( "form-field-error" );
        category_slug_field.RemoveClass( "form-field-error" );
        type_slug_field.RemoveClass( "form-field-error" );
        content_slug_field.RemoveClass( "form-field-error" );
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

        it_is_valid_add_block_form = true;

        if ( id_field.value === "" )
        {
            id_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( slug_field.value === "" )
        {
            slug_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( page_id_field.value === "" )
        {
            page_id_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( !IsSlugText( category_slug_field.value ) )
        {
            category_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( !IsSlugText( type_slug_field.value ) )
        {
            type_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( !IsSlugText( content_slug_field.value ) )
        {
            content_slug_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( !IsNumericText( number_field.value ) )
        {
            number_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( language_code_array_field.value === "" )
        {
            language_code_array_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        if ( minimum_height_field.value === "" )
        {
            minimum_height_field.AddClass( "form-field-error" );

            it_is_valid_add_block_form = false;
        }

        return it_is_valid_add_block_form;
    }
</script>
<div id="add-block-view">
    <div class="page-section form-section">
        <form class="form-centered" name="AddBlockForm" onsubmit="return IsValidAddBlockForm()" action="/admin/block/add" method="post">
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
                <div class="form-field-name" data-is-column-title data-column-name="Id">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Id' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="Id" result-class="form-input" result-name="Id" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                <div>
                    <input-component data-is-column-value data-column-name="Slug" result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
                </div>
                <?php
                     $field_name = 'PageId';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="PageId">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Page Id' ) ); ?> :
                </div>
                <div>
                    <select data-is-column-value data-column-name="PageId"class="form-select" name="PageId">
                        <?php  $page_array = $this->PageArray; ?>
                        <?php foreach ( $page_array as  $page ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $page->Id ) ); ?>"<?php if ( GetValueText( $page->Id ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page->Title ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php
                     $field_name = 'CategorySlug';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="CategorySlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Category Slug' ) ); ?> :
                </div>
                <div>
                    <select data-is-column-value data-column-name="CategorySlug"class="form-select" name="CategorySlug">
                        <?php  $block_category_array = $this->BlockCategoryArray; ?>
                        <?php foreach ( $block_category_array as  $block_category ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_category->Slug ) ); ?>"<?php if ( GetValueText( $block_category->Slug ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_category->Name ) ); ?></option>
                        <?php } ?>
                    </select>
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
                <div>
                    <select data-is-column-value data-column-name="TypeSlug"class="form-select" name="TypeSlug">
                        <?php  $block_type_array = $this->BlockTypeArray; ?>
                        <?php foreach ( $block_type_array as  $block_type ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_type->Slug ) ); ?>"<?php if ( GetValueText( $block_type->Slug ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_type->Name ) ); ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php
                     $field_name = 'ContentSlug';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="ContentSlug">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Content Slug' ) ); ?> :
                </div>
                <div>
                    <select data-is-column-value data-column-name="ContentSlug"class="form-select" name="ContentSlug">
                        <?php  $block_content_array = $this->BlockContentArray; ?>
                        <?php foreach ( $block_content_array as  $block_content ) { ?>
                            <option value="<?php echo htmlspecialchars( GetValueText( $block_content->Slug ) ); ?>"<?php if ( GetValueText( $block_content->Slug ) === $field_value ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_content->Name ) ); ?></option>
                        <?php } ?>
                    </select>
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
                <div>
                    <input-component data-is-column-value data-column-name="Number" result-class="form-input" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                <div>
                    <input-list-component data-is-column-value data-column-name="LanguageCodeArray" container-class="form-list-container" result-class="form-input" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
                </div>
                <?php
                     $field_name = 'MinimumHeight';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="MinimumHeight">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Minimum Height' ) ); ?> :
                </div>
                <div>
                    <input-component data-is-column-value data-column-name="MinimumHeight" result-class="form-input" result-name="MinimumHeight" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>"></input-component>
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
                <div>
                    <multilingual-text-input-component data-is-column-value data-column-name="Title" container-class="form-multilingual-container" result-class="form-textarea" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                </div>
                <?php
                     $field_name = 'TitleArray';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="TitleArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title Array' ) ); ?> :
                </div>
                <div>
                    <multilingual-text-input-list-component data-is-column-value data-column-name="TitleArray" container-class="form-list-container" result-class="form-textarea" result-name="TitleArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-list-component>
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
                <div>
                    <multilingual-text-input-component data-is-column-value data-column-name="Teaser" container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                </div>
                <?php
                     $field_name = 'TeaserArray';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="TeaserArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Teaser Array' ) ); ?> :
                </div>
                <div>
                    <multilingual-text-input-list-component data-is-column-value data-column-name="TeaserArray" container-class="form-list-container" result-class="form-textarea" result-name="TeaserArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-list-component>
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
                <div class="form-field-name" data-is-column-title data-column-name="Text">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <multilingual-text-input-component data-is-column-value data-column-name="Text" container-class="form-multilingual-container" result-class="form-textarea" result-name="Text" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                </div>
                <?php
                     $field_name = 'TextArray';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="TextArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Text Array' ) ); ?> :
                </div>
                <div>
                    <multilingual-text-input-list-component data-is-column-value data-column-name="TextArray" container-class="form-list-container" result-class="form-textarea" result-name="TextArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-list-component>
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
                <div>
                    <multilingual-input-component data-is-column-value data-column-name="Route" container-class="form-multilingual-container" result-class="form-input" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-input-component>
                </div>
                <?php
                     $field_name = 'RouteArray';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="RouteArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Route Array' ) ); ?> :
                </div>
                <div>
                    <multilingual-input-list-component data-is-column-value data-column-name="RouteArray" container-class="form-list-container" result-class="form-text-input" result-name="RouteArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-input-list-component>
                </div>
                <?php
                     $field_name = 'ImageSide';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = 'left';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="ImageSide">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Side' ) ); ?> :
                </div>
                <div>
                    <select data-is-column-value data-column-name="ImageSide"class="form-select" name="ImageSide">
                        <option value="left"<?php if ( $field_value === 'left' ) echo ' selected'; ?>>Left</option>
                        <option value="right"<?php if ( $field_value === 'right' ) echo ' selected'; ?>>Right</option>
                        <option value="top"<?php if ( $field_value === 'top' ) echo ' selected'; ?>>Top</option>
                    </select>
                </div>
                <?php
                     $field_name = 'ImageLegend';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="ImageLegend">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend' ) ); ?> :
                </div>
                <div>
                    <multilingual-text-input-component data-is-column-value data-column-name="ImageLegend" container-class="form-multilingual-container" result-class="form-textarea" result-name="ImageLegend" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                </div>
                <?php
                     $field_name = 'ImageLegendArray';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="ImageLegendArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend Array' ) ); ?> :
                </div>
                <div>
                    <multilingual-text-input-list-component data-is-column-value data-column-name="ImageLegendArray" container-class="form-list-container" result-class="form-textarea" result-name="ImageLegendArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-list-component>
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
                <div>
                    <image-path-input-component data-is-column-value data-column-name="ImagePath" container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></image-path-input-component>
                </div>
                <?php
                     $field_name = 'ImagePathArray';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="ImagePathArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Path Array' ) ); ?> :
                </div>
                <div>
                    <image-path-input-list-component data-is-column-value data-column-name="ImagePathArray" container-class="form-list-container" result-class="form-textarea" result-name="ImagePathArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></image-path-input-list-component>
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
                <div>
                    <select data-is-column-value data-column-name="ImageVerticalPosition"class="form-select" name="ImageVerticalPosition">
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
                     $field_name = 'ImageVerticalPositionArray';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = 'center';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPositionArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position Array' ) ); ?> :
                </div>
                <div>
                    <input-list-component data-is-column-value data-column-name="ImageVerticalPositionArray" container-class="form-list-container" result-class="form-input" result-name="ImageVerticalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
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
                <div>
                    <select data-is-column-value data-column-name="ImageHorizontalPosition"class="form-select" name="ImageHorizontalPosition">
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
                     $field_name = 'ImageHorizontalPositionArray';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = 'center';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPositionArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position Array' ) ); ?> :
                </div>
                <div>
                    <input-list-component data-is-column-value data-column-name="ImageHorizontalPositionArray" container-class="form-list-container" result-class="form-input" result-name="ImageHorizontalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
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
                <div>
                    <video-path-input-component data-is-column-value data-column-name="VideoPath" container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/video" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></video-path-input-component>
                </div>
                <?php
                     $field_name = 'VideoPathArray';

                    if ( HasQueryValue( $field_name ) )
                    {
                         $field_value = GetQueryValue( $field_name );
                    }
                    else
                    {
                        $field_value = '';
                    }
                ?>
                <div class="form-field-name" data-is-column-title data-column-name="VideoPathArray">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Video Path Array' ) ); ?> :
                </div>
                <div>
                    <video-path-input-list-component data-is-column-value data-column-name="VideoPathArray" container-class="form-list-container" result-class="form-textarea" result-name="VideoPathArray" result-value="<?php echo htmlspecialchars( GetValueText( $field_value ) ); ?>" value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></video-path-input-list-component>
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
