call ..\define.bat
if not exist "..\www\static\image\%1" mkdir "..\www\static\image\%1"
for %%f in (static\video\%1\*.mp4) do (
    ..\%TOOL%\REMIX\remix %2 ..\%TOOL%\FFMPEG\bin\ffmpeg -i "%%f" -y -ss 00:00:00 -t 00:00:10 -vf "scale=320:180,fps=12,palettegen" "static\video\%1\%%~nf_palette.png"
    ..\%TOOL%\REMIX\remix %2 ..\%TOOL%\FFMPEG\bin\ffmpeg -i "%%f" -y -i "static\video\%1\%%~nf_palette.png" -f gif -ss 00:00:00 -t 00:00:10 -lavfi "scale=320:180,fps=12,paletteuse=dither=sierra2" -loop 0 "..\www\static\image\%1\%%~nf_video_thumbnail.gif"
    ..\%TOOL%\REMIX\remix %2 ..\%TOOL%\IMAGE_MAGICK\convert "..\www\static\image\%1\%%~nf_video_thumbnail.gif[0]" -background white -alpha remove -alpha off -resize %5@ -quality 50 -strip "..\www\static\image\%1\%%~nf_video_thumbnail.gif.preload.jpg"
    )
