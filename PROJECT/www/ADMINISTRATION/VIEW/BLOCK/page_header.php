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
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/language">
                            <span class="form-button form-button-large language-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Language' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/page-type">
                            <span class="form-button form-button-large page-type-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page type' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/page">
                            <span class="form-button form-button-large page-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Page' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/block-category">
                            <span class="form-button form-button-large block-category-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block category' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/block-type">
                            <span class="form-button form-button-large block-type-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Block type' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/text-block">
                            <span class="form-button form-button-large text-block-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text block' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/image-block">
                            <span class="form-button form-button-large image-block-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Image block' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/text-and-image-block">
                            <span class="form-button form-button-large text-and-image-block-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Text and image block' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/contact">
                            <span class="form-button form-button-large contact-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Contact' ) ); ?>
                            </span>
                        </a>
                    </div>
                    <?php if ( HasSessionMinimumUserRole( 'administrator' ) ) { ?>
                        <div class="page-menu-item">
                            <a href="/admin/user">
                                <span class="form-button form-button-large user-button">
                                </span>
                                <span class="form-button-tooltip">
                                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'User' ) ); ?>
                                </span>
                            </a>
                        </div>
                    <?php } ?>
                    <div class="page-menu-item">
                        <a href="/admin/disconnect">
                            <span class="form-button form-button-large disconnect-button">
                            </span>
                            <span class="form-button-tooltip">
                                <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( 'Disconnect' ) ); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="page-title">
                <div class="page-title-content">
                    <?php echo htmlspecialchars( $this->GetProcessedTextBySlug( $this->Title ) ); ?>
                </div>
            </div>
            <div class="page-body">
                <div class="page-body-content">
