<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-page-type-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Slug" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Slug ) ); ?>" result-readonly></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
            </div>
            <div>
                <input-component result-class="form-input" result-name="Title" type_="text" result-value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Title ) ); ?>" result-readonly></input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
