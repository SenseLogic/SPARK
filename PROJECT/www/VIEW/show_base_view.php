

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

        if ( ViewName === "" )
        {
            ViewName = "home";
        }

        SectionName = GetHash();
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
    <?php foreach ( $this->PageBySlugMap as  $page_slug =>  $page ) { ?>
        <div class="extended-container view is-hidden" data-view-name="<?php echo $page->Route; ?>">
            <?php require __DIR__ . '/' . 'PAGE/' . $page->TypeSlug . '_page.php'; ?>
        </div>
    <?php } ?>
    <?php require __DIR__ . '/' . 'BLOCK/scroll_top_button.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/cookie_consent_banner.php'; ?>
</div>
<script src="/static/script/header_menu.js?v=<?php echo VersionTimestamp; ?>"></script>
<script>
    // -- STATEMENTS

    HandleScrollEvent( 1, "body", "is-scrolled" );

    GetElements( ".appearing-block" )
        .AddIntersectionObserver( true, 0.25, "is-visible" )
        .AddIntersectionObserver( false, 0.0, "", "is-visible" );

    AddEventListener(
        "update-view",
        function (
            )
        {
            GetElements( ".view" ).Iterate(
                function (
                    view_element
                    )
                {
                    view_element.Fade( view_element.dataset.viewName === ViewName );
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
