#!/bin/sh
set -x
sudo apt remove golang golang-go
sudo rm -R /usr/local/go
wget -c https://golang.org/dl/go1.15.4.linux-amd64.tar.gz
sudo tar -C /usr/local -xvzf go1.15.4.linux-amd64.tar.gz
rm go1.15.4.linux-amd64.tar.gz
export PATH=$PATH:/usr/local/go/bin
sudo apt install git dmd mysql-server mysql-client php php-mysql php-gd
sudo npm install -g npm
sudo npm install -g stylus
git --version
dmd --version
go version
node --version
npm --version
stylus --version
mkdir ~/PROJECT
cp -R ./ ~/PROJECT
cd ~/PROJECT
pwd
ls
echo === Press enter ===
read key
cd TOOL
git clone https://github.com/senselogic/BASIL.git
git clone https://github.com/senselogic/CYLUS.git
git clone https://github.com/senselogic/CYCLONE.git
git clone https://github.com/senselogic/FLEX.git
git clone https://github.com/senselogic/GENERIS.git
git clone https://github.com/senselogic/PHOENIX.git
git clone https://github.com/senselogic/RESYNC.git
git clone https://github.com/senselogic/SPARK.git
git clone https://github.com/senselogic/VISTA.git
chmod +x make.sh
chmod +x SPARK/PROJECT/update.sh
chmod +x SPARK/PROJECT/DATABASE/make.sh
chmod +x SPARK/PROJECT/CODE/make.sh
./make.sh
echo === Press enter ===
read key
mkdir -p ../SITE/TEST
cp -R SPARK/PROJECT ../SITE/TEST/TEST_SITE
cd ../SITE/TEST/TEST_SITE
./update.sh
echo === Press enter ===
read key
cd DATABASE
./make.sh
echo === Press enter ===
read key
cd ../CODE
./make.sh
pwd
echo === Open localhost:8080 in a web browser ===
./run.sh
