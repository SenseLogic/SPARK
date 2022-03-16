![](https://github.com/senselogic/SPARK/blob/master/LOGO/spark.png)

# Spark

Phoenix microframework and project template.

## Goals

### Simplicity and efficiency

Unlike huge frameworks like Laravel and Symphony which use classes to manage both the web and database requests,
Spark is just a small collection of reusable procedural functions wrapping and extending the PHP standard library in order to improve its ease of use.

### Autonomy and maintainability

The PHP framework has no external dependencies, and can be used without any of the build tools.

### Readability and conciseness

Spark is implemented in the [Phoenix](https://github.com/senselogic/PHOENIX) language, which is directly translated into PHP code.
This allows to develop modular PHP code with a much readable and concise JavaScript-like syntax.

## Microframework

It provides **base functions** for :

*   errors
*   globals
*   sessions
*   objects
*   arrays
*   strings
*   paths
*   translations
*   time
*   files
*   buffers
*   requests
*   queries
*   mails
*   feeds
*   users
*   images
*   captchas

The source files are located in the **PROJECT/CODE/FRAMEWORK** folder.

The generated **PHP** files are located in the **PROJECT/www/FRAMEWORK** folder, and can be used independently of the Phoenix compiler.

## Template project

It provides a starting version of :

*   the **public website** with :
    *   header menu
    *   footer menu
    *   contact form
    *   captcha validation
    *   legal notice
    *   article carousel
    *   article list
    *   article
    *   cookie consent banner
    *   scroll down reminder
    *   scroll top button
*   the **administration website** with :
    *   login
    *   table menu
    *   table view
    *   table filter
    *   card view
    *   card filter
    *   element view
    *   element creation
    *   element editing
    *   element removal

Both are fully functional, but mostly unstyled on purpose.

The template files are located in the **PROJECT** folder, and have no external dependencies except **VISTA**, a minimalistic front-end framework.

The following tools are thus not necessary per se, but are very useful to **automate** many frequent development tasks :

*   [Flex](https://github.com/senselogic/FLEX)
    *   fixes the placeholder identifiers when instantiating the project.
*   [Basil](https://github.com/senselogic/BASIL)
    *   compiles the database schema and test data into SQL initialization scripts;
    *   generates the request routing, database access, REST API and administration website code.
*   [Cyclone](https://github.com/senselogic/CYCLONE)
    *   updates the database schema and data on the development system.
*   [Phoenix](https://github.com/senselogic/PHOENIX)
    *   compiles Phoenix scripts into human-readable PHP code.
*   [Vista](https://github.com/senselogic/VISTA)
    *   provides CSS styling and JavaScript tools for both the public and administration websites.
*   [Phyx](https://github.com/senselogic/PHYX)
    *   fixes Stylus declarations.
*   [Stylus](https://github.com/stylus/stylus)
    *   compiles Stylus scripts into CSS code.
*   [Cylus](https://github.com/senselogic/CYLUS)
    *   finds unused and missing CSS classes in the PHP code.
*   [Resync](https://github.com/senselogic/RESYNC)
    *   updates the website code and data on the development system.

## Tools installation

The following instructions describe how to install all the above tools on Windows and Linux platforms.

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

## Template instantiation

*   Copy the content of the **~/PROJECT/TOOL/SPARK/PROJECT** folder into a target folder of identical depth under the same root folder,
    for instance **~/PROJECT/SITE/TYRELL_CORPORATION/TYRELL_CORPORATION_SITE_2021**.

*   Edit the **fix.flex** file to change the project and article identifiers in all their forms :

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
        cd ~/PROJECT/SITE/TYRELL_CORPORATION/TYRELL_CORPORATION_SITE_2021
        ./fix.sh
        ./update.sh
        ./make.sh
        ```

    *   **On Windows**

        ```sh
        cd \PROJECT\SITE\TYRELL_CORPORATION\TYRELL_CORPORATION_SITE_2021
        fix
        update
        make
        ```

*   Open **localhost** in your web browser.

## Internationalization

Any string can be internationalized by separating translations with **language specifiers** :

```
Default language text¨de:German text¨fr:French text¨ru:Russian text...
```

Strings can also contain any HTML **tag** or **entity**.

**Custom HTML tags** can be defined :

```
DefineLineTag( '! ', '<div class="paragraph title-1">', '</div>' );
DefineLineTag( '!! ', '<div class="paragraph title-2">', '</div>' );
DefineLineTag( '!!! ', '<div class="paragraph title-3">', '</div>' );
DefineLineTag( '!!!! ', '<div class="paragraph title-4">', '</div>' );
DefineLineTag( '- ', '<div class="paragraph dash-1">', '</div>' );
DefineLineTag( '  - ', '<div class="paragraph dash-2">', '</div>' );
DefineLineTag( '    - ', '<div class="paragraph dash-3">', '</div>' );
DefineLineTag( '      - ', '<div class="paragraph dash-4">', '</div>' );
DefineLineTag( '* ', '<div class="paragraph bullet-1">', '</div>' );
DefineLineTag( '  * ', '<div class="paragraph bullet-2">', '</div>' );
DefineLineTag( '    * ', '<div class="paragraph bullet-3">', '</div>' );
DefineLineTag( '      * ', '<div class="paragraph bullet-4">', '</div>' );
DefineLineTag( '', '<div class="paragraph">', '</div>' );

DefineDualTag( '**', '<b>', '</b>' );
DefineDualTag( '%%', '<i>', '</i>' );
DefineDualTag( '__', '<u>', '</u>' );
DefineDualTag( ',,', '<sub>', '</sub>' );
DefineDualTag( '^^', '<sup>', '</sup>' );

DefineTag( '§', '<br>' );
DefineTag( '[[[', '<table>' );
DefineTag( ']]]', '</table>' );
DefineTag( '[[', '<tr><td>' );
DefineTag( '||', '</td><td>' );
DefineTag( ']]', '</td></tr>' );
DefineTag( '((', '<a href="' );
DefineTag( ')(', '">' );
DefineTag( '))', '</a>' );

DefineColorTag( 'red' );
DefineColorTag( 'green', '#0F0' );
DefineStyleTag( 'color' );
DefineStyleTag( 'size', 'font-size' );
DefineStyleTag( 'weight', 'font-weight' );
```

```
! Title

- item

  * item

  * item

- item

  * item

  * item

!! Subtitle

**Bold** %%italic%% __underlined__ ,,subscript,, ^^superscript^^:

[[[
[[ Fruit || Vegetable ]]
[[ apple || potato ]]
[[ orange || carrot ]]
[[ kiwi || broccoli ]]
]]]

For more information : ((http://www.wikipedia.com)(Wikipedia)).

!! Subtitle

<red>RED</red>
<green>GREEN</green>
<color<#00F>>BLUE</color>
<size<3rem>>BIG</size>
<weight<100>>THIN</weight>
```

## Version

0.5

## Author

Eric Pelzer (ecstatic.coder@gmail.com).

## License

This project is licensed under the GNU Lesser General Public License version 3.

See the [LICENSE.md](LICENSE.md) file for details.
