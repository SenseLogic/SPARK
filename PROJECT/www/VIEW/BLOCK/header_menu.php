






















































































































































<div id="header-menu" class="header-menu">
    <div class="large-padded-container header-menu-button-container">
        <div class="margin-right-auto! scaled-button header-menu-button" data-view-name="home" onclick="ShowView( 'home' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-home-button' ); ?>
        </div>
        <div class="scaled-button header-menu-button header-menu-desktop-button" data-view-name="articles" onclick="ShowView( 'articles' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-articles-button' ); ?>
        </div>
        <div class="scaled-button header-menu-button header-menu-desktop-button" data-view-name="cookie-policy" onclick="ShowView( 'cookie-policy' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-cookie-policy-button' ); ?>
        </div>
        <div class="scaled-button header-menu-button header-menu-desktop-button" data-view-name="legal-notice" onclick="ShowView( 'legal-notice' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-legal-notice-button' ); ?>
        </div>
        <div class="margin-right-auto! scaled-button header-menu-button header-menu-desktop-button" data-view-name="contact" onclick="ShowView( 'contact' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-contact-button' ); ?>
        </div>
        <div class="scaled-button header-menu-button <?php echo ( $this->LanguageCode === 'en' ) ? 'is-used' : ''; ?>" onclick="SetLanguageCode( 'en' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-english-button' ); ?>
        </div>
        <div class="scaled-button header-menu-button <?php echo ( $this->LanguageCode === 'fr' ) ? 'is-used' : ''; ?>" onclick="SetLanguageCode( 'fr' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-french-button' ); ?>
        </div>
        <div class="scaled-button header-menu-icon-button header-menu-open-button" onclick="OpenHeaderMenu()">
        </div>
    </div>
    <div class="header-menu-mobile-button-container">
        <div class="scaled-button header-menu-mobile-button" data-view-name="home" onclick="CloseHeaderMenu(); ShowView( 'home' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-home-button' ); ?>
        </div>
        <div class="scaled-button header-menu-mobile-button" data-view-name="articles" onclick="CloseHeaderMenu(); ShowView( 'articles' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-articles-button' ); ?>
        </div>
        <div class="scaled-button header-menu-mobile-button" data-view-name="cookie-policy" onclick="CloseHeaderMenu(); ShowView( 'cookie-policy' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-cookie-policy-button' ); ?>
        </div>
        <div class="scaled-button header-menu-mobile-button" data-view-name="legal-notice" onclick="CloseHeaderMenu(); ShowView( 'legal-notice' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-legal-notice-button' ); ?>
        </div>
        <div class="scaled-button header-menu-mobile-button" data-view-name="contact" onclick="CloseHeaderMenu(); ShowView( 'contact' )">
            <?php echo $this->GetProcessedTextBySlug( 'header-menu-contact-button' ); ?>
        </div>
        <div class="scaled-button header-menu-icon-button header-menu-close-button" onclick="CloseHeaderMenu()">
        </div>
    </div>
</div>
