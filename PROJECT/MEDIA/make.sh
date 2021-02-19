#!/bin/sh
set -x
for f in upload/image/*.jpg; do
    convert $f -quality 90 ../www/$f
done
convert favicon.png -resize 32x32 -colors 256 ../www/favicon.ico
