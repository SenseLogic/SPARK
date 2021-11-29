<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-article-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->Slug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Name' ) ); ?> :
            </div>
            <div>
                <div>
                    <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                        <input class="multilingual-input-translation form-input" name="Name" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $this->Article->Name, $language_code ) ) ); ?>" readonly/>
                    <?php } ?>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Text' ) ); ?> :
            </div>
            <div>
                <div>
                    <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                        <textarea class="multilingual-input-translation form-textarea" name="Text" readonly><?php echo htmlspecialchars( GetTranslatedText( $this->Article->Text, $language_code ) ); ?></textarea>
                    <?php } ?>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Image Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="ImagePath" type="text" value="<?php echo htmlspecialchars( $this->Article->ImagePath ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="<?php echo htmlspecialchars( $this->Article->ImagePath ); ?>" onerror="this.src='/static/image/admin/missing_image.svg'"/>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Video Path' ) ); ?> :
            </div>
            <div>
                <input class="form-input" name="VideoPath" type="text" value="<?php echo htmlspecialchars( $this->Article->VideoPath ); ?>" readonly/>
                <div class="form-upload-container">
                    <video class="form-upload-video" src="<?php echo htmlspecialchars( $this->Article->VideoPath ); ?>" type="video/mp4" onerror="this.src='/static/video/admin/missing_video.mp4'"></video>
                </div>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Next Article Id' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="NextArticleId" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->NextArticleId ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Priority' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Priority" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->Priority ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Is Active' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="IsActive" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->Article->IsActive ) ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
