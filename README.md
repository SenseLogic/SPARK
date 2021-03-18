![](https://github.com/senselogic/SPARK/blob/master/LOGO/spark.png)

# Spark

Phoenix microframework and project template.

## Goals

### Simplicity and efficiency

Unlike huge frameworks like Laravel and Symphony which use classes to manage both the web and database requests,
Spark is just a small collection of reusable procedural functions wrapping and extending the PHP standard library in order to improve its ease of use.

### Readability and conciseness

Spark is implemented in the [Phoenix](https://github.com/senselogic/PHOENIX) language,
which allows to develop modular PHP code with a readable and concise JavaScript-like syntax.

## Dependencies

The project template uses the following tools :

* [Flex](https://github.com/senselogic/FLEX)
    * to fix the project and table names.
* [Basil](https://github.com/senselogic/BASIL)
    * to design the database schema and test data, and generate the SQL initialization scripts;
    * to generate the request routing, database access, REST API and administration website code.
* [Cyclone](https://github.com/senselogic/CYCLONE)
    * to update the database schema and data on the development system.
* [Phoenix](https://github.com/senselogic/PHOENIX)
    * to compile the Phoenix scripts into human-readable PHP code.
* [Vista](https://github.com/senselogic/VISTA)
    * as the Stylus and JavaScript front-end framework for the administration website.
* [Stylus](https://github.com/stylus/stylus)
    * to compile the Stylus scripts into CSS code.
* [Cylus](https://github.com/cylus/cylus)
    * to find unused and missing CSS classes.
* [Resync](https://github.com/senselogic/RESYNC)
    * to update the website code and data on the development system.

## Internationalization

Strings can be internationalized by using language separators :

```
Default language text¨de:German text¨fr:French text¨ru:Russian text...
```

They can contain both HTML and BBCode-like tags :

* `[amp]` : ampersand character (`&`)
* `[lt]` : lower-than character (`<`)
* `[gt]` : greater-than character (`>`)
* `[lsb]` : left square bracket character (`[`)
* `[rsb]` : right square bracket character (`]`)
* `[lcb]` : left curly bracket character (`{`)
* `[rcb]` : right curly bracket character (`}`)
* `[nbsp]` : non breakable space
* `[br]` : line break
* `[div]`, `[div[` : div opening tag
* `[/div]` : div closing tag
* `[span]`, `[span[` : span opening tag
* `[/span]` : span closing tag
* `[p]`, `[p[` : paragraph opening tag
* `[/p]` : paragraph closing  tag
* `[ul]`, `[ul[` : unordered list opening tag
* `[/ul]` : unordered list closing tag
* `[li]`, `[li[` : line opening tag
* `[/li]` : line closing tag
* `[a[` : anchor opening tag
* `[/a]` : anchor closing tag
* `[href]` : anchor `href` attribute
* `[img[` : image tag
* `[src]` : image `src` attribute
* `[color[` : colored text opening tag
* `[/color]` : colored text closing tag
* `]]` : end of opening tag
* `[b]` : bold text opening tag
* `[/b]` : bold text closing tag
* `[i]` : italic text opening tag
* `[/i]` : italic text closing tag

Open tags can be followed by CSS class names and some attributes :

```
[img[width-50%[src]/static/image/test.jpg]][br]
This [color[green]]green text[/color] is followed by a [a[[href]/view#section]]link[/a].
```

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

0.4

## Author

Eric Pelzer (ecstatic.coder@gmail.com).

## License

This project is licensed under the GNU Lesser General Public License version 3.

See the [LICENSE.md](LICENSE.md) file for details.
