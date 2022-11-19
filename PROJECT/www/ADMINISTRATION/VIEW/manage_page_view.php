<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="manage-page-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Page->Id ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Page->TypeSlug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Route' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="Route" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Page->Route ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?> :
            </div>
            <div>
                <div>
                    <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                        <input class="form-translation form-input" name="Title" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $this->Page->Title, $language_code ) ) ); ?>" readonly/>
                    <?php } ?>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->Page->ImagePath ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Page->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                </div>
            </div>
        </div>
        <div class="form-toolbar">
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button manage-button" href="/admin/page/manage/<?php echo htmlspecialchars( $this->Page->Id ); ?>">
                </a>
                <a class="form-button edit-button" href="/admin/page/edit/<?php echo htmlspecialchars( $this->Page->Id ); ?>">
                </a>
                <a class="form-button remove-button" href="/admin/page/remove/<?php echo htmlspecialchars( $this->Page->Id ); ?>">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="form-title">
        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Blocks' ) ); ?> :
    </div>
    <div class="margin-top-1rem margin-bottom-2rem card-list">
        <?php  $added_block_number = 1; ?>
        <?php foreach ( $this->Page->BlockArray as  $block_index =>  $block ) { ?>
            <?php $added_block_number = GetAddedElementNumber( $this->Page->BlockArray, $block_index ); ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $block->Id ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $block->TypeSlug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Page->BlockArray[ $block_index ]->Number ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?> :
                        </div>
                        <div>
                            <div>
                                <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                    <input class="form-translation form-input" name="Title" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $block->Title, $language_code ) ) ); ?>" readonly/>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $block->ImagePath ); ?>" readonly/>
                            <div class="form-upload-container">
                                <img class="form-upload-image" src="<?php echo htmlspecialchars( $block->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-toolbar">
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button manage-button" href="/admin/block/manage/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                            <a class="form-button edit-button" href="/admin/block/edit/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/block/remove/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                            <a class="form-button add-button" href="/admin/block/add?PageSlug=<?php echo $this->Page->Id; ?>&Number=<?php echo $added_block_number; ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="form-extended form-centered margin-top-1rem margin-bottom-1rem">
        <a class="form-button form-button-large add-button" href="/admin/block/add?PageSlug=<?php echo $this->Page->Id; ?>&Number=<?php echo $added_block_number; ?>">
        </a>
    </div>
    <div class="form-title">
        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub-pages' ) ); ?> :
    </div>
    <div class="margin-top-1rem margin-bottom-2rem card-list">
        <?php  $added_sub_page_number = 1; ?>
        <?php foreach ( $this->Page->SubPageArray as  $sub_page_index =>  $sub_page ) { ?>
            <?php $added_sub_page_number = GetAddedElementNumber( $this->Page->PageSubPageArray, $sub_page_index ); ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $sub_page->Id ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $sub_page->TypeSlug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Page->PageSubPageArray[ $sub_page_index ]->Number ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Route' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="Route" type="text" value="<?php echo htmlspecialchars( GetValueText( $sub_page->Route ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?> :
                        </div>
                        <div>
                            <div>
                                <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                    <input class="form-translation form-input" name="Title" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $sub_page->Title, $language_code ) ) ); ?>" readonly/>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $sub_page->ImagePath ); ?>" readonly/>
                            <div class="form-upload-container">
                                <img class="form-upload-image" src="<?php echo htmlspecialchars( $sub_page->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-toolbar">
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button manage-button" href="/admin/page/manage/<?php echo htmlspecialchars( $sub_page->Id ); ?>">
                            </a>
                            <a class="form-button edit-button" href="/admin/page/edit/<?php echo htmlspecialchars( $sub_page->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/page/remove/<?php echo htmlspecialchars( $sub_page->Id ); ?>">
                            </a>
                            <a class="form-button add-button" href="/admin/page-sub-page/add?PageSlug=<?php echo $this->Page->Id; ?>&Number=<?php echo $added_sub_page_number; ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="form-extended form-centered margin-top-1rem margin-bottom-1rem">
        <a class="form-button form-button-large add-button" href="/admin/page-sub-page/add?PageSlug=<?php echo $this->Page->Id; ?>&Number=<?php echo $added_sub_page_number; ?>">
        </a>
    </div>
    <div>
        <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/page/manage">
        </a>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
