<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="manage-content-blocks-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "BlockFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
        </div>
    </div>
    <?php foreach ( $this->ContentBlockArray as  $content_block ) { ?>
        <div class="page-section form-section filter-row">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $content_block->Slug ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $content_block->TypeSlug ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $content_block->Number ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <textarea class="form-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $content_block->Text, $language_code ) ); ?></textarea>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $content_block->ImagePath ); ?>" readonly/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="<?php echo htmlspecialchars( $content_block->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                    </div>
                </div>
            </div>
            <div class="form-toolbar">
                <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                    <a class="form-button manage-button" href="/admin/content-block/manage/<?php echo htmlspecialchars( $content_block->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/content-block/edit/<?php echo htmlspecialchars( $content_block->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/content-block/remove/<?php echo htmlspecialchars( $content_block->Id ); ?>">
                    </a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>