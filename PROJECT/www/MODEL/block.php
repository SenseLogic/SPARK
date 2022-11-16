<?php // -- FUNCTIONS

function GetDatabaseBlockArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath` from `BLOCK` order by `PageSlug` asc, `BlockSlug` asc, `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_array = [];

    while (  $block = $statement->fetchObject() )
    {
        $block->Id = ( int )( $block->Id );
        $block->Number = ( float )( $block->Number );
        array_push( $block_array, $block );
    }

    return $block_array;
}

// ~~

function GetDatabaseBlockBySlugMap(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath` from `BLOCK`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_by_slug_map = [];

    while (  $block = $statement->fetchObject() )
    {
        $block->Id = ( int )( $block->Id );
        $block->Number = ( float )( $block->Number );
        $block_by_slug_map[ $block->Slug ] = $block;
    }

    return $block_by_slug_map;
}

// ~~

function GetDatabaseBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath` from `BLOCK` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block = $statement->fetchObject();
    $block->Id = ( int )( $block->Id );
    $block->Number = ( float )( $block->Number );

    return $block;
}

// ~~

function AddDatabaseBlock(
    string $page_slug,
    string $block_slug,
    string $slug,
    string $type_slug,
    float $number,
    string $title,
    string $text,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'insert into `BLOCK` ( `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $statement->bindParam( 6, $title, PDO::PARAM_STR );
    $statement->bindParam( 7, $text, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 9, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 10, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 11, $video_path, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseBlock(
    string $page_slug,
    string $block_slug,
    string $slug,
    string $type_slug,
    float $number,
    string $title,
    string $text,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'replace into `BLOCK` ( `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `ImageVerticalPosition`, `ImageHorizontalPosition`, `VideoPath` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $statement->bindParam( 6, $title, PDO::PARAM_STR );
    $statement->bindParam( 7, $text, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 9, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 10, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 11, $video_path, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseBlock(
    int $id,
    string $page_slug,
    string $block_slug,
    string $slug,
    string $type_slug,
    float $number,
    string $title,
    string $text,
    string $image_path,
    string $image_vertical_position,
    string $image_horizontal_position,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'update `BLOCK` set `PageSlug` = ?, `BlockSlug` = ?, `Slug` = ?, `TypeSlug` = ?, `Number` = ?, `Title` = ?, `Text` = ?, `ImagePath` = ?, `ImageVerticalPosition` = ?, `ImageHorizontalPosition` = ?, `VideoPath` = ? where Id = ?' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $statement->bindParam( 6, $title, PDO::PARAM_STR );
    $statement->bindParam( 7, $text, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 9, $image_vertical_position, PDO::PARAM_STR );
    $statement->bindParam( 10, $image_horizontal_position, PDO::PARAM_STR );
    $statement->bindParam( 11, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 12, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `BLOCK` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
