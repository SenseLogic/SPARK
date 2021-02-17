for %%f in (static\image\xxx\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert %%f -quality 90 ..\www\static\image\xxx\%%~nf.jpg
pause
