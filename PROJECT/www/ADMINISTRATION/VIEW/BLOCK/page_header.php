<!doctype html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/' . 'page_head.php'; ?>
    </head>
    <body>
        <?php require __DIR__ . '/' . 'page_body.php'; ?>
        <div class="extended-container page-container">
            <div class="page-menu">
                <div class="page-menu-content">
                    <div class="page-menu-item">
                        <a href="/admin/text">
                            <span class="form-button form-button-large text-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Text' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/block-type">
                            <span class="form-button form-button-large block-type-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Block type' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/block">
                            <span class="form-button form-button-large block-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Block' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/block-sub-block">
                            <span class="form-button form-button-large block-sub-block-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Block sub block' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/page-type">
                            <span class="form-button form-button-large page-type-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Page type' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/page">
                            <span class="form-button form-button-large page-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Page' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/page-content-block">
                            <span class="form-button form-button-large page-content-block-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Page content block' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/page-sub-page">
                            <span class="form-button form-button-large page-sub-page-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Page sub page' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/contact">
                            <span class="form-button form-button-large contact-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Contact' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
                        <div class="page-menu-item">
                            <a href="/admin/user">
                                <span class="form-button form-button-large user-button">
                                </span>
                                <span class="form-button-tooltip">
                                    <?php echo htmlspecialchars( $this->GetText( 'User' ) ); ?>
                                </span>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="page-menu-item">
                        <a href="/admin/disconnect">
                            <span class="form-button form-button-large disconnect-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetText( 'Disconnect' ) ); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="page-title">
                <div class="page-title-content">
                    <?php echo htmlspecialchars( $this->GetText( $this->Title ) ); ?>
                </div>
            </div>
            <div class="page-body">
                <div class="page-body-content">
