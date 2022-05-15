<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-block-sub-blocks-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "BlockSubBlockFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "BlockSubBlockListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/block-sub-block/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container block-sub-block-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub Block Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->BlockSubBlockArray as  $block_sub_block ) { ?>
                <div class="sortable-table-row filter-row">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block_sub_block->BlockSlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block_sub_block->SubBlockSlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block_sub_block->Number ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/block-sub-block/view/<?php echo htmlspecialchars( $block_sub_block->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/block-sub-block/edit/<?php echo htmlspecialchars( $block_sub_block->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/block-sub-block/remove/<?php echo htmlspecialchars( $block_sub_block->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->BlockSubBlockArray as  $block_sub_block ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block Slug' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="BlockSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $block_sub_block->BlockSlug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub Block Slug' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="SubBlockSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $block_sub_block->SubBlockSlug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $block_sub_block->Number ) ); ?>" readonly/>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <div class="form-toolbar">
                            <a class="form-button edit-button" href="/admin/block-sub-block/edit/<?php echo htmlspecialchars( $block_sub_block->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/block-sub-block/remove/<?php echo htmlspecialchars( $block_sub_block->Id ); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
