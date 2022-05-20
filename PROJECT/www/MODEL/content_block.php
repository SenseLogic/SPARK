<?php // -- FUNCTIONS

function GetDatabaseContentBlockArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `VideoPath` from `CONTENT_BLOCK` order by `PageSlug` asc, `BlockSlug` asc, `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $content_block_array = [];

    while (  $content_block = $statement->fetchObject() )
    {
        $content_block->Id = ( int )( $content_block->Id );
        $content_block->Number = ( float )( $content_block->Number );
        array_push( $content_block_array, $content_block );
    }

    return $content_block_array;
}

// ~~

function GetDatabaseContentBlockBySlugMap(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `VideoPath` from `CONTENT_BLOCK`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $content_block_by_slug_map = [];

    while (  $content_block = $statement->fetchObject() )
    {
        $content_block->Id = ( int )( $content_block->Id );
        $content_block->Number = ( float )( $content_block->Number );
        $content_block_by_slug_map[ $content_block->Slug ] = $content_block;
    }

    return $content_block_by_slug_map;
}

// ~~

function GetDatabaseContentBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `VideoPath` from `CONTENT_BLOCK` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $content_block = $statement->fetchObject();
    $content_block->Id = ( int )( $content_block->Id );
    $content_block->Number = ( float )( $content_block->Number );

    return $content_block;
}

// ~~

function AddDatabaseContentBlock(
    string $page_slug,
    string $block_slug,
    string $slug,
    string $type_slug,
    float $number,
    string $title,
    string $text,
    string $image_path,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'insert into `CONTENT_BLOCK` ( `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `VideoPath` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $statement->bindParam( 6, $title, PDO::PARAM_STR );
    $statement->bindParam( 7, $text, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 9, $video_path, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseContentBlock(
    string $page_slug,
    string $block_slug,
    string $slug,
    string $type_slug,
    float $number,
    string $title,
    string $text,
    string $image_path,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'replace into `CONTENT_BLOCK` ( `PageSlug`, `BlockSlug`, `Slug`, `TypeSlug`, `Number`, `Title`, `Text`, `ImagePath`, `VideoPath` ) values ( ?, ?, ?, ?, ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $statement->bindParam( 6, $title, PDO::PARAM_STR );
    $statement->bindParam( 7, $text, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 9, $video_path, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseContentBlock(
    int $id,
    string $page_slug,
    string $block_slug,
    string $slug,
    string $type_slug,
    float $number,
    string $title,
    string $text,
    string $image_path,
    string $video_path
    )
{
     $statement = GetDatabaseStatement( 'update `CONTENT_BLOCK` set `PageSlug` = ?, `BlockSlug` = ?, `Slug` = ?, `TypeSlug` = ?, `Number` = ?, `Title` = ?, `Text` = ?, `ImagePath` = ?, `VideoPath` = ? where Id = ?' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $slug, PDO::PARAM_STR );
    $statement->bindParam( 4, $type_slug, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_STR );
    $statement->bindParam( 6, $title, PDO::PARAM_STR );
    $statement->bindParam( 7, $text, PDO::PARAM_STR );
    $statement->bindParam( 8, $image_path, PDO::PARAM_STR );
    $statement->bindParam( 9, $video_path, PDO::PARAM_STR );
    $statement->bindParam( 10, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseContentBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `CONTENT_BLOCK` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
