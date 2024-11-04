if not exist "..\www\static\image\%1" mkdir "..\www\static\image\%1"
for %%f in (static\image\%1\*.*) do (
    %TOOL%\REMIX\remix %2 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize 360x720 -quality 30 -filter Lanczos -strip "..\www\static\image\%1\%%~nf.avif.preload.avif"
    %TOOL%\REMIX\remix %2 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize 480x960 -quality 55 -filter Lanczos -strip "..\www\static\image\%1\%%~nf.avif.tiny.avif"
    %TOOL%\REMIX\remix %2 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize 640x1280 -quality 55 -filter Lanczos -strip "..\www\static\image\%1\%%~nf.avif.small.avif"
    %TOOL%\REMIX\remix %2 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize 960x1920 -quality 55 -filter Lanczos -strip "..\www\static\image\%1\%%~nf.avif.medium.avif"
    %TOOL%\REMIX\remix %2 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize 1280x2560 -quality 55 -filter Lanczos -strip "..\www\static\image\%1\%%~nf.avif.wide.avif"
    %TOOL%\REMIX\remix %2 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize 1920x3840 -quality 55 -filter Lanczos -strip "..\www\static\image\%1\%%~nf.avif"
    %TOOL%\REMIX\remix %2 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize 2560x5120 -quality 55 -filter Lanczos -strip "..\www\static\image\%1\%%~nf.avif.big.avif"
    %TOOL%\REMIX\remix %2 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize 3840x7680 -quality 55 -filter Lanczos -strip "..\www\static\image\%1\%%~nf.avif.huge.avif"
)
