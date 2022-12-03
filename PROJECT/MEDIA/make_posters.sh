#!/bin/sh
set -x
for f in static/video/article/*.*; do
    ffmpeg -y -i $f -frames:v 1 -strip static/image/article/${f%.*}_video_background.png
done
