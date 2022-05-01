<?php // -- FUNCTIONS

function GetDatabasePageSubPageArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `SubPageSlug`, `Number` from `PAGE_SUB_PAGE` order by `PageSlug` asc, `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page_sub_page_array = [];

    while (  $page_sub_page = $statement->fetchObject() )
    {
        $page_sub_page->Id = ( int )( $page_sub_page->Id );
        $page_sub_page->Number = ( float )( $page_sub_page->Number );
        array_push( $page_sub_page_array, $page_sub_page );
    }

    return $page_sub_page_array;
}

// ~~

function GetDatabasePageSubPageById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `PageSlug`, `SubPageSlug`, `Number` from `PAGE_SUB_PAGE` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $page_sub_page = $statement->fetchObject();
    $page_sub_page->Id = ( int )( $page_sub_page->Id );
    $page_sub_page->Number = ( float )( $page_sub_page->Number );

    return $page_sub_page;
}

// ~~

function AddDatabasePageSubPage(
    string $page_slug,
    string $sub_page_slug,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'insert into `PAGE_SUB_PAGE` ( `PageSlug`, `SubPageSlug`, `Number` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $sub_page_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabasePageSubPage(
    string $page_slug,
    string $sub_page_slug,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'replace into `PAGE_SUB_PAGE` ( `PageSlug`, `SubPageSlug`, `Number` ) values ( ?, ?, ? )' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $sub_page_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabasePageSubPage(
    int $id,
    string $page_slug,
    string $sub_page_slug,
    float $number
    )
{
     $statement = GetDatabaseStatement( 'update `PAGE_SUB_PAGE` set `PageSlug` = ?, `SubPageSlug` = ?, `Number` = ? where Id = ?' );
    $statement->bindParam( 1, $page_slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $sub_page_slug, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );
    $statement->bindParam( 4, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabasePageSubPageById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `PAGE_SUB_PAGE` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
