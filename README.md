Symfony QT Backend
==================

The "Symfony QT Backend" is the CMS part of "qüestió de temps" WebApp.

Requeriments
------------

  * PHP 7.2.9 or higher;
  * and the [usual Symfony application requirements][2].

Installation
------------

To install all the packages just run:
```bash
cd my_project/
$ composer install
```

Usage
-----

This App is prepared to work with mysql database. Just follow the instruction in .env.example file to configure the connection to your own database.

Then run:
```bash
$ cd my_project/
$ php app/console doctrine:schema:update --force
```

This will create the tables in the database based on Entity files.

To start the server:
```bash
$ cd my_project/
$ symfony serve
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/` to use the built-in PHP web server or [configure a web server][3] like Nginx or Apache to run the application.

Tests
-----

Execute this command to run tests:

```bash
$ cd my_project/
$ ./bin/phpunit
```

[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/reference/requirements.html
[3]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
[4]: https://symfony.com/download