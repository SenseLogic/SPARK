<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div class="form-centered">
    <div class="margin-top-2rem logo-image">
    </div>
</div>
<div class="form-centered">
    <div class="margin-top-2rem">
        <div class="tree-container">
            <a class="tree-button" href="/admin/text">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Texts' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/language">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Languages' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/page-type">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page types' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/page/manage">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page manager' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/page">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Pages' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block-category">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block categories' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block-type">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block types' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block-content">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block contents' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block/manage">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block manager' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Blocks' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/contact">
                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Contacts' ) ); ?>
            </a>
        </div>
        <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
            <div class="tree-container">
                <a class="tree-button" href="/admin/user">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Users' ) ); ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
