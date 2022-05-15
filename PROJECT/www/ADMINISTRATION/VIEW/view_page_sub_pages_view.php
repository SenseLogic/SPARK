<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-page-sub-pages-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "PageSubPageFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "PageSubPageListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/page-sub-page/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container page-sub-page-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub Page Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->PageSubPageArray as  $page_sub_page ) { ?>
                <div class="sortable-table-row filter-row">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page_sub_page->PageSlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page_sub_page->SubPageSlug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page_sub_page->Number ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/page-sub-page/view/<?php echo htmlspecialchars( $page_sub_page->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/page-sub-page/edit/<?php echo htmlspecialchars( $page_sub_page->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/page-sub-page/remove/<?php echo htmlspecialchars( $page_sub_page->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->PageSubPageArray as  $page_sub_page ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page Slug' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="PageSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $page_sub_page->PageSlug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sub Page Slug' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="SubPageSlug" type="text" value="<?php echo htmlspecialchars( GetValueText( $page_sub_page->SubPageSlug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Number' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="Number" type="text" value="<?php echo htmlspecialchars( GetValueText( $page_sub_page->Number ) ); ?>" readonly/>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <div class="form-toolbar">
                            <a class="form-button edit-button" href="/admin/page-sub-page/edit/<?php echo htmlspecialchars( $page_sub_page->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/page-sub-page/remove/<?php echo htmlspecialchars( $page_sub_page->Id ); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
