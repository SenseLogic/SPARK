for %%f in (static\video\article\*.mp4) do ..\..\..\..\TOOL\FFMPEG\bin\ffmpeg -y -i %%f -frames:v 1 static\image\article\%%~nf_video_background.png
pause
