#!/bin/sh
set -x
source ../define_tool.sh
$TOOL/BASIL/basil --prefix remote_ --sql --exclude-command "drop schema" --exclude-command "create schema" spark_project.bs spark_project.bd
$TOOL/BASIL/basil --sql --phoenix --force-drop spark_project.bs spark_project.bd spark_project.bt administration.bt
read key
$TOOL/CYCLONE/cyclone --driver mysql --host 127.0.0.1 --port 3306 --user root --password root spark_project.sql
# rm PHX/ADMINISTRATION/VIEW/show_home_menu_view.pht
# rm PHX/ADMINISTRATION/VIEW/BLOCK/page_header.pht
cp PHX/index.phx ../CODE/
cp PHX/ADMINISTRATION/CONTROLLER/*.phx ../CODE/ADMINISTRATION/CONTROLLER
cp PHX/ADMINISTRATION/STYLE/*.styl ../CODE/ADMINISTRATION/STYLE
cp PHX/ADMINISTRATION/VIEW/*.pht ../CODE/ADMINISTRATION/VIEW
cp PHX/ADMINISTRATION/VIEW/BLOCK/*.pht ../CODE/ADMINISTRATION/VIEW/BLOCK
cp PHX/MODEL/*.phx ../CODE/MODEL
