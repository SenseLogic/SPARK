<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-block-categories-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "BlockCategoryFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "BlockCategoryListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/block-category/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container block-category-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->BlockCategoryArray as  $block_category ) { ?>
                <div class="sortable-table-row filter-row filter-content">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block_category->Slug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block_category->Name ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/block-category/view/<?php echo htmlspecialchars( $block_category->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/block-category/edit/<?php echo htmlspecialchars( $block_category->Id ); ?>">
                            </a>
                        <?php } ?>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button remove-button" href="/admin/block-category/remove/<?php echo htmlspecialchars( $block_category->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->BlockCategoryArray as  $block_category ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container" data-is-row data-table-name="BLOCK_CATEGORY">
                        <div class="form-field-name" data-is-column-title data-column-name="Slug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Slug">
                            <input-component class="form-component" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $block_category->Slug ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Name">
                            <input-component class="form-component" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $block_category->Name ) ); ?>" is-readonly></input-component>
                        </div>
                    </div>
                    <div class="form-toolbar">
                        <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/block-category/edit/<?php echo htmlspecialchars( $block_category->Id ); ?>">
                            </a>
                        <?php } ?>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button remove-button" href="/admin/block-category/remove/<?php echo htmlspecialchars( $block_category->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
