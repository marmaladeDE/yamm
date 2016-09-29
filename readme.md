# YAMM :: YetAnother Meta Module # 

## English ##

This meta module provides generally desired functionality, like:

* A reusable Dependency Injection Container

* Sensible logging facilities

### DIC Usage ###

The DIC is am extension of [Pimple](http://pimple.sensiolabs.org/) which allows
service tagging and is integrated with Oxid eSales.

To use the DIC just put a `dic.php` in the root of yourproject and register all
your services in there. A variable `$dic` will be available in this fileyou can
operate with:

```
$dic['acme_module_service'] = function ($dic) {
    return new Acme\Module\Service(/* ... */);
};
```

On top of that we allow tagging of services and receiving of all services which
are tagged with a defined tag when constructing services:

```
$dic->tag('acme_module_service', 'acme:tag');
$dic['acme_module_service'] = function ($dic) {
    return new Acme\Module\Service(/* ... */);
};

// Somewhere else or later
$dic['acme_module_aggregator'] = function ($dic) {
    return new Acme\Module\Aggregator(
        // Array of all services tagged with "acme:tag"
        $dic->getTagged('acme:tag')
    );
};
```

### Licence Terms ###

YAMM is released under MIT.

