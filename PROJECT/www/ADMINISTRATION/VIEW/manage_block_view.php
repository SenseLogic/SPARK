<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="manage-block-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Type Slug' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="TypeSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Block->TypeSlug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Block->Number ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
            </div>
            <div>
                <div>
                    <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                        <textarea class="form-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $this->Block->Text, $language_code ) ); ?></textarea>
                    <?php } ?>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->Block->ImagePath ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Block->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                </div>
            </div>
        </div>
        <div class="form-toolbar">
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button manage-button" href="/admin/block/manage/<?php echo htmlspecialchars( $this->Block->Id ); ?>">
                </a>
                <a class="form-button edit-button" href="/admin/block/edit/<?php echo htmlspecialchars( $this->Block->Id ); ?>">
                </a>
                <a class="form-button remove-button" href="/admin/block/remove/<?php echo htmlspecialchars( $this->Block->Id ); ?>">
                </a>
            <?php } ?>
        </div>
    </div>
    <div>
        <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/block/manage">
        </a>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
