<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-article-block-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Article Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="ArticleSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->ArticleBlock->ArticleSlug ) ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block Slug' ) ); ?> :
            </div>
            <div>
                    <input class="form-input" name="BlockSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->ArticleBlock->BlockSlug ) ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
