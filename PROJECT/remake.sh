#!/bin/sh
set -x
cd DATABASE
./remake.sh
cd ../CODE
./make.sh
