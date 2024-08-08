<?php // -- TYPES

class SESSION
{
    // -- ATTRIBUTES

    public
        $User,
        $UserIsConnected,
        $UserRole,
        $Captcha;

    // -- CONSTRUCTORS

    function __construct(
        )
    {
        $this->User = FindSessionValue( 'User', null );
        $this->UserIsConnected = FindSessionValue( 'UserIsConnected', false );
        $this->UserRole = FindSessionValue( 'UserRole', '' );
        $this->Captcha = FindSessionValue( 'Captcha', '' );
    }

    // -- OPERATIONS

    function Store(
        )
    {
        SetSessionValue( 'User', $this->User );
        SetSessionValue( 'UserIsConnected', $this->UserIsConnected );
        SetSessionValue( 'UserRole', $this->UserRole );
        SetSessionValue( 'Captcha', $this->Captcha );
    }
}
