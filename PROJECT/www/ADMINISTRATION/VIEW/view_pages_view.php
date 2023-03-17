<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-pages-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "PageFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "PageListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/page/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container page-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?>
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
                <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Route Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Title Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Description Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->PageArray as  $page ) { ?>
                <div class="sortable-table-row filter-row filter-content">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->Slug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->Route ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->TypeSlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->Number ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->LanguageCodeArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->IsActive ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetValueText( GetTranslatedText( $page->Title, $language_code ) ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetTranslatedText( $page->Heading, $language_code ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetTranslatedText( $page->Teaser, $language_code ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->ImagePath ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->ImageVerticalPosition ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->ImageHorizontalPosition ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->VideoPath ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetValueText( GetTranslatedText( $page->MetaTitle, $language_code ) ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetTranslatedText( $page->MetaDescription, $language_code ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->MetaSubRouteArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->MetaSubTitleArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page->MetaSubDescriptionArray ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/page/view/<?php echo htmlspecialchars( $page->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/page/edit/<?php echo htmlspecialchars( $page->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/page/remove/<?php echo htmlspecialchars( $page->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->PageArray as  $page ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container" data-is-row data-table-name="PAGE">
                        <div class="form-field-name" data-is-column-title data-column-name="Slug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Slug">
                            <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $page->Slug ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Route">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Route">
                            <input-component result-class="form-input" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $page->Route ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="TypeSlug">
                            <dropdown-component result-class="form-select" result-name="TypeSlug" result-value="<?php echo htmlspecialchars( GetValueText( $page->TypeSlug ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetElementPropertyArray( $this->PageTypeArray, 'Slug' ) ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( GetUntranslatedElementArray( GetElementPropertyArray( $this->PageTypeArray, 'Name' ) ) ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Number">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Number">
                            <input-component result-class="form-input" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $page->Number ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="LanguageCodeArray">
                            <dropdown-list-component result-class="form-select" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $page->LanguageCodeArray ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'en', 'fr', 'de', 'ja' ,'ru' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'English', 'French', 'German', 'Japanese', 'Russian' ] ) ) ); ?>" list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></dropdown-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="IsActive">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="IsActive">
                            <dropdown-component result-class="form-select" result-name="IsActive" result-value="<?php echo htmlspecialchars( GetValueText( $page->IsActive ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 0, 1 ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'False', 'True' ] ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Title">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Title">
                            <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $page->Title ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Heading">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Heading">
                            <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Heading" result-value="<?php echo htmlspecialchars( GetValueText( $page->Heading ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Teaser">
                            <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $page->Teaser ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImagePath">
                            <image-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $page->ImagePath ) ); ?>" is-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/image" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></image-path-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImageVerticalPosition">
                            <dropdown-component result-class="form-select" result-name="ImageVerticalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $page->ImageVerticalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'top', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'bottom'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Top', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Bottom' ] ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="ImageHorizontalPosition">
                            <dropdown-component result-class="form-select" result-name="ImageHorizontalPosition" result-value="<?php echo htmlspecialchars( GetValueText( $page->ImageHorizontalPosition ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'left', '10%', '20%', '30%', '40%', 'center', '60%', '70%', '80%', '90%', 'right'] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Left', '10%', '20%', '30%', '40%', 'Center', '60%', '70%', '80%', '90%', 'Right' ] ) ) ); ?>"></dropdown-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="VideoPath">
                            <video-path-input-component container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $page->VideoPath ) ); ?>" is-readonly video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4" upload-button-container-class="form-upload-button-container" upload-button-class="form-button upload-button form-upload-button" upload-api-url="/admin/upload/video" delete-button-class="form-button delete-button form-delete-button" delete-api-url="/admin/delete/file"></video-path-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="MetaTitle">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="MetaTitle">
                            <multilingual-input-component container-class="form-multilingual-container" result-class="form-input" result-name="MetaTitle" result-value="<?php echo htmlspecialchars( GetValueText( $page->MetaTitle ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="MetaDescription">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="MetaDescription">
                            <multilingual-text-input-component container-class="form-multilingual-container" result-class="form-textarea" result-name="MetaDescription" result-value="<?php echo htmlspecialchars( GetValueText( $page->MetaDescription ) ); ?>" is-readonly language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="MetaSubRouteArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Route Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="MetaSubRouteArray">
                            <input-list-component result-class="form-input" result-name="MetaSubRouteArray" result-value="<?php echo htmlspecialchars( GetValueText( $page->MetaSubRouteArray ) ); ?>" is-readonly list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="MetaSubTitleArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Title Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="MetaSubTitleArray">
                            <multilingual-input-list-component container-class="form-multilingual-container" result-class="form-input" result-name="MetaSubTitleArray" result-value="<?php echo htmlspecialchars( GetValueText( $page->MetaSubTitleArray ) ); ?>" is-readonly list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="MetaSubDescriptionArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Sub Description Array' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="MetaSubDescriptionArray">
                            <multilingual-text-input-list-component container-class="form-multilingual-container" result-class="form-textarea" result-name="MetaSubDescriptionArray" result-value="<?php echo htmlspecialchars( GetValueText( $page->MetaSubDescriptionArray ) ); ?>" is-readonly list-container-class="form-list-container" value-container-class="form-value-container" value-class="form-value" drag-button-class="form-button drag-button form-drag-value-button" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button" language-codes="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageCodeArray ) ) ); ?>" language-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( LanguageNameArray ) ) ); ?>"></multilingual-text-input-list-component>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                        <div class="form-toolbar">
                            <a class="form-button edit-button" href="/admin/page/edit/<?php echo htmlspecialchars( $page->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/page/remove/<?php echo htmlspecialchars( $page->Id ); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
