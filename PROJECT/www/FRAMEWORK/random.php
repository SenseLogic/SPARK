<?php // -- FUNCTIONS

function GetRandomAddress(
    )
{
    return rand( 0, 255 ) . '.' . rand( 0, 255 ) . '.' . rand( 0, 255 ) . '.' . rand( 0, 255 );
}

// ~~

function GetRandomTuid(
    )
{
    return str_replace( [ '+', '/', '=' ], [ '-', '_', '' ], base64_encode( random_bytes( 16 ) ) );
}

// ~~

function GetRandomUuid(
    )
{
    return
        bin2hex( random_bytes( 4 ) )
        . '-'
        . bin2hex( random_bytes( 2 ) )
        . '-'
        . bin2hex( random_bytes( 2 ) )
        . '-'
        . bin2hex( random_bytes( 2 ) )
        . '-'
        . bin2hex( random_bytes( 6 ) );
}
