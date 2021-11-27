<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-texts-view">
    <div class="page-section form-section">
        <div class="form-container table-container text-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Text' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->TextArray as  $text ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $text->Slug ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $text->Text ) ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/text/view/<?php echo htmlspecialchars( $text->Id ); ?>">
                    </a>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <a class="form-button edit-button" href="/admin/text/edit/<?php echo htmlspecialchars( $text->Id ); ?>">
                        </a>
                        <a class="form-button remove-button" href="/admin/text/remove/<?php echo htmlspecialchars( $text->Id ); ?>">
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <div class="form-extended form-centered sortable-grid-footer">
                    <a class="form-button form-button-large add-button" href="/admin/text/add">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
