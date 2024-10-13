if not exist "..\www\static\image\%1" mkdir "..\www\static\image\%1"
for %%f in (static\image\%1\*.*) do (
    %TOOL%\REMIX\remix %9 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize %2 -quality 55 -strip "..\www\static\image\%1\%%~nf.avif.huge.avif"
    %TOOL%\REMIX\remix %9 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize %3 -quality 55 -strip "..\www\static\image\%1\%%~nf.avif"
    %TOOL%\REMIX\remix %9 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize %4 -quality 55 -strip "..\www\static\image\%1\%%~nf.avif.big.avif"
    %TOOL%\REMIX\remix %9 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize %5 -quality 55 -strip "..\www\static\image\%1\%%~nf.avif.medium.avif"
    %TOOL%\REMIX\remix %9 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize %6 -quality 55 -strip "..\www\static\image\%1\%%~nf.avif.small.avif"
    %TOOL%\REMIX\remix %9 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize %7 -quality 55 -strip "..\www\static\image\%1\%%~nf.avif.tiny.avif"
    %TOOL%\REMIX\remix %9 %TOOL%\IMAGE_MAGICK\convert "%%f" -resize %8 -quality 30 -strip "..\www\static\image\%1\%%~nf.avif.preload.avif"
)
