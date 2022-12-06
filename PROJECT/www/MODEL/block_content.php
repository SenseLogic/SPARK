<?php // -- FUNCTIONS

function GetDatabaseBlockContentArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_CONTENT`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetDatabaseBlockContentBySlugMap(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_CONTENT`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $block_content_by_slug_map = [];

    while (  $block_content = $statement->fetchObject() )
    {
        $block_content_by_slug_map[ $block_content->Slug ] = $block_content;
    }

    return $block_content_by_slug_map;
}

// ~~

function GetDatabaseBlockContentById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Slug`, `Name` from `BLOCK_CONTENT` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return $statement->fetchObject();
}

// ~~

function AddDatabaseBlockContent(
    string $id,
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'insert into `BLOCK_CONTENT` ( `Id`, `Slug`, `Name` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $name, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseBlockContent(
    string $id,
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'replace into `BLOCK_CONTENT` ( `Id`, `Slug`, `Name` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $name, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseBlockContent(
    string $id,
    string $slug,
    string $name
    )
{
     $statement = GetDatabaseStatement( 'update `BLOCK_CONTENT` set `Slug` = ?, `Name` = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseBlockContentById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `BLOCK_CONTENT` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}