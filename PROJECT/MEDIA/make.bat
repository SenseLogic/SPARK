for %%f in (static\image\test\*.*) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert %%f -resize 2073600@ -quality 70 ..\www\static\image\test\%%~nf.jpg
for %%f in (static\image\test\*.*) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert %%f -resize 147456@ -quality 50 ..\www\static\image\test\%%~nf.jpg.preload.jpg
pause
