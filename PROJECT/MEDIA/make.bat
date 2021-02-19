for %%f in (static\image\xxx\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert %%f -quality 90 ..\www\static\image\xxx\%%~nf.jpg
..\..\..\..\TOOL\IMAGE_MAGICK\convert favicon.png -resize 32x32 -colors 256 ..\www\favicon.ico
pause
