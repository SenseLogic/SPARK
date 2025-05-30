// -- FUNCTIONS

function OpenHeaderMenu(
    )
{
    GetElements( ".header-menu" ).AddClass( "is-open" );
    SetScrollPosition( 0 );
}

// ~~

function CloseHeaderMenu(
    )
{
    GetElements( ".header-menu" ).RemoveClass( "is-open" );
}

// -- STATEMENTS

AddEventListener(
    "update-view",
    function (
        )
    {
        GetElements( ".header-menu-button, .header-menu-modal-button" ).Iterate(
            function (
                element
                )
            {
                element.ToggleClass(
                    "is-selected",
                    element.dataset.viewRoute === ViewRoute
                    || ViewRoute.startsWith( element.dataset.viewRoute + "/" )
                    );
            }
            );

        CloseHeaderMenu();
    }
    );
