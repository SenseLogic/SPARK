<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<div class="form-centered">
    <div class="margin-top-2rem logo-image">
    </div>
</div>
<div class="form-centered">
    <div class="margin-top-2rem">
        <div class="tree-container">
            <a class="tree-button" href="/admin/text">
                <?php echo htmlspecialchars( GetTextBySlug( 'Texts' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/language">
                <?php echo htmlspecialchars( GetTextBySlug( 'Languages' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/page-type">
                <?php echo htmlspecialchars( GetTextBySlug( 'Page types' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/page/manage">
                <?php echo htmlspecialchars( GetTextBySlug( 'Page manager' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/page">
                <?php echo htmlspecialchars( GetTextBySlug( 'Pages' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block-category">
                <?php echo htmlspecialchars( GetTextBySlug( 'Block categories' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block-type">
                <?php echo htmlspecialchars( GetTextBySlug( 'Block types' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block-content">
                <?php echo htmlspecialchars( GetTextBySlug( 'Block contents' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block/manage">
                <?php echo htmlspecialchars( GetTextBySlug( 'Block manager' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/block">
                <?php echo htmlspecialchars( GetTextBySlug( 'Blocks' ) ); ?>
            </a>
        </div>
        <div class="tree-container">
            <a class="tree-button" href="/admin/contact">
                <?php echo htmlspecialchars( GetTextBySlug( 'Contacts' ) ); ?>
            </a>
        </div>
        <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
            <div class="tree-container">
                <a class="tree-button" href="/admin/user">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Users' ) ); ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
