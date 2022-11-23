#!/bin/sh
set -x
cd DATABASE
./make.sh
cd ../CODE
./make.sh
