<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/contact_model.php';

// -- TYPES

class ADD_CONTACT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $name,
        string $company,
        string $email,
        string $phone,
        string $subject,
        string $message,
        string $captcha
        )
    {
        parent::__construct();

        if ( IsValidCaptcha( $captcha, $this->Session->Captcha ) )
        {
            AddDatabaseContact( $name, $company, $email, $phone, $subject, $message );
            $this->SendEmails( $name, $company, $email, $phone, $subject, $message );

            SetStatus( 200 );
        }
        else
        {
            SetStatus( 401 );
        }
    }

    // -- OPERATIONS

    function SendEmails(
        string $name,
        string $company,
        string $email,
        string $phone,
        string $subject,
        string $message,
        )
    {
        SendEmail(
            'mail.spark-project.com',
            25,
            'contact@spark-project.com',
            'xyz',
            'contact@spark-project.com',
            $email,
            'spark-project.com',
            "Hi,\n\nThank you for your interest in Spark Project :)\n\nBest regards,\n\nThe Spark Project team\n"
            );

        SendEmail(
            'mail.spark-project.com',
            25,
            'contact@spark-project.com',
            'xyz',
            'contact@spark-project.com',
            'contact@spark-project.com',
            'Contact request from ' . $email . ' about Spark Project',
            "Name : " . $name
            . "\nCompany : " . $company
            . "\nEmail : " . $email
            . "\nPhone : " . $phone
            . "\nSubject : " . $subject
            . "\nMessage : " . $message . "\n"
            );
    }
}

// -- STATEMENTS

 $add_contact_controller = new ADD_CONTACT_CONTROLLER(  $name,  $company,  $email,  $phone,  $subject,  $message,  $captcha );
