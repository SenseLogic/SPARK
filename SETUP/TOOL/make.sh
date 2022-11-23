#!/bin/sh
set -x
dmd --version
go version
cd BASIL
git pull origin master
dmd -m64 basil.d
cd ..
cd CYLUS
git pull origin master
dmd -m64 cylus.d
cd ..
cd FLEX
git pull origin master
dmd -m64 flex.d
cd ..
cd GENERIS
git pull origin master
dmd -m64 generis.d
cd ..
cd PHOENIX
git pull origin master
dmd -m64 phoenix.d
cd ..
cd RESYNC
git pull origin master
dmd -m64 resync.d
del resync.obj
cd ..
cd SPARK
git pull origin master
cd ..
cd VISTA
git pull origin master
cd ..
cd CYCLONE
git pull origin master
../GENERIS/generis --process ./ ./ --trim --join
go get -u github.com/go-sql-driver/mysql
go get -u github.com/gocql/gocql
go build cyclone.go
cd ..
