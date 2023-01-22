#!/bin/sh
set -x
source ./define.sh
#rm -fv CODE/FRAMEWORK/*.ph?
rm -fv CODE/STYLE/VISTA/vista*.*
rm -fv DATABASE/*.sql
rm -r DATABASE/PHX
rm -fv www/error.log
rm -fv www/php.log
rm -r www/ADMINISTRATION
rm -r www/CONTROLLER
rm -r www/FRAMEWORK
rm -r www/MODEL
rm -fv www/static/script/vista*.*
rm -r www/VIEW
