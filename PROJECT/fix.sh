#!/bin/sh
set -x
source ./define.sh
mv MEDIA/static/image/article MEDIA/static/image/article
mv www/static/image/article www/static/image/article
mv www/static/video/article www/static/video/article
read key
$TOOL/FLEX/flex fix.flex
