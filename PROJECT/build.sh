#!/bin/sh
set -x
source ./define.sh
cd DATABASE
./make.sh
cd ../CODE
./build.sh
