#!/bin/sh
set -x
for f in static/image/test/*.*; do
    convert $f -quality 90 ../www/$f
done
