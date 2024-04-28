%TOOL%\BASIL\basil --prefix remote_ --mysql --exclude-command "drop schema" --exclude-command "create schema" spark_project.bs spark_project.bd
%TOOL%\BASIL\basil --mysql --phoenix --force-drop spark_project.bs spark_project.bd spark_project.bt administration.bt
pause
%TOOL%\CYCLONE\cyclone --driver mysql --host 127.0.0.1 --port 3306 --user root --password "" spark_project.sql
rem del PHX/ADMINISTRATION/VIEW/show_home_menu_view.pht
rem del PHX/ADMINISTRATION/VIEW/BLOCK/page_header.pht
copy PHX\index.phx ..\CODE\
copy PHX\ADMINISTRATION\CONTROLLER\*.phx ..\CODE\ADMINISTRATION\CONTROLLER
copy PHX\ADMINISTRATION\STYLE\*.styl ..\CODE\ADMINISTRATION\STYLE
copy PHX\ADMINISTRATION\VIEW\*.pht ..\CODE\ADMINISTRATION\VIEW
copy PHX\ADMINISTRATION\VIEW\BLOCK\*.pht ..\CODE\ADMINISTRATION\VIEW\BLOCK
copy PHX\MODEL\*.phx ..\CODE\MODEL
