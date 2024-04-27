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
                <?php if ( HasSessionMinimumUserRole( 'author' ) ) { ?>
                    <a class="page-menu-button" href="/admin/text">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Texts' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'author' ) ) { ?>
                    <a class="page-menu-button" href="/admin/language">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Languages' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'author' ) ) { ?>
                    <a class="page-menu-button" href="/admin/page-type">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Page types' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                    <a class="page-menu-button" href="/admin/page/manage">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Page manager' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/page">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Pages' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'author' ) ) { ?>
                    <a class="page-menu-button" href="/admin/block-category">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Block categories' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'author' ) ) { ?>
                    <a class="page-menu-button" href="/admin/block-type">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Block types' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'author' ) ) { ?>
                    <a class="page-menu-button" href="/admin/block-content">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Block contents' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'contributor' ) ) { ?>
                    <a class="page-menu-button" href="/admin/block/manage">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Block manager' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/block">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Blocks' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'author' ) ) { ?>
                    <a class="page-menu-button" href="/admin/contact">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Contacts' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
                    <a class="page-menu-button" href="/admin/connection">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Connections' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
                    <a class="page-menu-button" href="/admin/user">
                        <?php echo htmlspecialchars( GetTextBySlug( 'Users' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
                    <a class="page-menu-button" href="/admin/server/backup">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Backup' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
                    <a class="page-menu-button" href="/admin/server/sitemap">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Sitemap' ) ); ?>
                    </a>
                <?php } ?>
                <?php if ( $this->Session->UserIsConnected ) { ?>
                    <a class="margin-left-auto page-menu-button" href="/admin/disconnect">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Logout' ) ); ?>
                    </a>
                <?php } ?>
            </div>
            <?php if ( $this->Title !== '' ) { ?>
                <div class="page-title">
                    <?php echo htmlspecialchars( GetTextBySlug( $this->Title ) ); ?>
                </div>
            <?php } ?>
            <div class="page-body">
