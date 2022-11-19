<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-page-sub-page-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/page-sub-page/remove/<?php echo htmlspecialchars( $this->PageSubPage->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page Id' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="PageId" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageSubPage->PageId ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub Page Id' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="SubPageId" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageSubPage->SubPageId ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->PageSubPage->Number ) ); ?>" readonly/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
                </a>
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
