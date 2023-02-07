<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div class="form-centered">
    <div class="margin-top-2rem logo-image">
    </div>
</div>
<div class="form-centered">
    <div class="margin-top-2rem">
        <div class="tree-container">
            <a class="tree-button" href="/admin/text">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/language">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Language' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/page-type">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page type' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/page">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block-category">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block category' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block-type">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block type' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block-content">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block content' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/contact">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Contact' ) ); ?>
            </a>
        </div>
        <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
            <div class="tree-container">
                <a class="tree-button" href="/admin/user">
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
