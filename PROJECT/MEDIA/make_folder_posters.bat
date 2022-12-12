if not exist "..\www\static\image\%1" mkdir "..\www\static\image\%1"
for %%f in (static\video\%1\*.mp4) do ..\..\..\..\TOOL\FFMPEG\bin\ffmpeg -y -i "%%f" -frames:v 1 "static\image\%1\%%~nf_video_background.png"
