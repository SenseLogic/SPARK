<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-pages-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "PageFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "PageListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
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
                <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?>
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
                        <?php echo htmlspecialchars( GetValueText( $page->MetaImagePath ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/page/view/<?php echo htmlspecialchars( $page->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
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
                    <div class="form-container">
                        <div class="form-field-name" data-is-column-title data-column-name="Slug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div>
                            <input-component data-is-column-value data-column-name="Slug" result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $page->Slug ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Route">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                        </div>
                        <div>
                            <input-component data-is-column-value data-column-name="Route" result-class="form-input" result-name="Route" result-value="<?php echo htmlspecialchars( GetValueText( $page->Route ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="TypeSlug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                        </div>
                        <div>
                            <select data-is-column-value data-column-name="TypeSlug"class="form-select" name="TypeSlug" readonly>
                                <?php  $page_type_array = $this->PageTypeArray; ?>
                                <?php foreach ( $page_type_array as  $page_type ) { ?>
                                    <option value="<?php echo htmlspecialchars( GetValueText( $page_type->Slug ) ); ?>"<?php if ( $page->TypeSlug === $page_type->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page_type->Title ) ); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Number">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div>
                            <input-component data-is-column-value data-column-name="Number" result-class="form-input" result-name="Number" result-value="<?php echo htmlspecialchars( GetValueText( $page->Number ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="LanguageCodeArray">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                        </div>
                        <div>
                            <input-list-component data-is-column-value data-column-name="LanguageCodeArray" container-class="form-list-container" result-class="form-list-container" result-name="LanguageCodeArray" result-value="<?php echo htmlspecialchars( GetValueText( $page->LanguageCodeArray ) ); ?>" is-readonly value-container-class="form-value-container" value-class="form-input form-value" add-button-class="form-button add-button form-add-value-button" remove-button-class="form-button remove-button form-remove-value-button"></input-list-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="IsActive">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
                        </div>
                        <div>
                            <select data-is-column-value data-column-name="IsActive"class="form-select" name="IsActive" readonly>
                                <option value="0"<?php if ( $page->IsActive === '0' ) echo ' selected'; ?>>False</option>
                                <option value="1"<?php if ( $page->IsActive === '1' ) echo ' selected'; ?>>True</option>
                            </select>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Title">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                        </div>
                        <div>
                            <multilingual-input-component data-is-column-value data-column-name="Title" container-class="form-multilingual-container" result-class="form-input" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $page->Title ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Heading">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
                        </div>
                        <div>
                            <multilingual-text-input-component data-is-column-value data-column-name="Heading" container-class="form-multilingual-container" result-class="form-textarea" result-name="Heading" result-value="<?php echo htmlspecialchars( GetValueText( $page->Heading ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Teaser">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                        </div>
                        <div>
                            <multilingual-text-input-component data-is-column-value data-column-name="Teaser" container-class="form-multilingual-container" result-class="form-textarea" result-name="Teaser" result-value="<?php echo htmlspecialchars( GetValueText( $page->Teaser ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImagePath">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                        </div>
                        <div>
                            <image-path-input-component data-is-column-value data-column-name="ImagePath" container-class="form-upload-container" result-class="form-input form-upload-input" result-name="ImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $page->ImagePath ) ); ?>" is-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg"></image-path-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageVerticalPosition">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                        </div>
                        <div>
                            <select data-is-column-value data-column-name="ImageVerticalPosition"class="form-select" name="ImageVerticalPosition" readonly>
                                <option value="top"<?php if ( $page->ImageVerticalPosition === 'top' ) echo ' selected'; ?>>Top</option>
                                <option value="10%"<?php if ( $page->ImageVerticalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                                <option value="20%"<?php if ( $page->ImageVerticalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                                <option value="30%"<?php if ( $page->ImageVerticalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                                <option value="40%"<?php if ( $page->ImageVerticalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                                <option value="center"<?php if ( $page->ImageVerticalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                                <option value="60%"<?php if ( $page->ImageVerticalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                                <option value="70%"<?php if ( $page->ImageVerticalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                                <option value="80%"<?php if ( $page->ImageVerticalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                                <option value="90%"<?php if ( $page->ImageVerticalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                                <option value="bottom"<?php if ( $page->ImageVerticalPosition === 'bottom' ) echo ' selected'; ?>>Bottom</option>
                            </select>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="ImageHorizontalPosition">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                        </div>
                        <div>
                            <select data-is-column-value data-column-name="ImageHorizontalPosition"class="form-select" name="ImageHorizontalPosition" readonly>
                                <option value="left"<?php if ( $page->ImageHorizontalPosition === 'left' ) echo ' selected'; ?>>Left</option>
                                <option value="10%"<?php if ( $page->ImageHorizontalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                                <option value="20%"<?php if ( $page->ImageHorizontalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                                <option value="30%"<?php if ( $page->ImageHorizontalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                                <option value="40%"<?php if ( $page->ImageHorizontalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                                <option value="center"<?php if ( $page->ImageHorizontalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                                <option value="60%"<?php if ( $page->ImageHorizontalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                                <option value="70%"<?php if ( $page->ImageHorizontalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                                <option value="80%"<?php if ( $page->ImageHorizontalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                                <option value="90%"<?php if ( $page->ImageHorizontalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                                <option value="right"<?php if ( $page->ImageHorizontalPosition === 'right' ) echo ' selected'; ?>>Right</option>
                            </select>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="VideoPath">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                        </div>
                        <div>
                            <video-path-input-component data-is-column-value data-column-name="VideoPath" container-class="form-upload-container" result-class="form-input form-upload-input" result-name="VideoPath" result-value="<?php echo htmlspecialchars( GetValueText( $page->VideoPath ) ); ?>" is-readonly video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4"></video-path-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="MetaTitle">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
                        </div>
                        <div>
                            <multilingual-input-component data-is-column-value data-column-name="MetaTitle" container-class="form-multilingual-container" result-class="form-input" result-name="MetaTitle" result-value="<?php echo htmlspecialchars( GetValueText( $page->MetaTitle ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="MetaDescription">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
                        </div>
                        <div>
                            <multilingual-text-input-component data-is-column-value data-column-name="MetaDescription" container-class="form-multilingual-container" result-class="form-textarea" result-name="MetaDescription" result-value="<?php echo htmlspecialchars( GetValueText( $page->MetaDescription ) ); ?>" is-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-text-input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="MetaImagePath">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?> :
                        </div>
                        <div>
                            <image-path-input-component data-is-column-value data-column-name="MetaImagePath" container-class="form-upload-container" result-class="form-input form-upload-input" result-name="MetaImagePath" result-value="<?php echo htmlspecialchars( GetValueText( $page->MetaImagePath ) ); ?>" is-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg"></image-path-input-component>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
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
