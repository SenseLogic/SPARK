<!doctype html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/' . 'page_head.php'; ?>
    </head>
    <body>
        <?php require __DIR__ . '/' . 'page_body.php'; ?>
        <div class="extended-container page-container">
            <div class="page-menu">
                <a class="margin-right-auto page-menu-button" href="/admin">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Home' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/text">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Texts' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/language">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Languages' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/page-type">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Page types' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/page/manage">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Page manager' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/page">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Pages' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block-category">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Block categories' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block-type">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Block types' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block-content">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Block contents' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block/manage">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Block manager' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Blocks' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/contact">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Contacts' ) ); ?>
                </a>
                <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
                    <a class="page-menu-button" href="/admin/user">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Users' ) ); ?>
                    </a>
                <?php } ?>
                <a class="margin-left-auto page-menu-button" href="/admin/disconnect">
                    <?php echo htmlspecialchars( GetTextBySlug( 'Logout' ) ); ?>
                </a>
            </div>
            <?php if ( $this->Title !== '' ) { ?>
                <div class="page-title">
                    <?php echo htmlspecialchars( GetTextBySlug( $this->Title ) ); ?>
                </div>
            <?php } ?>
            <div class="page-body">
