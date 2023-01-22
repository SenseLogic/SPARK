#!/bin/sh
set -x
source ./define.sh
cd DATABASE
./remake.sh
cd ../CODE
./make.sh
