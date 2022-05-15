<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div id="remove-user-view">
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/user/remove/<?php echo htmlspecialchars( $this->User->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Email' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Email" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->User->Email ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Pseudonym' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Pseudonym" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->User->Pseudonym ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Password' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Password" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->User->Password ) ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Role' ) ); ?> :
                </div>
                <div>
                    <input class="form-input" name="Role" type="text" value="<?php echo htmlspecialchars( GetValueText( $this->User->Role ) ); ?>" readonly/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->ListPage ); ?>">
                </a>
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
