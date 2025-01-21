if not exist "..\www\static\image\%1" mkdir "..\www\static\image\%1"
for %%f in (static\video\%1\*.mp4) do (
    %TOOL%\REMIX\remix %2 %TOOL%\FFMPEG\bin\ffmpeg -i "%%f" -y -ss 00:00:00 -t 00:00:10 -loop 0 -an -vf "scale=320:180,fps=12" -c:v libaom-av1 -pix_fmt yuv420p -crf 30 -b:v 0 "..\www\static\image\%1\%%~nf_video_thumbnail.avif"
    %TOOL%\REMIX\remix %2 %TOOL%\IMAGE_MAGICK\magick "..\www\static\image\%1\%%~nf_video_thumbnail.avif" -resize 360x720 -quality 30 -filter Lanczos -strip "..\www\static\image\%1\%%~nf_video_thumbnail.avif.preload.avif"
)
