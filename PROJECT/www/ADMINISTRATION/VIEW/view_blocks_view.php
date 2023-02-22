<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-blocks-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "BlockFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "BlockListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
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
                <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?>
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
                <?php echo htmlspecialchars( GetTextBySlug( 'Image Side' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?>
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
                                    <?php echo htmlspecialchars( GetValueText( GetTranslatedText( $block->Title, $language_code ) ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
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
                        <?php echo htmlspecialchars( GetValueText( $block->ImagePath ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImageVerticalPosition ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImageHorizontalPosition ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->ImageSide ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block->VideoPath ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/block/view/<?php echo htmlspecialchars( $block->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
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
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div>
                            <input-component result-class="form-input" result-name="Slug" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $block->Slug ) ); ?>" result-readonly></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Page Id' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="PageId" readonly>
                                <?php  $page_array = $this->PageArray; ?>
                                <?php foreach ( $page_array as  $page ) { ?>
                                    <option value="<?php echo htmlspecialchars( GetValueText( $page->Id ) ); ?>"<?php if ( $block->PageId === $page->Id ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $page->Title ) ); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Category Slug' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="CategorySlug" readonly>
                                <?php  $block_category_array = $this->BlockCategoryArray; ?>
                                <?php foreach ( $block_category_array as  $block_category ) { ?>
                                    <option value="<?php echo htmlspecialchars( GetValueText( $block_category->Slug ) ); ?>"<?php if ( $block->CategorySlug === $block_category->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_category->Name ) ); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Content Slug' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="ContentSlug" readonly>
                                <?php  $block_content_array = $this->BlockContentArray; ?>
                                <?php foreach ( $block_content_array as  $block_content ) { ?>
                                    <option value="<?php echo htmlspecialchars( GetValueText( $block_content->Slug ) ); ?>"<?php if ( $block->ContentSlug === $block_content->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_content->Name ) ); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Type Slug' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="TypeSlug" readonly>
                                <?php  $block_type_array = $this->BlockTypeArray; ?>
                                <?php foreach ( $block_type_array as  $block_type ) { ?>
                                    <option value="<?php echo htmlspecialchars( GetValueText( $block_type->Slug ) ); ?>"<?php if ( $block->TypeSlug === $block_type->Slug ) echo ' selected'; ?>><?php echo htmlspecialchars( GetUntranslatedText( $block_type->Name ) ); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div>
                            <input-component result-class="form-input" result-name="Number" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $block->Number ) ); ?>" result-readonly></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Language Code Array' ) ); ?> :
                        </div>
                        <div>
                            <input-list-component result-class="form-input" result-name="LanguageCodeArray" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $block->LanguageCodeArray ) ); ?>" result-readonly></input-list-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Minimum Height' ) ); ?> :
                        </div>
                        <div>
                            <input-component result-class="form-input" result-name="MinimumHeight" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $block->MinimumHeight ) ); ?>" result-readonly></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                        </div>
                        <div>
                            <multilingual-input-component container-class="form-input" result-name="Title" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $block->Title ) ); ?>" result-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"></multilingual-input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Text' ) ); ?> :
                        </div>
                        <div>
                            <multilingual-textarea-component container-class="form-textarea" result-name="Text" result-readonly language-codes="<?php echo LanguageCodes; ?>" language-names="<?php echo LanguageNames; ?>"><?php echo htmlspecialchars( $block->Text ); ?></multilingual-textarea-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Path' ) ); ?> :
                        </div>
                        <div>
                            <image-path-input-component container-class="form-upload-container" result-class="form-input" result-name="ImagePath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $block->ImagePath ) ); ?>" result-readonly image-class="form-upload-image" error-image-path="/static/image/admin/missing_image.svg"></image-path-input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Vertical Position' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="ImageVerticalPosition" readonly>
                                <option value="top"<?php if ( $block->ImageVerticalPosition === 'top' ) echo ' selected'; ?>>Top</option>
                                <option value="10%"<?php if ( $block->ImageVerticalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                                <option value="20%"<?php if ( $block->ImageVerticalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                                <option value="30%"<?php if ( $block->ImageVerticalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                                <option value="40%"<?php if ( $block->ImageVerticalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                                <option value="center"<?php if ( $block->ImageVerticalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                                <option value="60%"<?php if ( $block->ImageVerticalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                                <option value="70%"<?php if ( $block->ImageVerticalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                                <option value="80%"<?php if ( $block->ImageVerticalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                                <option value="90%"<?php if ( $block->ImageVerticalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                                <option value="bottom"<?php if ( $block->ImageVerticalPosition === 'bottom' ) echo ' selected'; ?>>Bottom</option>
                            </select>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Horizontal Position' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="ImageHorizontalPosition" readonly>
                                <option value="left"<?php if ( $block->ImageHorizontalPosition === 'left' ) echo ' selected'; ?>>Left</option>
                                <option value="10%"<?php if ( $block->ImageHorizontalPosition === '10%' ) echo ' selected'; ?>>10%</option>
                                <option value="20%"<?php if ( $block->ImageHorizontalPosition === '20%' ) echo ' selected'; ?>>20%</option>
                                <option value="30%"<?php if ( $block->ImageHorizontalPosition === '30%' ) echo ' selected'; ?>>30%</option>
                                <option value="40%"<?php if ( $block->ImageHorizontalPosition === '40%' ) echo ' selected'; ?>>40%</option>
                                <option value="center"<?php if ( $block->ImageHorizontalPosition === 'center' ) echo ' selected'; ?>>Center</option>
                                <option value="60%"<?php if ( $block->ImageHorizontalPosition === '60%' ) echo ' selected'; ?>>60%</option>
                                <option value="70%"<?php if ( $block->ImageHorizontalPosition === '70%' ) echo ' selected'; ?>>70%</option>
                                <option value="80%"<?php if ( $block->ImageHorizontalPosition === '80%' ) echo ' selected'; ?>>80%</option>
                                <option value="90%"<?php if ( $block->ImageHorizontalPosition === '90%' ) echo ' selected'; ?>>90%</option>
                                <option value="right"<?php if ( $block->ImageHorizontalPosition === 'right' ) echo ' selected'; ?>>Right</option>
                            </select>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Image Side' ) ); ?> :
                        </div>
                        <div>
                            <select class="form-select" name="ImageSide" readonly>
                                <option value="left"<?php if ( $block->ImageSide === 'left' ) echo ' selected'; ?>>Left</option>
                                <option value="right"<?php if ( $block->ImageSide === 'right' ) echo ' selected'; ?>>Right</option>
                            </select>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Video Path' ) ); ?> :
                        </div>
                        <div>
                            <video-path-input-component container-class="form-upload-container" result-class="form-input" result-name="VideoPath" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $block->VideoPath ) ); ?>" result-readonly video-class="form-upload-video" error-video-path="/static/video/admin/missing_video.mp4"></video-path-input-component>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
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
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
