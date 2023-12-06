copy favicon.svg ..\..\..\www\favicon.svg
%TOOL%\IMAGE_MAGICK\convert favicon.png -background none -resize 48x48 -density 48x48 -strip ../../../www/favicon.ico
%TOOL%\IMAGE_MAGICK\convert favicon.png -resize 48x48 -strip ../../../www/favicon-48x48.png
%TOOL%\IMAGE_MAGICK\convert favicon.png -resize 96x196 -strip ../../../www/favicon-96x96.png
%TOOL%\IMAGE_MAGICK\convert favicon.png -resize 144x144 -strip ../../../www/favicon-144x144.png
%TOOL%\IMAGE_MAGICK\convert favicon.png -resize 192x192 -strip ../../../www/favicon-180x180.png
%TOOL%\IMAGE_MAGICK\convert favicon.png -resize 192x192 -strip ../../../www/favicon-192x192.png
%TOOL%\IMAGE_MAGICK\convert favicon.png -resize 256x256 -strip ../../../www/favicon-256x256.png
%TOOL%\IMAGE_MAGICK\convert favicon.png -resize 384x384 -strip ../../../www/favicon-384x384.png
%TOOL%\IMAGE_MAGICK\convert favicon.png -resize 512x512 -strip ../../../www/favicon-512x512.png
pause
