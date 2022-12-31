if not exist "..\www\static\video\%1" mkdir "..\www\static\video\%1"
for %%f in (static\video\%1\*.mp4) do ..\..\..\..\TOOL\FORGE\forge ..\..\..\..\TOOL\FFMPEG\bin\ffmpeg -y -i "%%f" -c:v libx264 -crf 30 -preset slow -c:a copy "..\www\static\video\%1\%%~nf.mp4"
