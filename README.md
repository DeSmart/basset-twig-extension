# About

This package provides [Basset](https://github.com/jasonlewis/basset) functions for Laravel4 [TwigBridge](https://github.com/rcrowe/TwigBridge).

Currently are ported two functions:

* `basset_stylesheets`
* `basset_javascripts`

# Installation

Add package as composer dependancy:

```
{
  "require": {
    "desmart/basset-twig-extension": "1.0.*"
  }
}
```

In `app/config/packages/rcrowe/twigbridge/config.php` add `'DeSmart\BassetTwigExtension\Extension',` to `extensions`.

# Usage

In Twig views:

```
{{ basset_stylesheets('application') }}
{{ basset_stylesheets('application') }}
```

# Warning

This package is provided *as is*. 

There are no tests, no dependencies provided. This package may broke after some major changes in Basset, or TwigBridge.
