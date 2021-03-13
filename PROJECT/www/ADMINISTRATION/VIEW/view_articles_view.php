<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container article-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                Slug
            </div>
            <div class="form-column-name sortable-grid-column">
                Name
            </div>
            <div class="form-column-name sortable-grid-column">
                Text
            </div>
            <div class="form-column-name sortable-grid-column">
                Image
            </div>
            <div class="form-column-name sortable-grid-column">
                Video
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->ArticleArray as  $article ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->Slug ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->Name ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->Text ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->Image ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->Video ) ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/article/view/<?php echo htmlspecialchars( $article->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/article/edit/<?php echo htmlspecialchars( $article->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/article/remove/<?php echo htmlspecialchars( $article->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/article/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
