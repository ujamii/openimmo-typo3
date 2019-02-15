# OpenImmo extension for TYPO3 CMS

[![Packagist](https://img.shields.io/packagist/v/ujamii/openimmo-typo3.svg?colorB=green&style=flat)](https://packagist.org/packages/ujamii/openimmo-typo3)

OpenImmo and the OpenImmo logo are registered trademarks of the [OpenImmo e.V.](http://www.openimmo.de)
Neither is this package an official distribution nor am I associated with this organisation!

This TYPO3 extension uses the [openImmo API](https://github.com/ujamii/openimmo) to generate TYPO3 compatible classes
(Extbase/Fluid). All the code is generated:
- all Model classes
- all Repository classes
- TCA and SQL

## TODOs

- solve all TODOs in code
- make this backwards compatible

## Installation

```shell
composer req ujamii/openimmo-typo3
```

## Usage

1. Install composer package.
2. Install TYPO3 extension in extension manager
3. Done :-)

### Importing OpenImmo XML into the TYPO3 database

TODO

### Exporting OpenImmo XML from TYPO3 database content

TODO

### Update code based on newer API classes 

1. Update the composer package, including dev packages AND `--optimize-autoloader`, otherwise the class loading will fail!
2. `vendor/bin/typo3 openimmo:generateCode` will fill the `Classes/Domain/*` directories with new classes. 
Also the `ext_tables.sql` file is generated as well as everything in `Configuration/TCA/` 
3. `composer dumpautoload` to update the autoloading.
4. Clear all(!) the TYPO3 caches
5. Done.

## License and Contribution

[GPLv3](LICENSE)

As this is OpenSource, you are very welcome to contribute by reporting bugs, improve the code, write tests or 
whatever you are able to do to improve the project.

If you want to do me a favour, buy me something from my [Amazon wishlist](https://www.amazon.de/registry/wishlist/2C7LSRMLEAD4F).