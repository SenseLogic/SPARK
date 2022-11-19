<?php // -- FUNCTIONS

function GetDatabasePageSubPageArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageId`, `SubPageId`, `Number` from `PAGE_SUB_PAGE` order by `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page_sub_page_array = [];

    while (  $page_sub_page = $statement->fetchObject() )
    {
        $page_sub_page->Number = ( float )( $page_sub_page->Number );
        array_push( $page_sub_page_array, $page_sub_page );
    }

    return $page_sub_page_array;
}

// ~~

function GetDatabasePageSubPageById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageId`, `SubPageId`, `Number` from `PAGE_SUB_PAGE` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page_sub_page = $statement->fetchObject();
    $page_sub_page->Number = ( float )( $page_sub_page->Number );

    return $page_sub_page;
}

// ~~

function AddDatabasePageSubPage(
    string $id,
    string $page_id,
    string $sub_page_id,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'insert into `PAGE_SUB_PAGE` ( `Id`, `PageId`, `SubPageId`, `Number` ) values ( ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 3, $sub_page_id, PDO::PARAM_STR );
    $statement->bindParam( 4, $number, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabasePageSubPage(
    string $id,
    string $page_id,
    string $sub_page_id,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'replace into `PAGE_SUB_PAGE` ( `Id`, `PageId`, `SubPageId`, `Number` ) values ( ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 3, $sub_page_id, PDO::PARAM_STR );
    $statement->bindParam( 4, $number, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabasePageSubPage(
    string $id,
    string $page_id,
    string $sub_page_id,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'update `PAGE_SUB_PAGE` set `PageId` = ?, `SubPageId` = ?, `Number` = ? where Id = ?' );
    $statement->bindParam( 1, $page_id, PDO::PARAM_STR );
    $statement->bindParam( 2, $sub_page_id, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );
    $statement->bindParam( 4, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabasePageSubPageById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `PAGE_SUB_PAGE` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
