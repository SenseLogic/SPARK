<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-page-sub-page-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Page Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="PageSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageSubPage->PageSlug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Sub Page Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="SubPageSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageSubPage->SubPageSlug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetText( 'Number' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageSubPage->Number ) ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
