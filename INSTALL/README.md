# Installation instructions

## For Windows

* Install [Git](https://gitforwindows.org/)
* Install [DMD (using the MinGW setup option)](https://dlang.org/download.html)
* Install [Golang](https://golang.org/dl/)
* Install [Wampserver](https://www.wampserver.com/)
* Install [Node.js](https://nodejs.org/en/download/)
* Run the `install.bat` script from a command shell to install SPARK and its dependencies in `%UserProfile%\PROJECT`.

## For Linux

* Install [DMD](https://dlang.org/download.html)
* Install PHP and MySQL

```
sudo apt install mysql-server mysql-client php php-mysql php-gd
sudo mysql_secure_installation
```

* Install [Node.js](https://nodejs.org/en/download/)

```
curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
sudo apt install -y gcc g++ make nodejs
sudo npm install -g npm
```

* Run the `install.sh` script from a command shell to install SPARK and its dependencies in `~/PROJECT`.
