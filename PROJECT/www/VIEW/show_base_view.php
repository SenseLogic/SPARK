<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- VARIABLES

    var
        OldViewName = "",
        ViewName,
        SectionName;

    // -- FUNCTIONS

    function InitializeView(
        )
    {
        EmitEvent( "initialize-view" );

        InitializeAutoplayVideos();
        InitializeAutohideVideos();
    }

    // ~~

    function ShowView(
        route
        )
    {
        CloseHeaderMenu();

        if ( route !== undefined
             && route.startsWith( "http" ) )
        {
            OpenUrl( route );
        }
        else if ( route !== undefined
                  && route.startsWith( "//" ) )
        {
            OpenUrl( route.slice( 1 ) );
        }
        else if ( route !== undefined
                  && route.startsWith( "/" ) )
        {
            SetUrl( route );
        }
        else
        {
            if ( route !== undefined )
            {
                SetRoute( "/<?php echo $this->LanguageCode; ?>/" + route.RemovePrefix( "/" ) );
            }

            TrackRoute();
            OldViewName = ViewName;
            ViewName = GetRoute( "/<?php echo $this->LanguageCode; ?>/", "/" );

            if ( ViewName === "" )
            {
                ViewName = "home";
            }

            SectionName = GetHash();
            EmitEvent( "update-view" );
        }
    }

    // ~~

    function ResizeView(
        )
    {
        if ( !IsMobileBrowser() )
        {
            EmitEvent( "update-view" );
            InitializeAutohideVideos();
        }
    }

    // ~~

    function FadeView(
        view_element
        )
    {
        view_element.Fade( view_element.dataset.viewName === ViewName );
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

    // ~~

    function UpdateView(
        )
    {
        var
            view_name_was_found,
            section_element,
            view_element;

        if ( ViewName !== OldViewName )
        {
            view_name_was_found = false;

            for ( view_element of GetElements( ".view" ) )
            {
                FadeView( view_element );

                if ( view_element.dataset.viewName === ViewName )
                {
                    view_name_was_found = true;
                }
            }

            if ( !view_name_was_found )
            {
                SetUrl( '/' );
            }
        }

        if ( SectionName === "" )
        {
            SetScrollPosition();
        }
        else
        {
            section_element = GetElement( SectionName );

            if ( section_element === null )
            {
                SetScrollPosition();
            }
            else
            {
                DelayCall(
                    function (
                        )
                    {
                        SetScrollPosition( section_element.GetTopPosition() - 48 * GetRemRatio() );
                    },
                    ( ViewName === OldViewName ) ? 0.2 : 0
                    );
            }
        }
    }
</script>
<div>
    <?php require __DIR__ . '/' . 'PAGE/loader_page.php'; ?>
    <?php foreach ( $this->PageByIdMap as  $page_id =>  $page ) { ?>
        <div class="extended-container view is-hidden" data-view-name="<?php echo $page->Route; ?>">
            <?php require __DIR__ . '/' . 'PAGE/' . str_replace( '-', '_', $page->TypeSlug ) . '_page.php'; ?>
        </div>
    <?php } ?>
    <?php require __DIR__ . '/' . 'BLOCK/scroll_top_button.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/cookie_consent.php'; ?>
</div>
<script src="/static/script/header_menu.js?v=<?php echo VersionTimestamp; ?>"></script>
<script>
    // -- STATEMENTS

    HandleScrollEvent( 1, "body", "is-scrolled" );

    GetElements( ".appearing-block" )
        .AddIntersectionObserver( true, 0.25, "is-visible" )
        .AddIntersectionObserver( false, 0.0, "", "is-visible" );

    AddEventListener( "update-view", UpdateView );

    InitializeView();
    ShowView();
    HandleResizeEvent( ResizeView );
    HandleRouteEvent( ShowView );
</script>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
