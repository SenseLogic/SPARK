for %%f in (static\image\test\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert %%f -quality 90 ..\www\static\image\test\%%~nf.jpg
pause
