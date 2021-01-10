![](https://github.com/senselogic/SPARK/blob/master/LOGO/spark.png)

# Spark

Phoenix microframework and project template.

## Goals

### Efficiency

Contrarily to huge frameworks like Laravel and Symphony which provide dozens of classes to manage both the web and database requests, Spark is simply a small
collection of reusable procedural functions wrapping and extending the PHP standard library in order to improve its ease of use.

### Readability

Spark is implemented in the [Phoenix](https://github.com/senselogic/PHOENIX) language, which allows to develop PHP code with a concise and readable JavaScript-like syntax.

Moreover, all the framework code follows the rules specified in the [Coda](https://github.com/senselogic/CODA) coding standard, which requires that each component is implemented
using simple and efficient code which can be understood just by itself, with the least possible amount of comments.

## Dependencies

The project template uses the following tools :

* [Basil](https://github.com/senselogic/BASIL)
    * to design the database schema and data, and generate the SQL scripts;
    * to generate the routing, database access, REST API and administration website code.
* [Vista](https://github.com/senselogic/VISTA)
    * to use as the default CSS and JavaScript framework for the administration website.
* [Resync](https://github.com/senselogic/RESYNC)
    * To update the website code and data on the development system.
* [Cyclone](https://github.com/senselogic/CYCLONE)
    * To update the database schema and data on the development system.

## Installation

## For Windows

* Install [Git](https://gitforwindows.org/)
* Install [DMD (using the MinGW setup option)](https://dlang.org/download.html)
* Install [Golang](https://golang.org/dl/)
* Install [Node.js](https://nodejs.org/en/download/)
* Install [Wampserver](https://www.wampserver.com/)
* Run the `install.bat` script of the `SETUP` folder.
* Spark and its dependencies are now installed in `%UserProfile%\PROJECT`.

## For Linux

* Install [DMD](https://dlang.org/download.html)
* Install [Node.js](https://nodejs.org/en/download/)

```
curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
sudo apt install -y gcc g++ make nodejs
sudo npm install -g npm
```

* Install PHP and MySQL

```
sudo apt install mysql-server mysql-client php php-mysql php-gd
sudo mysql_secure_installation
```

* Run the `install.sh` script of the `SETUP` folder.
* Spark and its dependencies are now installed in `~/PROJECT`.

## Version

1.0

## Author

Eric Pelzer (ecstatic.coder@gmail.com).

## License

This project is licensed under the GNU Lesser General Public License version 3.

See the [LICENSE.md](LICENSE.md) file for details.
