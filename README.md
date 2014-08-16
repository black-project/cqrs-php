CQRS PHP
=======

__CQRS in PHP__ is a simple project (a folder structure) for your project build with [Domain Drive Design][1].

Installation
------------

The recomanded way to install CQRS in PHP is through [Composer][2]:

```json
{
    "require": {
        "black/cqrs-php": "@stable"
    }
}
```

__Protip:__ You should browse the [`black/cqrs-php`][4] page to choose a stable version to use, avoid the `@stable` meta
constraint.

Why?
----

First, I want to create a folder structure for my continuous project based on semantic. This small library is a good
start for my project and, even if some parts of this integration versus DDD rules are discutables, this work will work for
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

The code is heavily inspired by [Benjamin Eberlei][10] blog posts who did a very great job on many projects (including
[Doctrine][11] and [litecqrs-php][12].

This README is heavily inspired by [Hateoas][4] library by the great [@willdurand][8]. This guy needs your [PR][5] for
the sake of the REST in PHP.

Alexandre "pocky" Balmes [alexandre@lablackroom.com][3]. Send me [Flattrs][6] if you love my work, [buy me gift][9]
or hire me!


License
-------
`CQRS in PHP` is released under the MIT License. See the bundled LICENSE file for details.

[1]: http://dddcommunity.org/
[2]: http://getcomposer.org/
[3]: mailto:alexandre@lablackroom.com
[4]: https://github.com/willdurand/Hateoas
[5]: http://williamdurand.fr/2014/07/02/resting-with-symfony-sos/
[6]: https://flattr.com/profile/alexandre.balmes
[7]: https://packagist.org/packages/black/cqrs-php
[8]: https://github.com/willdurand
[9]: http://www.amazon.fr/registry/wishlist/3OR3EENRA5TSK
[10]: http://www.whitewashing.de/
[11]: http://www.doctrine-project.org/
[12]: https://github.com/beberlei/litecqrs-php
