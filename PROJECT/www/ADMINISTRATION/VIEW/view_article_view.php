<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-article-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->Slug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Name' ) ); ?> :
            </div>
            <div>
                <div>
                    <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                        <input class="form-translation form-input" name="Name" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $this->Article->Name, $language_code ) ) ); ?>" readonly/>
                    <?php } ?>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?> :
            </div>
            <div>
                <div>
                    <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                        <textarea class="form-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $this->Article->Text, $language_code ) ); ?></textarea>
                    <?php } ?>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->Article->ImagePath ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Article->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Video Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="VideoPath" type="text" value="<?php echo htmlspecialchars( $this->Article->VideoPath ); ?>" readonly/>
                <div class="form-upload-container">
                    <video class="form-upload-video" src="<?php echo htmlspecialchars( $this->Article->VideoPath ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Next Article Id' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="NextArticleId" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->NextArticleId ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Priority' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Priority" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->Priority ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Is Active' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="IsActive" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->IsActive ) ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
