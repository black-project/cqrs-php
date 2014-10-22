CQRS PHP
=======

__CQRS in PHP__ is a simple project (a folder structure) for your project build with [Domain Driven Design](http://dddcommunity.org/).

[![Latest Stable Version](https://poser.pugx.org/black/cqrs-php/v/stable.png)](https://packagist.org/packages/black/cqrs-php)
[![Total Downloads](https://poser.pugx.org/black/cqrs-php/downloads.png)](https://packagist.org/packages/black/cqrs-php)

Installation
------------

The recomanded way to install CQRS in PHP is through [Composer](http://getcomposer.org/):

```json
{
    "require": {
        "black/cqrs-php": "@stable"
    }
}
```

__Protip:__ You should browse the [`black/cqrs-php`](https://packagist.org/packages/black/cqrs-php) page to choose a stable version to use, avoid the `@stable` meta
constraint.

Why?
----

First, I want to create a folder structure for my continuous project based on semantic. This small library is a good
start for my project and, even if some parts of this integration versus DDD rules are questionable, this work will work for
a lot a project.

Usage
-----

This project is a simple folder structure with interfaces (with simple contracts). Follow this structure and your project
 will follow DDD (not exactly true but your design will be fine).


Contributing
------------

This project is a work in progress so don't hesitate to see CONTRIBUTING file and submit your PR.

Credits
-------

The code is heavily inspired by [Benjamin Eberlei](http://www.whitewashing.de/) blog posts who did a very great job on many projects (including
[Doctrine](http://www.doctrine-project.org/) and [litecqrs-php](https://github.com/beberlei/litecqrs-php).

This README is heavily inspired by [Hateoas](https://github.com/willdurand/Hateoas) library by the great [@willdurand](https://github.com/willdurand).
This guy needs your [PR](http://williamdurand.fr/2014/07/02/resting-with-symfony-sos/) for the sake of the REST in PHP.

Alexandre "pocky" Balmes [alexandre@lablackroom.com](mailto:alexandre+github@lablackroom.com). 
Send me [Flattrs](https://flattr.com/profile/alexandre.balmes) if you love my work, [buy me gift](http://www.amazon.fr/registry/wishlist/3OR3EENRA5TSK)
or hire me!


License
-------
`CQRS in PHP` is released under the MIT License. See the bundled LICENSE file for details.
