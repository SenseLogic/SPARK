#!/bin/sh
set -x
source ../define.sh
../$TOOL/BASIL/basil --sql --exclude-command "drop schema" --exclude-command "create schema" spark_project.bs spark_project.bd
cp spark_project.sql remote_spark_project.sql
cp spark_project_data.sql remote_spark_project_data.sql
cp spark_project_dump.sql remote_spark_project_dump.sql
../$TOOL/BASIL/basil --sql --phoenix --force-drop spark_project.bs spark_project.bd spark_project.bt
read key
../$TOOL/CYCLONE/cyclone mysql 127.0.0.1 3306 root root spark_project.sql
cp PHX/index.phx ../CODE/
cp PHX/MODEL/*.phx ../CODE/MODEL
