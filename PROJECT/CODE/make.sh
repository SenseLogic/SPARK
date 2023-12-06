#!/bin/sh
set -x
source ../define_tool.sh
$TOOL/PHOENIX/phoenix --extract style STYLE/ --extract script SCRIPT/ --trim --create ./ ../www/
cp SCRIPT/*.js ../www/static/script/
stylus STYLE/style.styl -o ../www/static
stylus ADMINISTRATION/STYLE/administration_style.styl -o ../www/static
$TOOL/RESYNC/resync --updated --changed --removed --added --emptied ../www/ /var/www/html/
