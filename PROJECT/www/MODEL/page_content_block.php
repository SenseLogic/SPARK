<?php // -- FUNCTIONS

function GetDatabasePageContentBlockArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `BlockSlug`, `Number` from `PAGE_CONTENT_BLOCK` order by `PageSlug` asc, `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page_content_block_array = [];

    while (  $page_content_block = $statement->fetchObject() )
    {
        $page_content_block->Id = ( int )( $page_content_block->Id );
        $page_content_block->Number = ( float )( $page_content_block->Number );
        array_push( $page_content_block_array, $page_content_block );
    }

    return $page_content_block_array;
}

// ~~

function GetDatabasePageContentBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `BlockSlug`, `Number` from `PAGE_CONTENT_BLOCK` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page_content_block = $statement->fetchObject();
    $page_content_block->Id = ( int )( $page_content_block->Id );
    $page_content_block->Number = ( float )( $page_content_block->Number );

    return $page_content_block;
}

// ~~

function AddDatabasePageContentBlock(
    string $page_slug,
    string $block_slug,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'insert into `PAGE_CONTENT_BLOCK` ( `PageSlug`, `BlockSlug`, `Number` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabasePageContentBlock(
    string $page_slug,
    string $block_slug,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'replace into `PAGE_CONTENT_BLOCK` ( `PageSlug`, `BlockSlug`, `Number` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabasePageContentBlock(
    int $id,
    string $page_slug,
    string $block_slug,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'update `PAGE_CONTENT_BLOCK` set `PageSlug` = ?, `BlockSlug` = ?, `Number` = ? where Id = ?' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $block_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );
    $statement->bindParam( 4, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabasePageContentBlockById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `PAGE_CONTENT_BLOCK` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
