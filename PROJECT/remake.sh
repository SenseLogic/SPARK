#!/bin/sh
set -x
source ./define_tool.sh
cd DATABASE
./remake.sh
cd ../CODE
./make.sh
