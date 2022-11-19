<?php // -- FUNCTIONS

function GetDatabaseLanguageArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Code`, `Number`, `Text` from `LANGUAGE` order by `Number` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetDatabaseLanguageById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Code`, `Number`, `Text` from `LANGUAGE` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return $statement->fetchObject();
}

// ~~

function AddDatabaseLanguage(
    string $id,
    string $code,
    string $number,
    string $text
    )
{
     $statement = GetDatabaseStatement( 'insert into `LANGUAGE` ( `Id`, `Code`, `Number`, `Text` ) values ( ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $code, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );
    $statement->bindParam( 4, $text, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseLanguage(
    string $id,
    string $code,
    string $number,
    string $text
    )
{
     $statement = GetDatabaseStatement( 'replace into `LANGUAGE` ( `Id`, `Code`, `Number`, `Text` ) values ( ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $code, PDO::PARAM_STR );
    $statement->bindParam( 3, $number, PDO::PARAM_STR );
    $statement->bindParam( 4, $text, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseLanguage(
    string $id,
    string $code,
    string $number,
    string $text
    )
{
     $statement = GetDatabaseStatement( 'update `LANGUAGE` set `Code` = ?, `Number` = ?, `Text` = ? where Id = ?' );
    $statement->bindParam( 1, $code, PDO::PARAM_STR );
    $statement->bindParam( 2, $number, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseLanguageById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `LANGUAGE` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
