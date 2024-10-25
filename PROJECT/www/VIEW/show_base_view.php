<?php require __DIR__ . '/' . 'BLOCK/page_header.php'; ?>
<script>
    // -- VARIABLES

    var
        OldViewRoute = "",
        ViewRoute = "",
        SectionName = "",
        LanguageCode = "<?php echo $this->LanguageCode; ?>",
        ViewElement = null;

    // -- FUNCTIONS

    function GetViewElement(
        route
        )
    {
        for ( view_element of GetElements( ".view" ) )
        {
            if ( view_element.dataset.viewRoute === ViewRoute )
            {
                return view_element;
            }
        }

        return null;
    }

    // ~~

    function HydrateView(
        route
        )
    {
        var
            script_element,
            static_script_element,
            static_script_element_array,
            template_content_element,
            template_element,
            view_element;

        view_element = GetViewElement( route );

        if ( view_element !== null )
        {
            if ( !view_element.HasClass( "is-hydrated" ) )
            {
                template_element = view_element.firstElementChild;

                if ( template_element
                     && template_element.tagName.toLowerCase() === "template" )
                {
                    ViewElement = view_element;
                    template_content_element = document.importNode( template_element.content, true );
                    view_element.replaceChild( template_content_element, template_element );
                    static_script_element_array = template_content_element.querySelectorAll( "script" );

                    for ( static_script_element of static_script_element_array )
                    {
                        script_element = document.createElement( "script" );

                        if ( static_script_element.src )
                        {
                            script_element.src = static_script_element.src;
                        }
                        else
                        {
                            script_element.textContent = static_script_element.textContent;
                        }

                        view_element.appendChild( script_element );
                        static_script_element.remove();
                    }
                }

                view_element.AddClass( "is-hydrated" );
            }
        }
    }

    // ~~

    function InitializeView(
        route
        )
    {
        view_element = GetViewElement( route );

        if ( view_element !== null )
        {
            if ( !view_element.HasClass( "is-initialized" ) )
            {
                view_element.GetElements( ".appearing-block" )
                    .AddIntersectionObserver( true, 0.25, "is-visible" )
                    .AddIntersectionObserver( false, 0.0, "", "is-visible" );

                InitializeAutoplayVideos( view_element );
                InitializeAutohideVideos( view_element );

                view_element.AddClass( "is-initialized" );
            }
        }
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
                SetRoute( "/" + LanguageCode + "/" + route.RemovePrefix( "/" ) );
            }

            TrackRoute();
            OldViewRoute = ViewRoute;
            ViewRoute = GetRoute( "/" + LanguageCode + "/", "/" );

            if ( ViewRoute === "" )
            {
                ViewRoute = "home";
            }

            SectionName = GetHash();

            HydrateView( ViewRoute );
            InitializeView( ViewRoute );

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
        view_element.Fade( view_element.dataset.viewRoute === ViewRoute );
    }

    // ~~

    function SetLanguageCode(
        language_code
        )
    {
        var
            route;

        route = GetRoute( "/" + LanguageCode + "/", "/" );

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
            view_route_was_found,
            section_element,
            view_element;

        if ( ViewRoute !== OldViewRoute )
        {
            view_route_was_found = false;

            for ( view_element of GetElements( ".view" ) )
            {
                FadeView( view_element );

                if ( view_element.dataset.viewRoute === ViewRoute )
                {
                    view_route_was_found = true;
                }
            }

            if ( !view_route_was_found )
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
                    ( ViewRoute === OldViewRoute ) ? 0.2 : 0
                    );
            }
        }
    }
</script>
<div>
    <?php require __DIR__ . '/' . 'PAGE/loader_page.php'; ?>
    <?php foreach ( $this->PageByIdMap as  $page_id =>  $page ) { ?>
        <?php if ( $page->Route == $this->PageRoute ) { ?>
            <div class="extended-container view is-hidden" data-view-route="<?php echo $page->Route; ?>">
                <?php require __DIR__ . '/' . 'PAGE/' . str_replace( '-', '_', $page->TypeSlug ) . '_page.php'; ?>
            </div>
        <?php } else { ?>
            <div class="extended-container view is-hidden" data-view-route="<?php echo $page->Route; ?>">
                <template>
                    <?php require __DIR__ . '/' . 'PAGE/' . str_replace( '-', '_', $page->TypeSlug ) . '_page.php'; ?>
                </template>
            </div>
        <?php } ?>
    <?php } ?>
    <?php require __DIR__ . '/' . 'BLOCK/scroll_top_button.php'; ?>
    <?php require __DIR__ . '/' . 'BLOCK/cookie_consent.php'; ?>
</div>
<script src="/static/script/header_menu.js?v=<?php echo VersionTimestamp; ?>"></script>
<script>
    // -- STATEMENTS

    HandleScrollEvent( 1, "body", "is-scrolled" );
    AddEventListener( "update-view", UpdateView );

    ShowView();
    HandleResizeEvent( ResizeView );
    HandleRouteEvent( ShowView );
</script>
<?php require __DIR__ . '/' . 'BLOCK/page_footer.php'; ?>
