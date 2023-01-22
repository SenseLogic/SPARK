call define.bat
rem del /Q CODE\FRAMEWORK\*.ph?
del /Q CODE\STYLE\VISTA\vista*.*
del /Q DATABASE\*.sql
rmdir /Q /S DATABASE\PHX
del /Q www\error.log
del /Q www\php.log
rmdir /Q /S www\ADMINISTRATION
rmdir /Q /S www\CONTROLLER
rmdir /Q /S www\FRAMEWORK
rmdir /Q /S www\MODEL
del /Q www\static\script\vista*.*
rmdir /Q /S www\VIEW
pause
