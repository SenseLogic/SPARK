<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>

<div id="view-user-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name" data-is-column-title data-column-name="Pseudonym">
                <?php echo htmlspecialchars( GetTextBySlug( 'Pseudonym' ) ); ?> :
            </div>
            <div>
                <input-component data-is-column-value data-column-name="Pseudonym" result-class="form-input" result-name="Pseudonym" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Pseudonym ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Password">
                <?php echo htmlspecialchars( GetTextBySlug( 'Password' ) ); ?> :
            </div>
            <div>
                <input-component data-is-column-value data-column-name="Password" result-class="form-input" result-name="Password" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Password ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Role">
                <?php echo htmlspecialchars( GetTextBySlug( 'Role' ) ); ?> :
            </div>
            <div>
                <input-component data-is-column-value data-column-name="Role" result-class="form-input" result-name="Role" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Role ) ); ?>" is-readonly></input-component>
            </div>
            <div class="form-field-name" data-is-column-title data-column-name="Email">
                <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
            </div>
            <div>
                <input-component data-is-column-value data-column-name="Email" result-class="form-input" result-name="Email" result-value="<?php echo htmlspecialchars( GetValueText( $this->User->Email ) ); ?>" is-readonly></input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
