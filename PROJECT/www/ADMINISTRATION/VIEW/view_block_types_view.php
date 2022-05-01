<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-block-types-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "BlockTypeFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "BlockTypeListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/block-type/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container block-type-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetText( 'Name' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetText( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->BlockTypeArray as  $block_type ) { ?>
                <div class="sortable-table-row filter-row">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $block_type->Slug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetValueText( GetTranslatedText( $block_type->Name, $language_code ) ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/block-type/view/<?php echo htmlspecialchars( $block_type->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/block-type/edit/<?php echo htmlspecialchars( $block_type->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/block-type/remove/<?php echo htmlspecialchars( $block_type->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->BlockTypeArray as  $block_type ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $block_type->Slug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetText( 'Name' ) ); ?> :
                        </div>
                        <div>
                            <div>
                                <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                    <input class="form-translation form-input" name="Name" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $block_type->Name, $language_code ) ) ); ?>" readonly/>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <div class="form-toolbar">
                            <a class="form-button edit-button" href="/admin/block-type/edit/<?php echo htmlspecialchars( $block_type->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/block-type/remove/<?php echo htmlspecialchars( $block_type->Id ); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
