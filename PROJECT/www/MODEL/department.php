<?php // -- FUNCTIONS

function GetDatabaseDepartmentArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Slug, Name, Text, Image, Number from DEPARTMENT order by Number asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $department_array = [];

    while (  $department = $statement->fetchObject() )
    {
        $department->Id = ( int )( $department->Id );
        $department->Number = ( int )( $department->Number );
        array_push( $department_array, $department );
    }

    return $department_array;
}

// ~~

function GetDatabaseDepartmentById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, Slug, Name, Text, Image, Number from DEPARTMENT where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $department = $statement->fetchObject();
    $department->Id = ( int )( $department->Id );
    $department->Number = ( int )( $department->Number );

    return $department;
}

// ~~

function AddDatabaseDepartment(
    string $slug,
    string $name,
    string $text,
    string $image,
    int $number
    )
{
     $statement = GetDatabaseStatement( 'insert into DEPARTMENT ( Slug, Name, Text, Image, Number ) values ( ?, ?, ?, ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseDepartment(
    int $id,
    string $slug,
    string $name,
    string $text,
    string $image,
    int $number
    )
{
     $statement = GetDatabaseStatement( 'update DEPARTMENT set Slug = ?, Name = ?, Text = ?, Image = ?, Number = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $number, PDO::PARAM_INT );
    $statement->bindParam( 6, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseDepartmentById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from DEPARTMENT where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
