<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<style>
    .page-menu
    {
        display: none;
    }

    .page-section
    {
        padding: 1rem 2rem;
    }

    form
    {
        transform: translateY( -2.5rem );
    }
</style>
<form class="margin-top-auto margin-bottom-auto flex-direction-column form-centered" name="ConnectUser" action="/admin" method="post">
    <div class="logo-image">
    </div>
    <div class="margin-top-2rem width-30rem page-section">
        <div class="form-field-name">
            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( "Username" ) ); ?>
        </div>
        <input class="margin-top-50pem form-input" name="Pseudonym" type="text"/>
        <div class="margin-top-1rem form-field-name">
            <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( "Password" ) ); ?>
        </div>
        <input class="margin-top-50pem form-input" name="Password" type="password"/>
        <div class="margin-top-2rem form-extended form-centered">
            <button class="form-text-button" type="submit">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( "Sign in" ) ); ?>
            </button>
        </div>
    </div>
</form>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
