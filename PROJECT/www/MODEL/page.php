<?php // -- FUNCTIONS

function GetDatabasePageArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Route`, `TypeSlug`, `Number`, `LanguageCodeArray`, `IsActive`, `Title`, `Heading`, `Teaser`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath`, `MetaTitle`, `MetaDescription`, `MetaSubRouteArray`, `MetaSubTitleArray`, `MetaSubDescriptionArray` from `PAGE` order by `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page_array = [];

    while (  $page = $statement->fetchObject() )
    {
        $page->Number = ( float )( $page->Number );
        $page->LanguageCodeArray = json_decode( $page->LanguageCodeArray );
        $page->MetaSubRouteArray = json_decode( $page->MetaSubRouteArray );
        $page->MetaSubTitleArray = json_decode( $page->MetaSubTitleArray );
        $page->MetaSubDescriptionArray = json_decode( $page->MetaSubDescriptionArray );
        array_push( $page_array, $page );
    }

    return $page_array;
}

// ~~

function GetDatabasePageById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Route`, `TypeSlug`, `Number`, `LanguageCodeArray`, `IsActive`, `Title`, `Heading`, `Teaser`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath`, `MetaTitle`, `MetaDescription`, `MetaSubRouteArray`, `MetaSubTitleArray`, `MetaSubDescriptionArray` from `PAGE` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page = $statement->fetchObject();
    $page->Number = ( float )( $page->Number );
    $page->LanguageCodeArray = json_decode( $page->LanguageCodeArray );
    $page->MetaSubRouteArray = json_decode( $page->MetaSubRouteArray );
    $page->MetaSubTitleArray = json_decode( $page->MetaSubTitleArray );
    $page->MetaSubDescriptionArray = json_decode( $page->MetaSubDescriptionArray );

    return $page;
}

// ~~

function AddDatabasePage(
    string $id,
    string $slug,
    string $route,
    string $type_slug,
    float $number,
    array $language_code_array,
    bool $is_active,
    string $title,
    string $heading,
    string $teaser,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path,
    string $meta_title,
    string $meta_description,
    array $meta_sub_route_array,
    array $meta_sub_title_array,
    array $meta_sub_description_array
    )
{
     $statement = GetDatabaseStatement( 'insert into `PAGE` ( `Id`, `Slug`, `Route`, `TypeSlug`, `Number`, `LanguageCodeArray`, `IsActive`, `Title`, `Heading`, `Teaser`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath`, `MetaTitle`, `MetaDescription`, `MetaSubRouteArray`, `MetaSubTitleArray`, `MetaSubDescriptionArray` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $route, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 6, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 7, $is_active, PDO::PARAM_BOOL );
    $statement->bindParam( 8, $title, PDO::PARAM_STR );
    $statement->bindParam( 9, $heading, PDO::PARAM_STR );
    $statement->bindParam( 10, $teaser, PDO::PARAM_STR );
    $statement->bindParam( 11, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 12, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 13, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 14, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 15, $meta_title, PDO::PARAM_STR );
    $statement->bindParam( 16, $meta_description, PDO::PARAM_STR );
    $meta_sub_route_array = json_encode( $meta_sub_route_array );
    $statement->bindParam( 17, $meta_sub_route_array, PDO::PARAM_STR );
    $meta_sub_title_array = json_encode( $meta_sub_title_array );
    $statement->bindParam( 18, $meta_sub_title_array, PDO::PARAM_STR );
    $meta_sub_description_array = json_encode( $meta_sub_description_array );
    $statement->bindParam( 19, $meta_sub_description_array, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabasePage(
    string $id,
    string $slug,
    string $route,
    string $type_slug,
    float $number,
    array $language_code_array,
    bool $is_active,
    string $title,
    string $heading,
    string $teaser,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path,
    string $meta_title,
    string $meta_description,
    array $meta_sub_route_array,
    array $meta_sub_title_array,
    array $meta_sub_description_array
    )
{
     $statement = GetDatabaseStatement( 'replace into `PAGE` ( `Id`, `Slug`, `Route`, `TypeSlug`, `Number`, `LanguageCodeArray`, `IsActive`, `Title`, `Heading`, `Teaser`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath`, `MetaTitle`, `MetaDescription`, `MetaSubRouteArray`, `MetaSubTitleArray`, `MetaSubDescriptionArray` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $route, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 6, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 7, $is_active, PDO::PARAM_BOOL );
    $statement->bindParam( 8, $title, PDO::PARAM_STR );
    $statement->bindParam( 9, $heading, PDO::PARAM_STR );
    $statement->bindParam( 10, $teaser, PDO::PARAM_STR );
    $statement->bindParam( 11, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 12, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 13, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 14, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 15, $meta_title, PDO::PARAM_STR );
    $statement->bindParam( 16, $meta_description, PDO::PARAM_STR );
    $meta_sub_route_array = json_encode( $meta_sub_route_array );
    $statement->bindParam( 17, $meta_sub_route_array, PDO::PARAM_STR );
    $meta_sub_title_array = json_encode( $meta_sub_title_array );
    $statement->bindParam( 18, $meta_sub_title_array, PDO::PARAM_STR );
    $meta_sub_description_array = json_encode( $meta_sub_description_array );
    $statement->bindParam( 19, $meta_sub_description_array, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabasePage(
    string $id,
    string $slug,
    string $route,
    string $type_slug,
    float $number,
    array $language_code_array,
    bool $is_active,
    string $title,
    string $heading,
    string $teaser,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path,
    string $meta_title,
    string $meta_description,
    array $meta_sub_route_array,
    array $meta_sub_title_array,
    array $meta_sub_description_array
    )
{
     $statement = GetDatabaseStatement( 'update `PAGE` set `Slug` = ?, `Route` = ?, `TypeSlug` = ?, `Number` = ?, `LanguageCodeArray` = ?, `IsActive` = ?, `Title` = ?, `Heading` = ?, `Teaser` = ?, `ImagePath` = ?, `ImageVerticalPosition` = ?, `ImageHorizontalPosition` = ?, `VideoPath` = ?, `MetaTitle` = ?, `MetaDescription` = ?, `MetaSubRouteArray` = ?, `MetaSubTitleArray` = ?, `MetaSubDescriptionArray` = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $route, PDO::PARAM_STR );
    $statement->bindParam( 3, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $number, PDO::PARAM_STR );
    $language_code_array = json_encode( $language_code_array );
    $statement->bindParam( 5, $language_code_array, PDO::PARAM_STR );
    $statement->bindParam( 6, $is_active, PDO::PARAM_BOOL );
    $statement->bindParam( 7, $title, PDO::PARAM_STR );
    $statement->bindParam( 8, $heading, PDO::PARAM_STR );
    $statement->bindParam( 9, $teaser, PDO::PARAM_STR );
    $statement->bindParam( 10, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 11, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 12, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 13, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 14, $meta_title, PDO::PARAM_STR );
    $statement->bindParam( 15, $meta_description, PDO::PARAM_STR );
    $meta_sub_route_array = json_encode( $meta_sub_route_array );
    $statement->bindParam( 16, $meta_sub_route_array, PDO::PARAM_STR );
    $meta_sub_title_array = json_encode( $meta_sub_title_array );
    $statement->bindParam( 17, $meta_sub_title_array, PDO::PARAM_STR );
    $meta_sub_description_array = json_encode( $meta_sub_description_array );
    $statement->bindParam( 18, $meta_sub_description_array, PDO::PARAM_STR );
    $statement->bindParam( 19, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabasePageById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `PAGE` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function GetPageArrayByRouteMap(
    array &$page_array
    )
{
     $page_array_by_route_map = [];

    foreach ( $page_array as  $page )
    {
        if ( !isset( $page_array_by_route_map[ $page->Route ] ) )
        {
            $page_array_by_route_map[ $page->Route ] = [ $page ];
        }
        else
        {
            array_push( $page_array_by_route_map[ $page->Route ], $page );
        }
    }

    return $page_array_by_route_map;
}

// ~~

function GetPageArrayByRoute(
    array &$page_array,
    string $route
    )
{
     $page_array_by_route = [];

    foreach ( $page_array as  $page )
    {
        if ( $page->Route === $route )
        {
            array_push( $page_array_by_route, $page );
        }
    }

    return $page_array_by_route;
}

// ~~

function GetPageByRouteMap(
    array &$page_array
    )
{
     $page_by_route_map = [];

    foreach ( $page_array as  $page )
    {
        $page_by_route_map[ $page->Route ] = $page;
    }

    return $page_by_route_map;
}

// ~~

function GetPageByRoute(
    array &$page_by_route_map,
    string $route
    )
{
    if ( isset( $page_by_route_map[ $route ] ) )
    {
        return $page_by_route_map[ $route ];
    }
    else
    {
        return null;
    }
}

// ~~

function GetPageArrayByTypeSlugMap(
    array &$page_array
    )
{
     $page_array_by_type_slug_map = [];

    foreach ( $page_array as  $page )
    {
        if ( !isset( $page_array_by_type_slug_map[ $page->TypeSlug ] ) )
        {
            $page_array_by_type_slug_map[ $page->TypeSlug ] = [ $page ];
        }
        else
        {
            array_push( $page_array_by_type_slug_map[ $page->TypeSlug ], $page );
        }
    }

    return $page_array_by_type_slug_map;
}

// ~~

function GetPageArrayByTypeSlug(
    array &$page_array,
    string $type_slug
    )
{
     $page_array_by_type_slug = [];

    foreach ( $page_array as  $page )
    {
        if ( $page->TypeSlug === $type_slug )
        {
            array_push( $page_array_by_type_slug, $page );
        }
    }

    return $page_array_by_type_slug;
}

// ~~

function GetPageByTypeSlugMap(
    array &$page_array
    )
{
     $page_by_type_slug_map = [];

    foreach ( $page_array as  $page )
    {
        $page_by_type_slug_map[ $page->TypeSlug ] = $page;
    }

    return $page_by_type_slug_map;
}

// ~~

function GetPageByTypeSlug(
    array &$page_by_type_slug_map,
    string $type_slug
    )
{
    if ( isset( $page_by_type_slug_map[ $type_slug ] ) )
    {
        return $page_by_type_slug_map[ $type_slug ];
    }
    else
    {
        return null;
    }
}
