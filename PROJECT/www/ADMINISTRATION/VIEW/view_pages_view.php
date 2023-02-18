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
                                    <?php echo htmlspecialchars( GetValueText( GetTranslatedText( $page->Heading, $language_code ) ) ); ?>
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
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Slug" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $page->Slug ) ); ?>" readonly_></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Route' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Route" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $page->Route ) ); ?>" readonly_></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="TypeSlug" readonly>
                                <?php  $page_type_array = $this->PageTypeArray; ?>
                                <?php foreach ( $page_type_array as  $page_type ) { ?>
                                    <option value="<?php echo htmlspecialchars( GetValueText( $page_type->Slug ) ); ?>"<?php if ( $page->TypeSlug === $page_type->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page_type->Title ) ); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Number" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $page->Number ) ); ?>" readonly_></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="LanguageCodeArray" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $page->LanguageCodeArray ) ); ?>" readonly_></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Is Active' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="IsActive" readonly>
                                <option value="0"<?php if ( $page->IsActive === '0' ) echo ' selected'; ?>>False</option>
                                <option value="1"<?php if ( $page->IsActive === '1' ) echo ' selected'; ?>>True</option>
                            </select>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Title" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $page->Title ) ); ?>" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Heading' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Heading" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $page->Heading ) ); ?>" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Teaser' ) ); ?> :
                        </div>
                        <div>
                            <textarea-component class_="form-textarea" name_="Teaser" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $page->Teaser ); ?></textarea-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $page->ImagePath ); ?>" readonly/>
                            <div class="form-upload-container">
                                <img class="form-upload-image" src="<?php echo htmlspecialchars( $page->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                            </div>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="ImageVerticalPosition" readonly>
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
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="ImageHorizontalPosition" readonly>
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
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="VideoPath" type="text" value="<?php echo htmlspecialchars( $page->VideoPath ); ?>" readonly/>
                            <div class="form-upload-container">
                                <video class="form-upload-video" src="<?php echo htmlspecialchars( $page->VideoPath ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                            </div>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Title' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="MetaTitle" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $page->MetaTitle ) ); ?>" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Description' ) ); ?> :
                        </div>
                        <div>
                            <textarea-component class_="form-textarea" name_="MetaDescription" readonly_ language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $page->MetaDescription ); ?></textarea-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Meta Image Path' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="MetaImagePath" type="text" value="<?php echo htmlspecialchars( $page->MetaImagePath ); ?>" readonly/>
                            <div class="form-upload-container">
                                <img class="form-upload-image" src="<?php echo htmlspecialchars( $page->MetaImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                            </div>
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
