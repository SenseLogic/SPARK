<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="manage-content-block-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->ContentBlock->Slug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->ContentBlock->TypeSlug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->ContentBlock->Number ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
            </div>
            <div>
                <div>
                    <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                        <textarea class="form-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $this->ContentBlock->Text, $language_code ) ); ?></textarea>
                    <?php } ?>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->ContentBlock->ImagePath ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->ContentBlock->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                </div>
            </div>
        </div>
        <div class="form-toolbar">
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button manage-button" href="/admin/content-block/manage/<?php echo htmlspecialchars( $this->ContentBlock->Id ); ?>">
                </a>
                <a class="form-button edit-button" href="/admin/content-block/edit/<?php echo htmlspecialchars( $this->ContentBlock->Id ); ?>">
                </a>
                <a class="form-button remove-button" href="/admin/content-block/remove/<?php echo htmlspecialchars( $this->ContentBlock->Id ); ?>">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="form-title">
        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub-blocks' ) ); ?> :
    </div>
    <div class="margin-top-1rem margin-bottom-2rem card-list">
        <?php  $added_sub_block_number = 1; ?>
        <?php foreach ( $this->ContentBlock->SubBlockArray as  $sub_block_index =>  $sub_block ) { ?>
            <?php  $added_sub_block_number = GetAddedElementNumber( $this->ContentBlock->SubBlockArray, $sub_block_index ); ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $sub_block->Slug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $sub_block->TypeSlug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $sub_block->Number ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                        </div>
                        <div>
                            <div>
                                <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                    <textarea class="form-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $sub_block->Text, $language_code ) ); ?></textarea>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
                        </div>
                        <div>
                            <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $sub_block->ImagePath ); ?>" readonly/>
                            <div class="form-upload-container">
                                <img class="form-upload-image" src="<?php echo htmlspecialchars( $sub_block->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-toolbar">
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button manage-button" href="/admin/content-block/manage/<?php echo htmlspecialchars( $sub_block->Id ); ?>">
                            </a>
                            <a class="form-button edit-button" href="/admin/content-block/edit/<?php echo htmlspecialchars( $sub_block->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/content-block/remove/<?php echo htmlspecialchars( $sub_block->Id ); ?>">
                            </a>
                            <a class="form-button add-button" href="/admin/content-block/add?BlockSlug=<?php echo $this->ContentBlock->Slug; ?>&Number=<?php echo $added_sub_block_number; ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="form-extended form-centered margin-top-1rem margin-bottom-1rem">
        <a class="form-button form-button-large add-button" href="/admin/content-block/add?BlockSlug=<?php echo $this->ContentBlock->Slug; ?>&Number=<?php echo $added_sub_block_number; ?>">
        </a>
    </div>
    <div>
        <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/content-block/manage">
        </a>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
