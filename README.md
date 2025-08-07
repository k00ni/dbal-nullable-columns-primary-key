# How to set up

1. Run `cd docker`
2. Run `make`
3. *(after it is done you should be inside the container)*
4. Run PHPUnit: `bin/phpunit`

It should produce the following deprecations on the console:

```
Remaining indirect deprecation notices (4)

  1x: Using nullable columns (GeoEintragTeilVonBeziehungVonEintrag.geo_eintrag_teil_von_beziehung_id) in a primary key index is deprecated. (Table.php:182 called by Table.php:199, https://github.com/doctrine/dbal/pull/6787, package doctrine/dbal)
    1x in DemoTest::test from Tests

  1x: Using nullable columns (GeoEintragTeilVonBeziehungVonEintrag.geo_eintrag_id) in a primary key index is deprecated. (Table.php:182 called by Table.php:199, https://github.com/doctrine/dbal/pull/6787, package doctrine/dbal)
    1x in DemoTest::test from Tests

  1x: Using nullable columns (GeoEintragTeilVonBeziehungZuEintrag.geo_eintrag_teil_von_beziehung_id) in a primary key index is deprecated. (Table.php:182 called by Table.php:199, https://github.com/doctrine/dbal/pull/6787, package doctrine/dbal)
    1x in DemoTest::test from Tests

  1x: Using nullable columns (GeoEintragTeilVonBeziehungZuEintrag.geo_eintrag_id) in a primary key index is deprecated. (Table.php:182 called by Table.php:199, https://github.com/doctrine/dbal/pull/6787, package doctrine/dbal)
    1x in DemoTest::test from Tests
```
