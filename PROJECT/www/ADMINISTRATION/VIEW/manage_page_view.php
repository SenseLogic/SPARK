<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="manage-page-view">
    <div class="page-section form-section">
        <?php
             $page = $this->Page;
            require __DIR__ . '/' . 'BLOCK/PREVIEW/page.php';
        ?>
        <div class="form-toolbar">
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button edit-button" href="/admin/page/edit/<?php echo htmlspecialchars( $this->Page->Id ); ?>">
                </a>
                <a class="form-button remove-button" href="/admin/page/remove/<?php echo htmlspecialchars( $this->Page->Id ); ?>">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="form-title">
        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Blocks' ) ); ?> :
    </div>
    <div class="margin-top-1rem margin-bottom-2rem card-list">
        <?php  $added_block_number = 1; ?>
        <?php foreach ( $this->Page->SortedBlockArray as  $block_index =>  $block ) { ?>
            <?php $added_block_number = GetAddedElementNumber( $this->Page->BlockArray, $block_index ); ?>
            <div class="card-container filter-row">
                <div class="card">
                    <?php
                        require __DIR__ . '/' . 'BLOCK/PREVIEW/block.php';
                    ?>
                    <div class="form-toolbar">
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button manage-button" href="/admin/block/manage/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                            <a class="form-button edit-button" href="/admin/block/edit/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/block/remove/<?php echo htmlspecialchars( $block->Id ); ?>">
                            </a>
                            <a class="form-button add-button" href="/admin/block/add?PageId=<?php echo $this->Page->Id; ?>&Number=<?php echo $added_block_number; ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="form-extended form-centered margin-top-1rem margin-bottom-1rem">
        <a class="form-button form-button-large add-button" href="/admin/block/add?PageId=<?php echo $this->Page->Id; ?>&Number=<?php echo $added_block_number; ?>">
        </a>
    </div>
    <div>
        <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
        </a>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
