













































































































































































































<div id="header-menu" class="header-menu">
    <div class="header-menu-button-container">
        <div class="margin-right-auto! header-menu-button" data-view-route="home" onclick="ShowView( 'home' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-home-button' ); ?>
        </div>
        <div class="header-menu-button header-menu-desktop-button" data-view-route="articles" onclick="ShowView( 'articles' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-articles-button' ); ?>
        </div>
        <div class="header-menu-button header-menu-desktop-button" data-view-route="privacy-policy" onclick="ShowView( 'privacy-policy' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-privacy-policy-button' ); ?>
        </div>
        <div class="header-menu-button header-menu-desktop-button" data-view-route="legal-notice" onclick="ShowView( 'legal-notice' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-legal-notice-button' ); ?>
        </div>
        <div class="margin-right-auto! header-menu-button header-menu-desktop-button" data-view-route="contact" onclick="ShowView( 'contact' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-contact-button' ); ?>
        </div>
        <div class="header-menu-button <?php echo ( $this->LanguageCode === 'en' ) ? 'is-used' : ''; ?>" onclick="SetLanguageCode( 'en' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-english-button' ); ?>
        </div>
        <div class="header-menu-button <?php echo ( $this->LanguageCode === 'fr' ) ? 'is-used' : ''; ?>" onclick="SetLanguageCode( 'fr' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-french-button' ); ?>
        </div>
        <div class="header-menu-icon-button header-menu-open-button" onclick="OpenHeaderMenu()">
            <div class="header-menu-button-icon header-menu-open-button-icon">
            </div>
        </div>
    </div>
    <div class="header-menu-modal-container" onclick="CloseHeaderMenu()">
        <div class="header-menu-modal">
            <div class="header-menu-modal-content">
                <div class="header-menu-modal-button" data-view-route="home" onclick="ShowView( 'home' )">
                    <?php echo $this->GetProcessedTextBySlug( 'header-menu-home-button' ); ?>
                </div>
                <div class="header-menu-modal-button" data-view-route="articles" onclick="ShowView( 'articles' )">
                    <?php echo $this->GetProcessedTextBySlug( 'header-menu-articles-button' ); ?>
                </div>
                <div class="header-menu-modal-button" data-view-route="privacy-policy" onclick="ShowView( 'privacy-policy' )">
                    <?php echo $this->GetProcessedTextBySlug( 'header-menu-privacy-policy-button' ); ?>
                </div>
                <div class="header-menu-modal-button" data-view-route="legal-notice" onclick="ShowView( 'legal-notice' )">
                    <?php echo $this->GetProcessedTextBySlug( 'header-menu-legal-notice-button' ); ?>
                </div>
                <div class="header-menu-modal-button" data-view-route="contact" onclick="ShowView( 'contact' )">
                    <?php echo $this->GetProcessedTextBySlug( 'header-menu-contact-button' ); ?>
                </div>
            </div>
            <div class="header-menu-icon-button header-menu-close-button" onclick="CloseHeaderMenu()">
                <div class="header-menu-button-icon header-menu-close-button-icon">
                </div>
            </div>
        </div>
    </div>
</div>
