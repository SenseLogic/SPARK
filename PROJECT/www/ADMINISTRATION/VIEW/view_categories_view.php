<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container category-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                Name
            </div>
            <div class="form-column-name sortable-grid-column">
                Slug
            </div>
            <div class="form-column-name sortable-grid-column">
                Text
            </div>
            <div class="form-column-name sortable-grid-column">
                Image
            </div>
            <div class="form-column-name sortable-grid-column">
                Number
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->CategoryArray as  $category ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $category->Name ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $category->Slug ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $category->Text ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $category->Image ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $category->Number ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/category/view/<?php echo htmlspecialchars( $category->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/category/edit/<?php echo htmlspecialchars( $category->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/category/remove/<?php echo htmlspecialchars( $category->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/category/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
