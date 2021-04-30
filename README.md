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

## Content

### Framework

It provides base functions to handle :

*   arrays
*   captchas
*   databases
*   errors
*   files
*   globals
*   translations
*   mails
*   objects
*   paths
*   random
*   requests
*   RSS feeds
*   sessions
*   strings
*   time
*   user roles

Phoenix source files are located in the **PROJECT/CODE/FRAMEWORK** folder, and have no external code dependencies.

The generated **PHP** files are located in the **PROJECT/www/FRAMEWORK** folder, and can be used independently.

### Template project

It provides base code for :

*   header and footer menus
*   contact form
*   legal notice
*   article carousel
*   article list
*   cookie consent banner
*   scroll down reminder
*   scroll top button

It has no external code dependency except from **VISTA**, a front-end framework.

Its build chain uses the following tools :

*   [Flex](https://github.com/senselogic/FLEX)
    *   to fix the placeholder identifiers when instantiating the project.
*   [Basil](https://github.com/senselogic/BASIL)
    *   to textually design the database schema and test data, and generate the SQL initialization scripts;
    *   to generate the request routing, database access, REST API and administration website code.
*   [Cyclone](https://github.com/senselogic/CYCLONE)
    *   to update the database schema and data on the development system.
*   [Phoenix](https://github.com/senselogic/PHOENIX)
    *   to compile back-end scripts into human-readable PHP code.
*   [Vista](https://github.com/senselogic/VISTA)
    *   as the Stylus and JavaScript front-end framework for the public and administration websites.
*   [Stylus](https://github.com/stylus/stylus)
    *   to compile the Stylus scripts into CSS code.
*   [Cylus](https://github.com/senselogic/CYLUS)
    *   to find unused and missing CSS classes.
*   [Phyx](https://github.com/senselogic/PHYX)
    *   to fix CSS declarations.
*   [Resync](https://github.com/senselogic/RESYNC)
    *   to update the website code and data on the development system.

## Installation

## On Windows

*   Install [Git](https://gitforwindows.org/)
*   Install [DMD (using the MinGW setup option)](https://dlang.org/download.html)
*   Install [Golang](https://golang.org/dl/)
*   Install [Node.js](https://nodejs.org/en/download/)
*   Install [Wampserver](https://www.wampserver.com/)
*   Run the `install.bat` script of the `SETUP` folder.
*   Spark and its dependencies are now installed in `%UserProfile%\PROJECT`.

## On Linux

*   Install [DMD](https://dlang.org/download.html)
*   Install [Node.js](https://nodejs.org/en/download/)

    ```
    curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
    sudo apt install -y gcc g++ make nodejs
    sudo npm install -g npm
    ```

*   Install PHP and MySQL

    ```
    sudo apt install mysql-server mysql-client php php-mysql php-gd
    sudo mysql_secure_installation
    ```

*   Run the `install.sh` script of the `SETUP` folder.
*   Spark and its dependencies are now installed in `~/PROJECT`.

## Instantiation

*   Copy the content of the **TOOL/SPARK/PROJECT** folder into a target folder of similar depth, for instance **SITE/TYRELL_CORPORATION/TYRELL_CORPORATION_SITE_2021**.

*   Edit the **fix.flex** file to change the project and article identifiers in their various forms :

    ```
    ReplaceText
        Spark Project
        Tyrell Corporation
    ReplaceText
        spark-project
        tyrell-corporation
    ReplaceText
        spark_project
        tyrell_corporation
    ReplaceText
        spark, project
        tyrell, corporation
    ReplaceText
        ARTICLE
        REPLICANT
    ReplaceText
        Articles
        Replicants
    ReplaceText
        Article
        Replicant
    ReplaceText
        articles
        replicants
    ReplaceText
        article
        replicant
    ```

*   Run the following commands :

    *   **On Linux**

        ```sh
        cd SITE/TYRELL_CORPORATION/TYRELL_CORPORATION_SITE_2021
        ./fix.sh
        ./update.sh
        cd DATABASE
        ./make.sh
        cd ../CODE
        ./make.sh
        ```

    *   **On Windows**

        ```sh
        cd SITE\TYRELL_CORPORATION\TYRELL_CORPORATION_SITE_2021
        fix
        update
        cd DATABASE
        make
        cd ..\CODE
        make
        ```

*   Open **localhost** in your web browser.

## Internationalization

Any string can be internationalized by separating translations using language specifiers :

```
Default language text¨de:German text¨fr:French text¨ru:Russian text...
```

They can contain HTML tags and entities.

Custom HTML tags can also be defined :

```
DefineOpenTag( 'div' );
DefineOpenTag( 'span' );
DefineAttributeTag( 'route', 'data-route' );
DefineOpenTag( 'a' );
DefineAttributeTag( 'href' );
DefineOpenTag( 'img' );
DefineAttributeTag( 'src' );
DefineColorTag( 'red' );
DefineColorTag( 'green', '#0F0' );
DefineStyleTag( 'color' );
DefineStyleTag( 'size', 'font-size' );
DefineStyleTag( 'weight', 'font-weight' );
```

```
<div<container>>DIV</div>
<span<button[route]home>>HOME</span>
<a<color-red[href]/home/introduction>>LINK</a>
<img<width-50% height-auto[src]/static/image/illustration.jpg>>
<red>RED</red>
<green>GREEN</green>
<color<#00F>>BLUE</color>
<size<3rem>>BIG</size>
<weight<100>>THIN</weight>
```

## Version

0.4

## Author

Eric Pelzer (ecstatic.coder@gmail.com).

## License

This project is licensed under the GNU Lesser General Public License version 3.

See the [LICENSE.md](LICENSE.md) file for details.
