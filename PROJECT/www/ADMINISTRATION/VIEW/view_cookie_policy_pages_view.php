<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-cookie-policy-pages-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "CookiePolicyPageFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "CookiePolicyPageListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/cookie-policy-page/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container cookie-policy-page-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Route' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Language Code Array' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Is Active' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Vertical Position' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Horizontal Position' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Video Path' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->CookiePolicyPageArray as  $cookie_policy_page ) { ?>
                <div class="sortable-table-row filter-row filter-content">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $cookie_policy_page->Route ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $cookie_policy_page->TypeSlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $cookie_policy_page->Number ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $cookie_policy_page->LanguageCodeArray ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $cookie_policy_page->IsActive ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetValueText( GetTranslatedText( $cookie_policy_page->Title, $language_code ) ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetTranslatedText( $cookie_policy_page->Text, $language_code ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $cookie_policy_page->ImagePath ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $cookie_policy_page->ImageVerticalPosition ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $cookie_policy_page->ImageHorizontalPosition ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $cookie_policy_page->VideoPath ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/cookie-policy-page/view/<?php echo htmlspecialchars( $cookie_policy_page->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/cookie-policy-page/edit/<?php echo htmlspecialchars( $cookie_policy_page->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/cookie-policy-page/remove/<?php echo htmlspecialchars( $cookie_policy_page->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->CookiePolicyPageArray as  $cookie_policy_page ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Route' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="Route" type="text" value="<?php echo htmlspecialchars( GetValueText( $cookie_policy_page->Route ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $cookie_policy_page->TypeSlug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $cookie_policy_page->Number ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Language Code Array' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="LanguageCodeArray" type="text" value="<?php echo htmlspecialchars( GetValueText( $cookie_policy_page->LanguageCodeArray ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Is Active' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="IsActive" type="text" value="<?php echo htmlspecialchars( GetValueText( $cookie_policy_page->IsActive ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?> :
                        </div>
                        <div>
                            <div>
                                <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                    <input class="form-translation form-input" name="Title" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $cookie_policy_page->Title, $language_code ) ) ); ?>" readonly/>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                        </div>
                        <div>
                            <div>
                                <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                    <textarea class="form-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $cookie_policy_page->Text, $language_code ) ); ?></textarea>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $cookie_policy_page->ImagePath ); ?>" readonly/>
                            <div class="form-upload-container">
                                <img class="form-upload-image" src="<?php echo htmlspecialchars( $cookie_policy_page->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                            </div>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Vertical Position' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="ImageVerticalPosition" type="text" value="<?php echo htmlspecialchars( GetValueText( $cookie_policy_page->ImageVerticalPosition ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Horizontal Position' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="ImageHorizontalPosition" type="text" value="<?php echo htmlspecialchars( GetValueText( $cookie_policy_page->ImageHorizontalPosition ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Video Path' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="VideoPath" type="text" value="<?php echo htmlspecialchars( $cookie_policy_page->VideoPath ); ?>" readonly/>
                            <div class="form-upload-container">
                                <video class="form-upload-video" src="<?php echo htmlspecialchars( $cookie_policy_page->VideoPath ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                            </div>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <div class="form-toolbar">
                            <a class="form-button edit-button" href="/admin/cookie-policy-page/edit/<?php echo htmlspecialchars( $cookie_policy_page->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/cookie-policy-page/remove/<?php echo htmlspecialchars( $cookie_policy_page->Id ); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
