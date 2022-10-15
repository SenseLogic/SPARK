for %%f in (static\video\article\*.mp4) do ..\..\..\..\TOOL\FFMPEG\bin\ffmpeg -i %%f -c:v libx264 -crf 30 -preset slow -c:a copy ..\www\static\video\article\%%~nf.mp4
pause
