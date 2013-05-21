# About

This package provides Basset functions for Laravel4 TwigBridge.

Currently are ported two functions:

* `basset_stylesheets`
* `basset_javascripts`

# Installation

Add `'DeSmart\BassetTwigExtension\Extension'` to `extensions` in `app/config/packages/rcrowe/twigbridge/config.php`

# Usage

In Twig views:

```
{{ basset_stylesheets('application') }}
{{ basset_stylesheets('application') }}
```

# Warning

This package is provided *as is*. 

There are no tests, no dependencies provided. This package may broke after some major changes in Basset, or TwigBridge.
