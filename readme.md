# YAMM :: Yet Another Meta Module # 

## Requirements ##

**Important:** This module is for OXID eShop 6.0 and newer only. If you have an older OXID eShop version
use the latest module version 1.x. 

## English ##

This meta module provides generally desired functionality, like:

* A reusable Dependency Injection Container

* Sensible logging facilities

### DIC Usage ###

The DIC is an extension of [Pimple](http://pimple.sensiolabs.org/) which allows
service tagging and is integrated with Oxid eSales.

To use the DIC just put a `dic.php` in the root of yourproject and register all
your services in there. A variable `$dic` will be available in this fileyou can
operate with:

```
/** @var \Marm\Yamm\DIC $dic */
$dic['acme_module_service'] = function (\Marm\Yamm\DIC $dic) {
    return new Acme\Module\Service(/* ... */);
};
```

On top of that we allow tagging of services and receiving of all services which
are tagged with a defined tag when constructing services:

```
/** @var \Marm\Yamm\DIC $dic */
$dic->tag('acme_module_service', 'acme:tag');
$dic['acme_module_service'] = function (\Marm\Yamm\DIC $dic) {
    return new Acme\Module\Service(/* ... */);
};

// Somewhere else or later
$dic['acme_module_aggregator'] = function (\Marm\Yamm\DIC $dic) {
    return new Acme\Module\Aggregator(
        // Array of all services tagged with "acme:tag"
        $dic->getTagged('acme:tag')
    );
};
```

To get the DIC anywhere else in your project, just fetch it from `oxRegistry`:

```
/** @var \Marm\Yamm\DIC $dic */
$dic = oxRegistry::get('yamm_dic');
```

### Licence Terms ###

YAMM is released under MIT.

Use this module in your project but keep the author notice. Thank you!


## Authors ##
* [Kore Nordmann](https://qafoo.com)
* [Joscha Krug](http://www.marmalade.de)

