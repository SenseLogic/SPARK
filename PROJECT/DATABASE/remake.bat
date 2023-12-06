%TOOL%\BASIL\basil --prefix remote_ --mysql --exclude-command "drop schema" --exclude-command "create schema" spark_project.bs spark_project.bd
%TOOL%\BASIL\basil --mysql --phoenix --force-drop spark_project.bs spark_project.bd spark_project.bt
pause
%TOOL%\CYCLONE\cyclone --driver mysql --host 127.0.0.1 --port 3306 --user root --password "" spark_project.sql
copy PHX\index.phx ..\CODE\
copy PHX\MODEL\*.phx ..\CODE\MODEL
