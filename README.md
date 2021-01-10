![](https://github.com/senselogic/SPARK/blob/master/LOGO/spark.png)

# Spark

Phoenix microframework and project template.

## Goals

### Simplicity and efficiency

Contrarily to huge frameworks like Laravel and Symphony which provide dozens of classes to manage both the web and database requests, Spark is simply a small
collection of reusable procedural functions wrapping and extending the PHP standard library in order to improve its ease of use.

### Readability and conciseness

Spark is implemented in the [Phoenix](https://github.com/senselogic/PHOENIX) language, which allows to develop PHP code with a readable and concise JavaScript-like syntax.

## Dependencies

The project template uses the following tools :

* [Phoenix](https://github.com/senselogic/PHOENIX)
    * to compile the Phoenix scripts into human-readable PHP code;
* [Basil](https://github.com/senselogic/BASIL)
    * to design the database schema and test data, and generate the SQL initialization scripts;
    * to generate the request routing, database access, REST API and administration website code.
* [Vista](https://github.com/senselogic/VISTA)
    * as the Stylus and JavaScript front-end framework for the administration website.
* [Stylus](https://github.com/stylus/stylus)
    * to compile the Stylus scripts into CSS code.
* [Resync](https://github.com/senselogic/RESYNC)
    * to update the website code and data on the development system.
* [Cyclone](https://github.com/senselogic/CYCLONE)
    * to update the database schema and data on the development system.

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
