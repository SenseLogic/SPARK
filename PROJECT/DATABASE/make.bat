..\..\..\..\TOOL\BASIL\basil --sql --exclude-command "drop schema" --exclude-command "create schema" spark.bs spark.bd
copy spark.sql remote_spark.sql
copy spark_data.sql remote_spark_data.sql
copy spark_dump.sql remote_spark_dump.sql
..\..\..\..\TOOL\BASIL\basil --sql --phoenix --force-drop spark.bs spark.bd spark.bt administration.bt
pause
..\..\..\..\TOOL\CYCLONE\cyclone mysql 127.0.0.1 3306 root "" spark.sql spark_data.sql
copy PHX\index.phx ..\CODE\
copy PHX\ADMINISTRATION\CONTROLLER\*.phx ..\CODE\ADMINISTRATION\CONTROLLER
copy PHX\ADMINISTRATION\VIEW\*.pht ..\CODE\ADMINISTRATION\VIEW
copy PHX\MODEL\*.phx ..\CODE\MODEL
pause
