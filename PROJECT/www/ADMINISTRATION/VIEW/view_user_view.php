<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="view-user-view">
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Pseudonym' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Pseudonym" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->User->Pseudonym ) ); ?>" readonly_></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Password' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Password" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->User->Password ) ); ?>" readonly_></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Role' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Role" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->User->Role ) ); ?>" readonly_></input-component>
            </div>
            <div class="form-field-name">
                <?php echo htmlspecialchars( GetTextBySlug( 'Email' ) ); ?> :
            </div>
            <div>
                <input-component class_="form-input" name_="Email" type_="text" value_="<?php echo htmlspecialchars( GetValueText( $this->User->Email ) ); ?>" readonly_></input-component>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" onclick="SetPriorUrl()">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
