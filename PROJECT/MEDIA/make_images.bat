for %%f in (static\image\article\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -resize 2073600@ -quality 70 -strip "..\www\static\image\article\%%~nf.jpg"
for %%f in (static\image\article\*.png) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -background white -alpha remove -alpha off -resize 2073600@ -quality 70 -strip "..\www\static\image\article\%%~nf.jpg"
for %%f in (static\image\contact\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -resize 2073600@ -quality 70 -strip "..\www\static\image\contact\%%~nf.jpg"
for %%f in (static\image\contact\*.png) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -background white -alpha remove -alpha off -resize 2073600@ -quality 70 -strip "..\www\static\image\contact\%%~nf.jpg"
for %%f in (static\image\article\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -resize 147456@ -quality 50 -strip "..\www\static\image\article\%%~nf.jpg.preload.jpg"
for %%f in (static\image\article\*.png) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -background white -alpha remove -alpha off -resize 147456@ -quality 50 -strip "..\www\static\image\article\%%~nf.jpg.preload.jpg"
for %%f in (static\image\contact\*.jpg) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -resize 147456@ -quality 50 -strip "..\www\static\image\contact\%%~nf.jpg.preload.jpg"
for %%f in (static\image\contact\*.png) do ..\..\..\..\TOOL\IMAGE_MAGICK\convert "%%f" -background white -alpha remove -alpha off -resize 147456@ -quality 50 -strip "..\www\static\image\contact\%%~nf.jpg.preload.jpg"
pause
