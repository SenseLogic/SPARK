for %%f in (static\image\%1\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -resize 2073600@ -quality 70 -strip "..\www\static\image\%1\%%~nf.jpg"
for %%f in (static\image\%1\*.png) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -background white -alpha remove -alpha off -resize 2073600@ -quality 70 -strip "..\www\static\image\%1\%%~nf.jpg"
for %%f in (static\image\%1\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -resize 147456@ -quality 50 -strip "..\www\static\image\%1\%%~nf.jpg.preload.jpg"
for %%f in (static\image\%1\*.png) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -background white -alpha remove -alpha off -resize 147456@ -quality 50 -strip "..\www\static\image\%1\%%~nf.jpg.preload.jpg"
