<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-page-types-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "PageTypeFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "PageTypeListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/page-type/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container page-type-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetText( 'Title' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( $this->GetText( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->PageTypeArray as  $page_type ) { ?>
                <div class="sortable-table-row filter-row">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $page_type->Slug ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <div>
                            <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                <div class="form-translation">
                                    <?php echo htmlspecialchars( GetValueText( GetTranslatedText( $page_type->Title, $language_code ) ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/page-type/view/<?php echo htmlspecialchars( $page_type->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/page-type/edit/<?php echo htmlspecialchars( $page_type->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/page-type/remove/<?php echo htmlspecialchars( $page_type->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->PageTypeArray as  $page_type ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetText( 'Slug' ) ); ?> :
                        </div>
                        <div>
                                <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( GetValueText( $page_type->Slug ) ); ?>" readonly/>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( $this->GetText( 'Title' ) ); ?> :
                        </div>
                        <div>
                            <div>
                                <?php foreach ( LanguageCodeArray as  $language_code ) { ?>
                                    <input class="form-translation form-input" name="Title" type="text" value="<?php echo htmlspecialchars( GetValueText( GetTranslatedText( $page_type->Title, $language_code ) ) ); ?>" readonly/>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <div class="form-toolbar">
                            <a class="form-button edit-button" href="/admin/page-type/edit/<?php echo htmlspecialchars( $page_type->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/page-type/remove/<?php echo htmlspecialchars( $page_type->Id ); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
