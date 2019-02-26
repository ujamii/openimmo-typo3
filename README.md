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

- solve all TODOs in code (6)
- ~make this backwards compatible~
- exporting OpenImmo XML from TYPO3 database content
- make model and repository classes automatically "use" traits if they match by name instead of hardcoded addition
- currently, the extension is monolingual in many places, so make use of default TYPO3 translation features

## Installation

```shell
composer req ujamii/openimmo-typo3
```

## Usage

1. Install composer package.
2. Install TYPO3 extension in extension manager
3. Done :-)

### Importing OpenImmo XML into the TYPO3 database

Importing new data assumes you have a zip file located in your server filesystem. The import command
will extract the zip file into a new folder, truncate the db tables (optional, default is true) and
then parse the xml file and add the db content again.

```shell
vendor/bin/typo3 openimmo:import --pid=1
```

The pid option is mandatory, sourceFolder is `/uploads/tx_openimmo/` by default. The command expects
**exactly** one *.zip file in that directoy. The content will be extracted into a new directory with the
same name as the zip file and the archive will be deleted after the import is done.

The command will fail if there are more or less zip files in that directory or if there is not exactly one
xml file in the archive. Just type `--help` to see all the options and default values.

### Exporting OpenImmo XML from TYPO3 database content

TODO

### Update code based on newer API classes 

1. Update the composer package, including dev packages AND `--optimize-autoloader`, otherwise the class loading will fail!
2. `vendor/bin/typo3 openimmo:generateCode` will fill the `Classes/Domain/*` directories with new classes. 
Also the `ext_tables.sql` file is generated as well as everything in `Configuration/TCA/` 
3. `composer dumpautoload` to update the autoloading.
4. Clear all(!) the TYPO3 caches
5. Done.

## Compatibility hint

There are 2 branches legacy/v7.6 and legacy/v7.6-nocomposer (this one also contains the vendor folder) for backwards compat, as I needed this myself. The extension is working from the frontend perspective, as well as the import command (although the command call looks a litte different: `php typo3/cli_dispatch.phpsh extbase import:executeImport`). But: The code generation command has **NOT been backportet, so this will not work there**!

## License and Contribution

[GPLv3](LICENSE)

As this is OpenSource, you are very welcome to contribute by reporting bugs, improve the code, write tests or 
whatever you are able to do to improve the project.

If you want to do me a favour, buy me something from my [Amazon wishlist](https://www.amazon.de/registry/wishlist/2C7LSRMLEAD4F).
