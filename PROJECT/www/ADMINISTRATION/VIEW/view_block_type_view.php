<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-block-type-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->BlockType->Slug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Name' ) ); ?> :
            </div>
            <div>
                <div>
                    <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                        <input class="form-translation form-input" name="Name" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $this->BlockType->Name, $language_code ) ) ); ?>" readonly/>
                    <?php } ?>
                </div>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
