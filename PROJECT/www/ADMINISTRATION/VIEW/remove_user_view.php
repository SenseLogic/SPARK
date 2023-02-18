<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-user-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/user/remove/<?php echo htmlspecialchars( $this->User->Id ); ?>" method="post">
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
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
