#!/bin/sh
set -x
../../../../TOOL/BASIL/basil --sql --exclude-command "drop schema" --exclude-command "create schema" spark_project.bs text.bd language.bd page_type.bd home_page.bd article_page.bd articles_page.bd cookie_policy_page.bd legal_notice_page.bd contact_page.bd page_sub_page.bd block_category.bd block_type.bd text_block.bd image_block.bd text_and_image_block.bd user.bd
cp spark_project.sql remote_spark_project.sql
cp spark_project_data.sql remote_spark_project_data.sql
cp spark_project_dump.sql remote_spark_project_dump.sql
../../../../TOOL/BASIL/basil --sql --phoenix --force-drop spark_project.bs text.bd language.bd page_type.bd home_page.bd article_page.bd articles_page.bd cookie_policy_page.bd legal_notice_page.bd contact_page.bd page_sub_page.bd block_category.bd block_type.bd text_block.bd image_block.bd text_and_image_block.bd user.bd spark_project.bt administration.bt
read key
../../../../TOOL/CYCLONE/cyclone mysql 127.0.0.1 3306 root root spark_project.sql spark_project_data.sql
cp PHX/index.phx ../CODE/
cp PHX/ADMINISTRATION/CONTROLLER/*.phx ../CODE/ADMINISTRATION/CONTROLLER
cp PHX/ADMINISTRATION/STYLE/*.styl ../CODE/ADMINISTRATION/STYLE
cp PHX/ADMINISTRATION/VIEW/*.pht ../CODE/ADMINISTRATION/VIEW
cp PHX/ADMINISTRATION/VIEW/BLOCK/*.pht ../CODE/ADMINISTRATION/VIEW/BLOCK
cp PHX/MODEL/*.phx ../CODE/MODEL
