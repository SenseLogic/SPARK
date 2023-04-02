call ..\define.bat
..\%TOOL%\PHOENIX\phoenix --extract style STYLE/ --extract script SCRIPT/ --trim --create ./ ../www/
copy SCRIPT\*.js ..\www\static\script\
call stylus STYLE/style.styl -o ../www/static
call stylus ADMINISTRATION/STYLE/administration_style.styl -o ../www/static
..\%TOOL%\RESYNC\resync --updated --changed --removed --added --emptied ../www/ C:/xampp/htdocs/
