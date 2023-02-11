<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="manage-blocks-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "BlockFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
        </div>
    </div>
    <?php foreach ( $this->BlockArray as  $block ) { ?>
        <div class="page-section form-section filter-row">
            <div class="form-container">
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
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $block->Number ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
                </div>
                <div>
                    <div>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <textarea class="form-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $block->Text, $language_code ) ); ?></textarea>
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
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
