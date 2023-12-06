#!/bin/sh
set -x
source ./define_tool.sh
cd DATABASE
./make.sh
cd ../CODE
./make.sh
