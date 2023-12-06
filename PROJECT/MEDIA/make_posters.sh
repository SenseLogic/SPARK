#!/bin/sh
set -x
source ../define_tool.sh
for f in static/video/article/*.*; do
    ffmpeg -y -i $f -frames:v 1 static/image/article/${f%.*}_video_background.png
done
