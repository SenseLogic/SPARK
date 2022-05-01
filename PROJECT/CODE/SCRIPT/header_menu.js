// -- FUNCTIONS

function OpenHeaderMenu(
    )
{
    GetElementById( "header-menu" ).AddClass( "is-open" );
    SetScrollPosition( 0 );
}

// ~~

function CloseHeaderMenu(
    )
{
    GetElementById( "header-menu" ).RemoveClass( "is-open" );
}

// -- STATEMENTS

AddEventListener(
    "update-view",
    function (
        )
    {
        GetElements( ".header-menu-button, .header-menu-mobile-button" ).Iterate(
            function (
                element
                )
            {
                element.ToggleClass(
                    "is-selected",
                    element.dataset.viewName === ViewName
                    || ViewName.startsWith( element.dataset.viewName + "/" )
                    );
            }
            );
    }
    );
