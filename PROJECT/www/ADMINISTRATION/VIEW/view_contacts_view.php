<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-contacts-view">
    <div class="page-section form-section">
        <div class="form-container table-container contact-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Name' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Company' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Email' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Phone' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Subject' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Message' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Date Time' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( GetText_( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->ContactArray as  $contact ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $contact->Name ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $contact->Company ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $contact->Email ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $contact->Phone ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $contact->Subject ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $contact->Message ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $contact->DateTime ) ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/contact/view/<?php echo htmlspecialchars( $contact->Id ); ?>">
                    </a>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <a class="form-button edit-button" href="/admin/contact/edit/<?php echo htmlspecialchars( $contact->Id ); ?>">
                        </a>
                        <a class="form-button remove-button" href="/admin/contact/remove/<?php echo htmlspecialchars( $contact->Id ); ?>">
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <div class="form-extended form-centered sortable-grid-footer">
                    <a class="form-button form-button-large add-button" href="/admin/contact/add">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
