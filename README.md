# simple php router and autoloader

![](https://img.shields.io/badge/licence-free-green.svg) ![](https://img.shields.io/badge/frameworks-none-green.svg)

About as simple as it gets and still be useful

![](demo.gif)

## how does it work

`autoloader.php` scans all files/folders within `/classes` (or your choice of folder) for required classes, loads them, and executes a method called `init()`.

`router.php` translates the route in a browser to a php class and executes the `init()` method in that class.

## requirements

php 7.x

## installation

* copy files to a directory of your choice
* open the directory with a terminal/console/cli
* start with `php -S localhost:4567`
* use a browser to navigate to `localhost:4567`
* try the routes in lines 14 - 16 of router.php:
	* localhost:4568
	* localhost:4568/about
	* localhost:4568/enrol

## structure

Looks like this:
```
-------------------------------------------------------------------------------
 Language            Files        Lines         Code     Comments       Blanks
-------------------------------------------------------------------------------
 HTML                    3           40           30            0           10
 Markdown                1           54           54            0            0
 PHP                     9          226          120           77           29
-------------------------------------------------------------------------------
 Total                  13          320          204           77           39
.
├── classes
│   ├── autoloader.php
│   ├── pages
│   │   ├── getabout.php
│   │   ├── gethome.php
│   │   ├── getregister.php
│   │   └── getthanks.php
│   └── router.php
├── frontend
│   ├── about.html
│   ├── fourohfour.html
│   ├── index.html
│   ├── register.php
│   └── thanks.php
├── index.php
└── README.md
 ```
Help yourself to the code, and if it's of any use then a star would be nice (top right...)
