#!/bin/sh
set -x
source ../define_tool.sh
$TOOL/BASIL/basil --prefix remote_ --sql --exclude-command "drop schema" --exclude-command "create schema" spark_project.bs spark_project.bd
$TOOL/BASIL/basil --sql --phoenix --force-drop spark_project.bs spark_project.bd spark_project.bt
read key
$TOOL/CYCLONE/cyclone --driver mysql --host 127.0.0.1 --port 3306 --user root --password root spark_project.sql
cp PHX/index.phx ../CODE/
cp PHX/MODEL/*.phx ../CODE/MODEL
