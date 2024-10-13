if not exist "..\www\static\image\%1" mkdir "..\www\static\image\%1"
for %%f in (static\video\%1\*.mp4) do (
    %TOOL%\REMIX\remix %3 %TOOL%\FFMPEG\bin\ffmpeg -i "%%f" -y -ss 00:00:00 -t 00:00:10 -vf "scale=320:180,fps=12" -loop 0 -an -vcodec libwebp -lossless 0 -q:v 50 -compression_level 6 -preset default -an -vsync 0 "..\www\static\image\%1\%%~nf_video_thumbnail.webp"
    %TOOL%\REMIX\remix %3 %TOOL%\IMAGE_MAGICK\convert "..\www\static\image\%1\%%~nf_video_thumbnail.webp[0]" -resize %2 -quality 30 -strip "..\www\static\image\%1\%%~nf_video_thumbnail.webp.preload.avif"
)
