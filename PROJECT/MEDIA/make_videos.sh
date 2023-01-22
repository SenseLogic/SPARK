#!/bin/sh
set -x
source ../define.sh
for f in static/video/article/*.*; do
    ffmpeg -y -i $f -c:v libx264 -crf 30 -preset slow -c:a copy ../www/$f
done
