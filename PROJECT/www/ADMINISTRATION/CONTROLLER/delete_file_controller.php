<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';

// -- TYPES

class DELETE_FILE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $file_path = GetBaseFolderName() . GetPostValue( 'FilePath' );

        if ( FileExists( $file_path )
             && RemoveFile( $file_path ) )
        {
            if ( HasSuffix( $file_path, ImageExtension ) )
            {
                foreach ( [ HugeImageExtension, BigImageExtension, MediumImageExtension, SmallImageExtension, TinyImageExtension, PreloadImageExtension ] as  $suffix )
                {
                    if ( FileExists( $file_path . $suffix ) )
                    {
                        RemoveFile( $file_path . $suffix );
                    }
                }
            }
            else if ( HasSuffix( $file_path, TransparentImageExtension ) )
            {
                foreach ( [ HugeAlphaImageExtension, BigAlphaImageExtension, MediumAlphaImageExtension, SmallAlphaImageExtension, TinyAlphaImageExtension, PreloadAlphaImageExtension ] as $suffix )
                {
                    if ( FileExists( $file_path . $suffix ) )
                    {
                        RemoveFile( $file_path . $suffix );
                    }
                }
            }

            SetStatus( 201 );
            SetJsonResponse( $file_path );
        }
        else
        {
            SetStatus( 400 );
            SetJsonResponse( $file_path );
        }
    }
}

// -- STATEMENTS

 $delete_file_controller = new DELETE_FILE_CONTROLLER(  $language_code );
