mkdir CODE\STYLE\VISTA\
del /Q CODE\STYLE\VISTA\vista*.*
copy %TOOL%\VISTA\CODE\STYLUS\*.* CODE\STYLE\VISTA\
mkdir www\static\script\
del /Q www\static\script\vista*.*
copy %TOOL%\VISTA\CODE\JAVASCRIPT\*.* www\static\script\
