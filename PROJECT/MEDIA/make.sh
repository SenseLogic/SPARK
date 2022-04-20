#!/bin/sh
set -x
for f in static/image/test/*.*; do
    convert $f -resize 2073600@ -quality 70 ../www/$f
done
for f in static/image/test/*.*; do
    convert $f -resize 147456@ -quality 50 ../www/$f.preload.jpg
done
