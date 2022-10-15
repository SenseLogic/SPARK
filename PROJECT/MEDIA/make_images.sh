#!/bin/sh
set -x
for f in static/image/article/*.*; do
    convert $f -resize 2073600@ -quality 70 -strip ../www/$f
done
for f in static/image/contact/*.*; do
    convert $f -resize 2073600@ -quality 70 -strip ../www/$f
done
for f in static/image/article/*.*; do
    convert $f -resize 147456@ -quality 50 -strip ../www/$f.preload.jpg
done
for f in static/image/contact/*.*; do
    convert $f -resize 147456@ -quality 50 -strip ../www/$f.preload.jpg
done
