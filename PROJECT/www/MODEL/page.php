<?php // -- FUNCTIONS

function GetDatabasePageArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `TypeSlug`, `Route`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath`, `IsActive` from `PAGE`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page_array = [];

    while (  $page = $statement->fetchObject() )
    {
        $page->Id = ( int )( $page->Id );
        array_push( $page_array, $page );
    }

    return $page_array;
}

// ~~

function GetDatabasePageBySlugMap(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `TypeSlug`, `Route`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath`, `IsActive` from `PAGE`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page_by_slug_map = [];

    while (  $page = $statement->fetchObject() )
    {
        $page->Id = ( int )( $page->Id );
        $page_by_slug_map[ $page->Slug ] = $page;
    }

    return $page_by_slug_map;
}

// ~~

function GetDatabasePageById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `TypeSlug`, `Route`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath`, `IsActive` from `PAGE` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page = $statement->fetchObject();
    $page->Id = ( int )( $page->Id );

    return $page;
}

// ~~

function AddDatabasePage(
    string $slug,
    string $type_slug,
    string $route,
    string $title,
    string $text,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path,
    bool $is_active
    )
{
     $statement = GetDatabaseStatement( 'insert into `PAGE` ( `Slug`, `TypeSlug`, `Route`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath`, `IsActive` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $route, PDO::PARAM_STR );
    $statement->bindParam( 4, $title, PDO::PARAM_STR );
    $statement->bindParam( 5, $text, PDO::PARAM_STR );
    $statement->bindParam( 6, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 7, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 9, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 10, $is_active, PDO::PARAM_BOOL );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabasePage(
    string $slug,
    string $type_slug,
    string $route,
    string $title,
    string $text,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path,
    bool $is_active
    )
{
     $statement = GetDatabaseStatement( 'replace into `PAGE` ( `Slug`, `TypeSlug`, `Route`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath`, `IsActive` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $route, PDO::PARAM_STR );
    $statement->bindParam( 4, $title, PDO::PARAM_STR );
    $statement->bindParam( 5, $text, PDO::PARAM_STR );
    $statement->bindParam( 6, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 7, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 9, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 10, $is_active, PDO::PARAM_BOOL );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabasePage(
    int $id,
    string $slug,
    string $type_slug,
    string $route,
    string $title,
    string $text,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path,
    bool $is_active
    )
{
     $statement = GetDatabaseStatement( 'update `PAGE` set `Slug` = ?, `TypeSlug` = ?, `Route` = ?, `Title` = ?, `Text` = ?, `ImagePath` = ?, `ImageVerticalPosition` = ?, `ImageHorizontalPosition` = ?, `VideoPath` = ?, `IsActive` = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $route, PDO::PARAM_STR );
    $statement->bindParam( 4, $title, PDO::PARAM_STR );
    $statement->bindParam( 5, $text, PDO::PARAM_STR );
    $statement->bindParam( 6, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 7, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 9, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 10, $is_active, PDO::PARAM_BOOL );
    $statement->bindParam( 11, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabasePageById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `PAGE` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
