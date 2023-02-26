<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-page-type-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/page-type/remove/<?php echo htmlspecialchars( $this->PageType->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                </div>
                <div>
                    <input-component result-class="form-input" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Slug ) ); ?>" is-readonly></input-component>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Title' ) ); ?> :
                </div>
                <div>
                    <input-component result-class="form-input" result-name="Title" result-value="<?php echo htmlspecialchars( GetValueText( $this->PageType->Title ) ); ?>" is-readonly></input-component>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
                </a>
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
