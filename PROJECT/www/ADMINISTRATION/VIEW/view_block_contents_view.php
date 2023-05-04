<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-block-contents-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "BlockContentFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "BlockContentListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'publisher' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/block-content/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container block-content-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->BlockContentArray as  $block_content ) { ?>
                <div class="sortable-table-row filter-row filter-content">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block_content->Slug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block_content->Name ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/block-content/view/<?php echo htmlspecialchars( $block_content->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'author' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/block-content/edit/<?php echo htmlspecialchars( $block_content->Id ); ?>">
                            </a>
                        <?php } ?>
                        <?php if ( HasSessionMinimumUserRole( 'publisher' ) ) { ?>
                            <a class="form-button remove-button" href="/admin/block-content/remove/<?php echo htmlspecialchars( $block_content->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->BlockContentArray as  $block_content ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container" data-is-row data-table-name="BLOCK_CONTENT">
                        <div class="form-field-name" data-is-column-title data-column-name="Slug">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Slug' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Slug">
                            <input-component class="form-component" result-name="Slug" result-value="<?php echo htmlspecialchars( GetValueText( $block_content->Slug ) ); ?>" is-readonly></input-component>
                        </div>
                        <div class="form-field-name" data-is-column-title data-column-name="Name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                        </div>
                        <div class="form-field-value" data-is-column-value data-column-name="Name">
                            <input-component class="form-component" result-name="Name" result-value="<?php echo htmlspecialchars( GetValueText( $block_content->Name ) ); ?>" is-readonly></input-component>
                        </div>
                    </div>
                    <div class="form-toolbar">
                        <?php if ( HasSessionMinimumUserRole( 'author' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/block-content/edit/<?php echo htmlspecialchars( $block_content->Id ); ?>">
                            </a>
                        <?php } ?>
                        <?php if ( HasSessionMinimumUserRole( 'publisher' ) ) { ?>
                            <a class="form-button remove-button" href="/admin/block-content/remove/<?php echo htmlspecialchars( $block_content->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
