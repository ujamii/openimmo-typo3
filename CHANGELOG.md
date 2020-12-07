## 0.5.2 (December 07, 2020)
  - [BUGFIX] fixed composer v2 compat warning

## 0.5.1 (September 06, 2019)
  - [TASK] updated ujamii/openimmo package
  - [BUGFIX] handle empty request params for search DTO correctly

## 0.5.0 (February 27, 2019)
  - [FEATURE] code generation now adds traits automatically
  - [TASK] some refactoring
  - [BUGFIX] bulk update with mysql concat function works now
  - [BUGFIX] fixed sqlsafe naming of fields
  - [BUGFIX] fixed missing dateformat in Check value
  - [DOC] updated TODO section

## 0.4.0 (February 26, 2019)
  - [BUGFIX] backlink property name was wrong for camelCased class names
  - [FEATURE] added view helper for main image
  - [DOC] Added legacy branch(es) hint
  - [FEATURE] added search plugin
  - [TASK] renamed dfault template section from content to main
  - [BUGFIX] readded openimmo class for de-/serialization
  - [TASK] all parameters are options now in the import command
  - [FEATURE] added ImmobilieRepositoryTrait
  - [FEATURE] added TABLE_NAME constants to model classes
  - [FEATURE] added FilterDemand
  - [FEATURE] added show action

## 0.3.0 (February 22, 2019)
  - [BUGFIX] removed unused fields
  - [TASK] added some output to generation command 
  - [BUGFIX] fixed order of code generation calls
  - [BUGFIX] fixed typo in exclude class
  - [FEATURE] added exclude classes 
  - [FEATURE] added some more config options to importer 
  - [BUGFIX] fixed return types for collections (array vs. ObjectStorage)
  - [TASK] added controller, ts files, ext icon, plugin config, templates 
  - [BUGFIX] fixed array vs. ObjectStorage in TYPO3
  - [TASK] did some refactoring

## 0.2.0 (February 19, 2019)
  - [FEATURE] added import command
  - [BUGFIX] wrong table name generation
  - [BUGFIX] wrong foreign table links, missing sql fields
  - [FEATURE] almost all data tables are now hidden in the list view by default (inline elements)
  - [BUGFIX] fixes sql table name prefix
  - [DOC] added packagist badge

## 0.1.0 (February 15, 2019)
  - initial commit

