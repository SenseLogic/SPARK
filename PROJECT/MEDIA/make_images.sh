#!/bin/sh
set -x
for f in static/image/article/*.*; do
    convert "$f" -background white -alpha remove -alpha off -resize 2073600@ -quality 70 -strip "../www/$f"
    convert "$f" -background white -alpha remove -alpha off -resize 921600@ -quality 70 -strip "../www/$f.medium.jpg"
    convert "$f" -background white -alpha remove -alpha off -resize 230400@ -quality 70 -strip "../www/$f.small.jpg"
    convert "$f" -background white -alpha remove -alpha off -resize 147456@ -quality 50 -strip "../www/$f.preload.jpg"
done
for f in static/image/contact/*.*; do
    convert "$f" -background white -alpha remove -alpha off -resize 2073600@ -quality 70 -strip "../www/$f"
    convert "$f" -background white -alpha remove -alpha off -resize 921600@ -quality 70 -strip "../www/$f.medium.jpg"
    convert "$f" -background white -alpha remove -alpha off -resize 230400@ -quality 70 -strip "../www/$f.small.jpg"
    convert "$f" -background white -alpha remove -alpha off -resize 147456@ -quality 50 -strip "../www/$f.preload.jpg"
done
