

<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- VARIABLES

    var
        ViewName,
        SectionName;

    // -- FUNCTIONS

    function InitializeView(
        )
    {
        EmitEvent( "initialize-view" );
    }

    // ~~

    function ShowView(
        route
        )
    {
        if ( route !== undefined )
        {
            SetRoute( "/<?php echo $this->LanguageCode; ?>/" + route );
            TrackRoute();
        }

        ViewName = GetRoute( "/<?php echo $this->LanguageCode; ?>/", "/" );
        SectionName = GetHash();

        if ( ViewName === "" )
        {
            ViewName = "home";
        }

        EmitEvent( "update-view" );
    }

    // ~~

    function SetLanguageCode(
        language_code
        )
    {
        var
            route;

        route = GetRoute( "/<?php echo $this->LanguageCode; ?>/", "/" );

        if ( route === "" )
        {
            SetUrl( "/" + language_code + "/" );
        }
        else
        {
            SetUrl( "/" + language_code + "/" + route + "/" );
        }
    }
</script>
<div>
    <?php require __DIR__ . '/' . 'BLOCK/header_menu.php'; ?>
    <?php require __DIR__ . '/' . 'show_home_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_article_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_contact_view.php'; ?>
    <?php require __DIR__ . '/' . 'show_legal_notice_view.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/footer_menu.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/scroll_top_button.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/cookie_consent_banner.php'; ?>
</div>
<script>
    // -- STATEMENTS

    AddEventListener(
        "update-view",
        function (
            )
        {
            GetElements( ".view" ).Iterate(
                function (
                    element
                    )
                {
                    element.ToggleClass( "display-none!", element.dataset.viewName !== ViewName );
                }
                );

            if ( SectionName === "" )
            {
                SetScrollPosition();
            }
            else
            {
                SetScrollPosition( GetElementById( ViewName + "/" + SectionName ) );
            }
        }
        );

    InitializeView();
    ShowView();
    HandleResizeEvent( ShowView );
    HandleRouteEvent( ShowView );
</script>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
