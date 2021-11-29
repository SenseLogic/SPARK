<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-articles-view">
    <div class="page-section form-section">
        <div class="form-container table-container article-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Name' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Text' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Image Path' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Video Path' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Next Article Id' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Priority' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Is Active' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->ArticleArray as  $article ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->Slug ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <div>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <div class="form-translation">
                                <?php echo htmlspecialchars( GetValueText( GetTranslatedText( $article->Name, $language_code ) ) ); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="sortable-grid-cell">
                    <div>
                        <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                            <div class="form-translation">
                                <?php echo htmlspecialchars( GetTranslatedText( $article->Text, $language_code ) ); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->ImagePath ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->VideoPath ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->NextArticleId ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->Priority ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $article->IsActive ) ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/article/view/<?php echo htmlspecialchars( $article->Id ); ?>">
                    </a>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <a class="form-button edit-button" href="/admin/article/edit/<?php echo htmlspecialchars( $article->Id ); ?>">
                        </a>
                        <a class="form-button remove-button" href="/admin/article/remove/<?php echo htmlspecialchars( $article->Id ); ?>">
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <div class="form-extended form-centered sortable-grid-footer">
                    <a class="form-button form-button-large add-button" href="/admin/article/add">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
