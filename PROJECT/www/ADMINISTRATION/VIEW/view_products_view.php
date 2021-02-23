<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container product-table sortable-grid">
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
                Department Slug
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->ProductArray as  $product ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $product->Slug ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $product->Name ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $product->Text ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $product->Image ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $product->Video ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $product->DepartmentSlug ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/product/view/<?php echo htmlspecialchars( $product->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/product/edit/<?php echo htmlspecialchars( $product->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/product/remove/<?php echo htmlspecialchars( $product->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/product/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
