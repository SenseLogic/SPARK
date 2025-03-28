<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-user-view">
    <div class="page-section form-section">
        <div class="form-container" data-is-row data-table-name="USER">
            <div class="form-field-name" data-is-column-title data-column-name="Email">
                <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Email">
                <input-component class="form-component" result-name="Email" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Email ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Pseudonym">
                <?php echo htmlspecialchars( GetTextBySlug( 'Pseudonym' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Pseudonym">
                <input-component class="form-component" result-name="Pseudonym" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Pseudonym ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Password">
                <?php echo htmlspecialchars( GetTextBySlug( 'Password' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Password">
                <input-component class="form-component" result-name="Password" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Password ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Role">
                <?php echo htmlspecialchars( GetTextBySlug( 'Role' ) ); ?> :
            </div>
            <div class="form-field-value" data-is-column-value data-column-name="Role">
                <dropdown-component class="form-component" result-name="Role" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Role ) ); ?>" is-readonly  option-values="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'guest', 'contributor', 'author', 'publisher', 'administrator' ] ) ) ); ?>" option-names="<?php echo htmlspecialchars( GetValueText( GetJsonText( [ 'Guest', 'Contributor', 'Author', 'Editor', 'Administrator' ] ) ) ); ?>"></dropdown-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( GetParentRoute( null, '/admin/user' ) ); ?>">
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
