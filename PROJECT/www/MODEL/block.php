<?php // -- FUNCTIONS

function GetDatabaseBlockArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `TypeSlug`, `Title`, `Text`, `ImagePath`, `VideoPath` from `BLOCK`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_array = [];

    while (  $block = $statement->fetchObject() )
    {
        $block->Id = ( int )( $block->Id );
        array_push( $block_array, $block );
    }

    return $block_array;
}

// ~~

function GetDatabaseBlockBySlugMap(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `TypeSlug`, `Title`, `Text`, `ImagePath`, `VideoPath` from `BLOCK`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_by_slug_map = [];

    while (  $block = $statement->fetchObject() )
    {
        $block->Id = ( int )( $block->Id );
        $block_by_slug_map[ $block->Slug ] = $block;
    }

    return $block_by_slug_map;
}

// ~~

function GetDatabaseBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `TypeSlug`, `Title`, `Text`, `ImagePath`, `VideoPath` from `BLOCK` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block = $statement->fetchObject();
    $block->Id = ( int )( $block->Id );

    return $block;
}

// ~~

function AddDatabaseBlock(
    string $slug,
    string $type_slug,
    string $title,
    string $text,
    string $image_path,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'insert into `BLOCK` ( `Slug`, `TypeSlug`, `Title`, `Text`, `ImagePath`, `VideoPath` ) values ( ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $title, PDO::PARAM_STR );
    $statement->bindParam( 4, $text, PDO::PARAM_STR );
    $statement->bindParam( 5, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 6, $video_path, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseBlock(
    string $slug,
    string $type_slug,
    string $title,
    string $text,
    string $image_path,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'replace into `BLOCK` ( `Slug`, `TypeSlug`, `Title`, `Text`, `ImagePath`, `VideoPath` ) values ( ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $title, PDO::PARAM_STR );
    $statement->bindParam( 4, $text, PDO::PARAM_STR );
    $statement->bindParam( 5, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 6, $video_path, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseBlock(
    int $id,
    string $slug,
    string $type_slug,
    string $title,
    string $text,
    string $image_path,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'update `BLOCK` set `Slug` = ?, `TypeSlug` = ?, `Title` = ?, `Text` = ?, `ImagePath` = ?, `VideoPath` = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $title, PDO::PARAM_STR );
    $statement->bindParam( 4, $text, PDO::PARAM_STR );
    $statement->bindParam( 5, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 6, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 7, $id, PDO::PARAM_INT );

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
