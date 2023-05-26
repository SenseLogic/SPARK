<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';

// -- TYPES

class BACKUP_DATABASE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        if ( HasSessionMinimumUserRole( 'administrator' ) )
        {
            $this->Title = 'Backup database';

            AddParentRoute();

            require __DIR__ . '/' . '../VIEW/BLOCK/page_header.php';

            EchoText( '<div class="page-section form-section">' );
            EchoText( '    <div class="color-black" style="display: flex; flex-direction: column; gap: 0.5rem; width: 100%">' );
            EchoStyledLine( 'Backup in progress...', 'font-size: 1.5rem', 'color-blue', '        ' );

             $backup_folder_path = 'backup/';

            if ( FolderExists( $backup_folder_path ) )
            {
                 $table_name_array = GetDatabaseTableNameArray();

                foreach ( $table_name_array as  $table_name )
                {
                    EchoLine( 'Reading database table : ' . $table_name );
                }

                 $database_file_text = GetDatabaseSqlText( $table_name_array );

                 $database_file_path
                    = $backup_folder_path
                      . 'database_backup_'
                      . GetCurrentDateTimeSuffix()
                      . '_'
                      . GetRandomText( 32 )
                      . '.sql';

                EchoLine( 'Writing database file : <a class="color-blue" href="/' . $database_file_path . '">' . $database_file_path . '</a>' );

                WriteTextFile( $database_file_path, $database_file_text );

                EchoStyledLine( 'Backup completed.', 'font-size: 1.5rem', 'color-blue', '        ' );
            }
            else
            {
                EchoStyledLine( 'Backup failed.', 'font-size: 1.5rem', 'color-blue', '        ' );
            }

            EchoText( '    </div>' );
            EchoText( '<div>' );

            require __DIR__ . '/' . '../VIEW/BLOCK/page_footer.php';
        }
    }
}

// -- STATEMENTS

ShowErrors();

 $backup_database_controller = new BACKUP_DATABASE_CONTROLLER(  $language_code );
