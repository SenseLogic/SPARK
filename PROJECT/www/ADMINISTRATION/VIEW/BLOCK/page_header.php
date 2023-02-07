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
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/language">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Language' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/page-type">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page type' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/page">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/block-category">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block category' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/block-type">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block type' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/block-content">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block content' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/block">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block' ) ); ?>
                    </a>
                    <a class="page-menu-button" href="/admin/contact">
                        <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Contact' ) ); ?>
                    </a>
                    <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
                        <a class="page-menu-button" href="/admin/user">
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
