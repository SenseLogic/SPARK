..\..\..\..\TOOL\BASIL\basil --sql --exclude-command "drop schema" --exclude-command "create schema" spark_project.bs spark_project.bd
copy spark_project.sql remote_spark_project.sql
copy spark_project_data.sql remote_spark_project_data.sql
copy spark_project_dump.sql remote_spark_project_dump.sql
..\..\..\..\TOOL\BASIL\basil --sql --phoenix --force-drop spark_project.bs spark_project.bd spark_project.bt administration.bt
pause
..\..\..\..\TOOL\CYCLONE\cyclone mysql 127.0.0.1 3306 root "" spark_project.sql spark_project_data.sql
copy PHX\index.phx ..\CODE\
copy PHX\ADMINISTRATION\CONTROLLER\*.phx ..\CODE\ADMINISTRATION\CONTROLLER
copy PHX\ADMINISTRATION\VIEW\*.pht ..\CODE\ADMINISTRATION\VIEW
copy PHX\MODEL\*.phx ..\CODE\MODEL
pause
