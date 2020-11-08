dmd --version
go version
pause
cd BASIL
git pull origin master
dmd -m64 -L/Brepro basil.d
del basil.obj
cd ..
cd GENERIS
git pull origin master
dmd -m64 -L/Brepro generis.d
del generis.obj
cd ..
cd PHOENIX
git pull origin master
dmd -m64 -L/Brepro phoenix.d
del phoenix.obj
cd ..
cd RESYNC
git pull origin master
dmd -m64 -L/Brepro resync.d
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
..\GENERIS\generis --process ./ ./ --trim --join
go get -u github.com/go-sql-driver/mysql
go get -u github.com/gocql/gocql
go build cyclone.go
cd ..
pause
