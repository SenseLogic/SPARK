for %%f in (upload\image\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert %%f -quality 90 ..\www\upload\image\%%~nf.jpg
..\..\..\..\TOOL\IMAGE_MAGICK\convert favicon.png -resize 32x32 -colors 256 ..\www\favicon.ico
pause
