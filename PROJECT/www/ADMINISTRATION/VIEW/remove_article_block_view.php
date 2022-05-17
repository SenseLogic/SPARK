<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-article-block-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/article-block/remove/<?php echo htmlspecialchars( $this->ArticleBlock->Id ); ?>" method="post">
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
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListRoute ); ?>">
                </a>
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
