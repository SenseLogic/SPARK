<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container slide-table sortable-grid">
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
                Has Video
            </div>
            <div class="form-column-name sortable-grid-column">
                Number
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->SlideArray as  $slide ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $slide->Text ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $slide->Image ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $slide->Video ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $slide->HasVideo ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $slide->Number ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/slide/view/<?php echo htmlspecialchars( $slide->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/slide/edit/<?php echo htmlspecialchars( $slide->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/slide/remove/<?php echo htmlspecialchars( $slide->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/slide/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
