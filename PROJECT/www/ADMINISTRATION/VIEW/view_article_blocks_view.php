<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-article-blocks-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "ArticleBlockFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "ArticleBlockListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/article-block/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container article-block-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetText( 'Article Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetText( 'Block Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetText( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->ArticleBlockArray as  $article_block ) { ?>
                <div class="sortable-table-row filter-row">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $article_block->ArticleSlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $article_block->BlockSlug ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/article-block/view/<?php echo htmlspecialchars( $article_block->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/article-block/edit/<?php echo htmlspecialchars( $article_block->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/article-block/remove/<?php echo htmlspecialchars( $article_block->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->ArticleBlockArray as  $article_block ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetText( 'Article Slug' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="ArticleSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $article_block->ArticleSlug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetText( 'Block Slug' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="BlockSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $article_block->BlockSlug ) ); ?>" readonly/>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <div class="form-toolbar">
                            <a class="form-button edit-button" href="/admin/article-block/edit/<?php echo htmlspecialchars( $article_block->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/article-block/remove/<?php echo htmlspecialchars( $article_block->Id ); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
