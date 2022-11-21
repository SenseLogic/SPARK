<?php // -- FUNCTIONS

function GetDatabaseUserArray(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Pseudonym`, `Password`, `Role`, `Email` from `USER` order by `Email` asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetDatabaseUserByIdMap(
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Pseudonym`, `Password`, `Role`, `Email` from `USER`' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $user_by_id_map = [];

    while (  $user = $statement->fetchObject() )
    {
        $user_by_id_map[ $user->Id ] = $user;
    }

    return $user_by_id_map;
}

// ~~

function GetDatabaseUserById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'select `Id`, `Pseudonym`, `Password`, `Role`, `Email` from `USER` where `Id` = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return $statement->fetchObject();
}

// ~~

function AddDatabaseUser(
    string $id,
    string $pseudonym,
    string $password,
    string $role,
    string $email
    )
{
     $statement = GetDatabaseStatement( 'insert into `USER` ( `Id`, `Pseudonym`, `Password`, `Role`, `Email` ) values ( ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $pseudonym, PDO::PARAM_STR );
    $statement->bindParam( 3, $password, PDO::PARAM_STR );
    $statement->bindParam( 4, $role, PDO::PARAM_STR );
    $statement->bindParam( 5, $email, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function PutDatabaseUser(
    string $id,
    string $pseudonym,
    string $password,
    string $role,
    string $email
    )
{
     $statement = GetDatabaseStatement( 'replace into `USER` ( `Id`, `Pseudonym`, `Password`, `Role`, `Email` ) values ( ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );
    $statement->bindParam( 2, $pseudonym, PDO::PARAM_STR );
    $statement->bindParam( 3, $password, PDO::PARAM_STR );
    $statement->bindParam( 4, $role, PDO::PARAM_STR );
    $statement->bindParam( 5, $email, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseUser(
    string $id,
    string $pseudonym,
    string $password,
    string $role,
    string $email
    )
{
     $statement = GetDatabaseStatement( 'update `USER` set `Pseudonym` = ?, `Password` = ?, `Role` = ?, `Email` = ? where Id = ?' );
    $statement->bindParam( 1, $pseudonym, PDO::PARAM_STR );
    $statement->bindParam( 2, $password, PDO::PARAM_STR );
    $statement->bindParam( 3, $role, PDO::PARAM_STR );
    $statement->bindParam( 4, $email, PDO::PARAM_STR );
    $statement->bindParam( 5, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseUserById(
    string $id
    )
{
     $statement = GetDatabaseStatement( 'delete from `USER` where `Id` = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
