#!/bin/sh
set -x
for f in upload/image/*.jpg; do
    convert $f -quality 90 ../www/$f
done
