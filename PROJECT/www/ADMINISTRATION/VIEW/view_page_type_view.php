<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-page-type-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="PAGE_TYPE">
            <div class="form-field-name" data-is-column-title data-column-name="Slug">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Slug">
                <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Slug ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Title">
                <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Title">
                <input-component result-class="form-input" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Title ) ); ?>" is-readonly></input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
