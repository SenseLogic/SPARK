if not exist "..\www\static\video\%1" mkdir "..\www\static\video\%1"
for %%f in (static\video\%1\*.mp4) do (
    %TOOL%\REMIX\remix %5 %TOOL%\FFMPEG\bin\ffmpeg -y -i "%%f" -vf scale=%2:-1 -c:v libx264 -crf 30 -preset slow -c:a aac "..\www\static\video\%1\%%~nf.mp4"
    %TOOL%\REMIX\remix %5 %TOOL%\FFMPEG\bin\ffmpeg -y -i "%%f" -vf scale=%3:-1 -c:v libx264 -crf 30 -preset slow -c:a aac "..\www\static\video\%1\%%~nf.mp4.medium.mp4"
    %TOOL%\REMIX\remix %5 %TOOL%\FFMPEG\bin\ffmpeg -y -i "%%f" -vf scale=%4:-1 -c:v libx264 -crf 30 -preset slow -c:a aac "..\www\static\video\%1\%%~nf.mp4.small.mp4"
)
