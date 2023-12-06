#!/bin/sh
set -x
source ../define_tool.sh
$TOOL/CYLUS/cylus --include "../www/static/style.css" --include "../www/VIEW//*.php" --unused --missing --verbose
