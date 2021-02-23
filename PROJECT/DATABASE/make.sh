#!/bin/sh
set -x
../../../../TOOL/BASIL/basil --sql --exclude-command "drop schema" --exclude-command "create schema" spark_project.bs spark_project.bd
cp spark_project.sql remote_spark_project.sql
cp spark_project_data.sql remote_spark_project_data.sql
cp spark_project_dump.sql remote_spark_project_dump.sql
../../../../TOOL/BASIL/basil --sql --phoenix --force-drop spark_project.bs spark_project.bd spark_project.bt administration.bt
read key
../../../../TOOL/CYCLONE/cyclone mysql 127.0.0.1 3306 root root spark_project.sql spark_project_data.sql
cp PHX/index.phx ../CODE/
cp PHX/ADMINISTRATION/CONTROLLER/*.phx ../CODE/ADMINISTRATION/CONTROLLER
cp PHX/ADMINISTRATION/VIEW/*.pht ../CODE/ADMINISTRATION/VIEW
cp PHX/MODEL/*.phx ../CODE/MODEL
