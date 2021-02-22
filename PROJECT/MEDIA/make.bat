for %%f in (upload\image\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert %%f -quality 90 ..\www\upload\image\%%~nf.jpg
pause
