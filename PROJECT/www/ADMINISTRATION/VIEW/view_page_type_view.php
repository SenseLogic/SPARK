<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-page-type-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Slug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Title' ) ); ?> :
            </div>
            <div>
                <div>
                    <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                        <input class="form-translation form-input" name="Title" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $this->PageType->Title, $language_code ) ) ); ?>" readonly/>
                    <?php } ?>
                </div>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
