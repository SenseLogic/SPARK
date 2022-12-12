if not exist "..\www\static\video\%1" mkdir "..\www\static\video\%1"
for %%f in (static\video\%1\*.mp4) do (
    ..\..\..\..\TOOL\FFMPEG\bin\ffmpeg -i "%%f" -y -ss 00:00:00 -t 00:00:10 -vf "scale=320:180,fps=12,palettegen" "palette.png"
    ..\..\..\..\TOOL\FFMPEG\bin\ffmpeg -i "%%f" -y -i "palette.png" -f gif -ss 00:00:00 -t 00:00:10 -lavfi "scale=320:180,fps=12,paletteuse=dither=sierra2" -loop 0 "..\www\static\video\%1\%%~nf_video_thumbnail.gif"
    )
del /q palette.png
