#!/bin/sh
set -x
source ../define_tool.sh
$TOOL/PHYX/phyx --newline --include ".//*.phx"
$TOOL/PHYX/phyx --newline --media --style --include ".//*.pht" --include ".//*.styl"
