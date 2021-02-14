#!/bin/sh
set -x
../../../../TOOL/BASIL/basil --sql --exclude-command "drop schema" --exclude-command "create schema" spark.bs spark.bd
cp spark.sql remote_spark.sql
cp spark_data.sql remote_spark_data.sql
cp spark_dump.sql remote_spark_dump.sql
../../../../TOOL/BASIL/basil --sql --phoenix --force-drop spark.bs spark.bd spark.bt administration.bt
read key
../../../../TOOL/CYCLONE/cyclone mysql 127.0.0.1 3306 root root spark.sql spark_data.sql
cp PHX/index.phx ../CODE/
cp PHX/ADMINISTRATION/CONTROLLER/*.phx ../CODE/ADMINISTRATION/CONTROLLER
cp PHX/ADMINISTRATION/VIEW/*.pht ../CODE/ADMINISTRATION/VIEW
cp PHX/MODEL/*.phx ../CODE/MODEL
