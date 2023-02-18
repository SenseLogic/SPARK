<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-contacts-view">
    <div class="form-limited form-centered margin-bottom-1rem">
        <div class="tool-container">
            <?php  $filter_name = "ContactFilter"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/filter.php'; ?>
            <?php  $list_mode_name = "ContactListMode"; ?>
            <?php require __DIR__ . '/' . 'BLOCK/list_mode.php'; ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <a class="form-button form-button-large add-button" href="/admin/contact/add">
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="cell-list page-section form-section is-hidden">
        <div class="form-container table-container contact-table sortable-table">
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Company' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Phone' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Subject' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Message' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?>
            </div>
            <div class="form-column-name sortable-table-column">
                <?php echo htmlspecialchars( GetTextBySlug( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->ContactArray as  $contact ) { ?>
                <div class="sortable-table-row filter-row filter-content">
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $contact->Name ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $contact->Company ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $contact->Email ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $contact->Phone ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $contact->Subject ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $contact->Message ) ); ?>
                    </div>
                    <div class="sortable-table-cell filter-cell">
                        <?php echo htmlspecialchars( GetValueText( $contact->DateTime ) ); ?>
                    </div>
                    <div class="form-centered sortable-table-cell">
                        <a class="form-button view-button" href="/admin/contact/view/<?php echo htmlspecialchars( $contact->Id ); ?>">
                        </a>
                        <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                            <a class="form-button edit-button" href="/admin/contact/edit/<?php echo htmlspecialchars( $contact->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/contact/remove/<?php echo htmlspecialchars( $contact->Id ); ?>">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-list is-hidden">
        <?php foreach ( $this->ContactArray as  $contact ) { ?>
            <div class="card-container filter-row">
                <div class="card">
                    <div class="form-container">
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Name' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Name" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $contact->Name ) ); ?>" readonly_></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Company' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Company" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $contact->Company ) ); ?>" readonly_></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Email" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $contact->Email ) ); ?>" readonly_></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Phone' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Phone" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $contact->Phone ) ); ?>" readonly_></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Subject' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="Subject" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $contact->Subject ) ); ?>" readonly_></input-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Message' ) ); ?> :
                        </div>
                        <div>
                            <textarea-component class_="form-textarea" name_="Message" readonly_><?php echo htmlspecialchars( $contact->Message ); ?></textarea-component>
                        </div>
                        <div class="form-field-name">
                            <?php echo htmlspecialchars( GetTextBySlug( 'Date Time' ) ); ?> :
                        </div>
                        <div>
                            <input-component class_="form-input" name_="DateTime" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $contact->DateTime ) ); ?>" readonly_></input-component>
                        </div>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <div class="form-toolbar">
                            <a class="form-button edit-button" href="/admin/contact/edit/<?php echo htmlspecialchars( $contact->Id ); ?>">
                            </a>
                            <a class="form-button remove-button" href="/admin/contact/remove/<?php echo htmlspecialchars( $contact->Id ); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
