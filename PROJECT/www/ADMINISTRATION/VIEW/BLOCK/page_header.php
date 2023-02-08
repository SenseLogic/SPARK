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
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Home' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/text">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Texts' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/language">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Languages' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/page-type">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page types' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/page/manage">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page manager' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/page">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Pages' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block-category">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block categories' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block-type">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block types' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block-content">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block contents' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block/manage">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block manager' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/block">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Blocks' ) ); ?>
                </a>
                <a class="page-menu-button" href="/admin/contact">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Contacts' ) ); ?>
                </a>
                <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
                    <a class="page-menu-button" href="/admin/user">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Users' ) ); ?>
                    </a>
                <?php } ?>
                <a class="margin-left-auto page-menu-button" href="/admin/disconnect">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Logout' ) ); ?>
                </a>
            </div>
            <?php if ( $this->Title !== '' ) { ?>
                <div class="page-title">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $this->Title ) ); ?>
                </div>
            <?php } ?>
            <div class="page-body">
