<script>
    // -- VARIABLES

    function UpdateFieldVisibility(
        )
    {
        var
            column_index,
            column_is_visible,
            column_title_element,
            column_title_element_array,
            column_value,
            column_value_element,
            column_value_element_array,
            row_element,
            row_element_array,
            type_slug_value,
            type_slug_value_element,
            type_slug_value_element_array;

        row_element_array = GetElements( "[data-is-row]" );

        for ( row_element of row_element_array )
        {
            column_title_element_array = row_element.GetElements( "[data-is-column-title]" );
            column_value_element_array = row_element.GetElements( "[data-is-column-value]" );

            type_slug_value = "";

            for ( column_value_element of column_value_element_array )
            {
                if ( column_value_element.dataset.columnName === "TypeSlug" )
                {
                    type_slug_value = column_value_element.GetFirstChildElement().value;

                    if ( !column_value_element.IsWatched )
                    {
                        column_value_element.AddEventListener( "value-changed", UpdateFieldVisibility );
                        column_value_element.IsWatched = true;
                    }

                    break;
                }
            }

            if ( column_title_element_array.length === column_value_element_array.length )
            {
                for ( column_index = 0;
                      column_index < column_title_element_array.length;
                      ++column_index )
                {
                    column_title_element = column_title_element_array[ column_index ];
                    column_value_element = column_value_element_array[ column_index ];
                    column_value = column_value_element.GetFirstChildElement().value;

                    column_name = column_title_element.dataset.columnName;

                    if ( column_name === "Id"
                         || column_name === "Slug"
                         || column_name === "PageSlug"
                         || column_name === "TypeSlug"
                         || column_name === "Number"
                         || column_name === "LanguageCodeArray" )
                    {
                        column_is_visible = true;
                    }
                    else if ( type_slug_value === "image" )
                    {
                        column_is_visible = (
                            column_name === "Title"
                            || column_name === "ImagePath"
                            || column_name.startsWith( "Video" )
                            );
                    }
                    else if ( type_slug_value === "text" )
                    {
                        column_is_visible = (
                            column_name === "Text"
                            );
                    }
                    else if ( type_slug_value === "text-and-image" )
                    {
                        column_is_visible = (
                            column_name === "Title"
                            || column_name === "Text"
                            || column_name === "Route"
                            || column_name === "ImagePath"
                            );
                    }
                    else
                    {
                        column_is_visible = false;
                    }

                    column_title_element.ToggleClass( "is-hidden", !column_is_visible );
                    column_value_element.ToggleClass( "is-hidden", !column_is_visible );
                }
            }
        }
    }

    // -- STATEMENTS

    UpdateFieldVisibility();
</script>
