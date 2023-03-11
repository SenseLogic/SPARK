<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-blocks-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "BlockFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "BlockListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/block/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container block-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Page Id' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Category Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Content Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Minimum Height' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Teaser Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Text Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Route Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Side' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Path Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Video Path Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->BlockArray as  $block ) { ?>
                <div class="sortable-table-row filter-row filter-content">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->Slug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->PageId ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->CategorySlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ContentSlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->TypeSlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->Number ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->LanguageCodeArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->MinimumHeight ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetTranslatedText( $block->Title, $language_code ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->TitleArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetTranslatedText( $block->Teaser, $language_code ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->TeaserArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetTranslatedText( $block->Text, $language_code ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->TextArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetValueText( GetTranslatedText( $block->Route, $language_code ) ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->RouteArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImageSide ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetTranslatedText( $block->ImageLegend, $language_code ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImageLegendArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImagePath ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImagePathArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImageVerticalPosition ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImageVerticalPositionArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImageHorizontalPosition ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImageHorizontalPositionArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->VideoPath ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->VideoPathArray ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/block/view/<?php echo htmlspecialchars( $block->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/block/edit/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/block/remove/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->BlockArray as  $block ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container" data-is-row data-table-name="BLOCK">
                        <div class="form-field-name" data-is-column-title data-column-name="Slug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Slug">
                            <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $block->Slug ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="PageId">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Page Id' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="PageId">
                            <dropdown-component result-class="form-select" result-name="PageId" result-value="<?php echo htmlspecialchars( GetValueText( $block->PageId ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->PageArray, 'Id' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->PageArray, 'Title' ) ) ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="CategorySlug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Category Slug' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="CategorySlug">
                            <dropdown-component result-class="form-select" result-name="CategorySlug" result-value="<?php echo htmlspecialchars( GetValueText( $block->CategorySlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockCategoryArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockCategoryArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ContentSlug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Content Slug' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ContentSlug">
                            <dropdown-component result-class="form-select" result-name="ContentSlug" result-value="<?php echo htmlspecialchars( GetValueText( $block->ContentSlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockContentArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockContentArray,'Name' ) ) ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                            <dropdown-component result-class="form-select" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText( $block->TypeSlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->BlockTypeArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->BlockTypeArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Number">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Number">
                            <input-component result-class="form-input" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $block->Number ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="LanguageCodeArray">
                            <input-list-component container-class="form-list-container" result-class="form-list-container" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->LanguageCodeArray ) ); ?>" is-readonly list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="MinimumHeight">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Minimum Height' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="MinimumHeight">
                            <input-component result-class="form-input" result-name="MinimumHeight" result-value="<?php echo htmlspecialchars( GetValueText( $block->MinimumHeight ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Title">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Title">
                            <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $block->Title ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="TitleArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Title Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="TitleArray">
                            <multilingual-text-input-list-component container-class="form-list-container" result-class="form-textarea" result-name="TitleArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->TitleArray ) ); ?>" is-readonly list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                            <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $block->Teaser ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="TeaserArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Teaser Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="TeaserArray">
                            <multilingual-text-input-list-component container-class="form-list-container" result-class="form-textarea" result-name="TeaserArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->TeaserArray ) ); ?>" is-readonly list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Text">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Text">
                            <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Text" result-value="<?php echo htmlspecialchars( GetValueText( $block->Text ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="TextArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Text Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="TextArray">
                            <multilingual-text-input-list-component container-class="form-list-container" result-class="form-textarea" result-name="TextArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->TextArray ) ); ?>" is-readonly list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Route">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Route">
                            <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $block->Route ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="RouteArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Route Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="RouteArray">
                            <multilingual-input-list-component container-class="form-list-container" result-class="form-input" result-name="RouteArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->RouteArray ) ); ?>" is-readonly list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageSide">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Side' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImageSide">
                            <dropdown-component result-class="form-select" result-name="ImageSide" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImageSide ) ); ?>" is-readonly is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', 'right' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Left', 'Right' ] ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageLegend">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImageLegend">
                            <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="ImageLegend" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImageLegend ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageLegendArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Legend Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImageLegendArray">
                            <multilingual-text-input-list-component container-class="form-list-container" result-class="form-textarea" result-name="ImageLegendArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImageLegendArray ) ); ?>" is-readonly list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImagePath">
                            <image-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImagePath ) ); ?>" is-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></image-path-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImagePathArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Path Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImagePathArray">
                            <image-path-input-list-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePathArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImagePathArray ) ); ?>" is-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></image-path-input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
                            <dropdown-component result-class="form-select" result-name="ImageVerticalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImageVerticalPosition ) ); ?>" is-readonly is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( ['Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPositionArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPositionArray">
                            <dropdown-list-component result-class="form-select" result-name="ImageVerticalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImageVerticalPositionArray ) ); ?>" is-readonly is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( ['Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></dropdown-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
                            <dropdown-component result-class="form-select" result-name="ImageHorizontalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImageHorizontalPosition ) ); ?>" is-readonly is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( ['Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPositionArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPositionArray">
                            <dropdown-list-component result-class="form-select" result-name="ImageHorizontalPositionArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImageHorizontalPositionArray ) ); ?>" is-readonly is-optional option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( ['Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></dropdown-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="VideoPath">
                            <video-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $block->VideoPath ) ); ?>" is-readonly video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/video" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></video-path-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="VideoPathArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Video Path Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="VideoPathArray">
                            <video-path-input-list-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPathArray" result-value="<?php echo htmlspecialchars( GetValueText( $block->VideoPathArray ) ); ?>" is-readonly video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/video" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></video-path-input-list-component>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                        <div class="form-toolbar">
                            <a class="form-button edit-button" href="/admin/block/edit/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/block/remove/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/block_footer.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
