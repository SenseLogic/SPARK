<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container department-table sortable-grid">
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
                Number
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->DepartmentArray as  $department ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $department->Slug ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $department->Name ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $department->Text ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $department->Image ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $department->Number ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/department/view/<?php echo htmlspecialchars( $department->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/department/edit/<?php echo htmlspecialchars( $department->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/department/remove/<?php echo htmlspecialchars( $department->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/department/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
