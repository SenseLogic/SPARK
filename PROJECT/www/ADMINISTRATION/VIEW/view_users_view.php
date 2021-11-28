<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-users-view">
    <div class="page-section form-section">
        <div class="form-container table-container user-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Email' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Pseudonym' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Password' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Role' ) ); ?>
            </div>
            <div class="form-column-name sortable-grid-column">
                <?php echo htmlspecialchars( $this->GetText( 'Action' ) ); ?>
            </div>
            <?php foreach ( $this->UserArray as  $user ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $user->Email ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $user->Pseudonym ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $user->Password ) ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( GetValueText( $user->Role ) ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/user/view/<?php echo htmlspecialchars( $user->Id ); ?>">
                    </a>
                    <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                        <a class="form-button edit-button" href="/admin/user/edit/<?php echo htmlspecialchars( $user->Id ); ?>">
                        </a>
                        <a class="form-button remove-button" href="/admin/user/remove/<?php echo htmlspecialchars( $user->Id ); ?>">
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if ( HasSessionMinimumUserRole( 'editor' ) ) { ?>
                <div class="form-extended form-centered sortable-grid-footer">
                    <a class="form-button form-button-large add-button" href="/admin/user/add">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
