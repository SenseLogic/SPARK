call ..\define.bat
if not exist "..\www\static\video\%1" mkdir "..\www\static\video\%1"
for %%f in (static\video\%1\*.mp4) do ..\%TOOL%\REMIX\remix %2 ..\%TOOL%\FFMPEG\bin\ffmpeg -y -i "%%f" -vf scale=1920:-1 -c:v libx264 -crf 30 -preset slow -c:a aac "..\www\static\video\%1\%%~nf.mp4"
for %%f in (static\video\%1\*.mp4) do ..\%TOOL%\REMIX\remix %2 ..\%TOOL%\FFMPEG\bin\ffmpeg -y -i "%%f" -vf scale=1280:-1 -c:v libx264 -crf 30 -preset slow -c:a aac "..\www\static\video\%1\%%~nf.mp4.medium.mp4"
for %%f in (static\video\%1\*.mp4) do ..\%TOOL%\REMIX\remix %2 ..\%TOOL%\FFMPEG\bin\ffmpeg -y -i "%%f" -vf scale=640:-1 -c:v libx264 -crf 30 -preset slow -c:a aac "..\www\static\video\%1\%%~nf.mp4.small.mp4"
