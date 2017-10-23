eProcessing Network TDBE (Transparent Database Engine) API
========================

v0.2.0

## Installation & loading

The package is available via [Composer/Packagist](https://packagist.org/packages/mountpoint/eprocessingnetwork) (using semantic versioning), so just add this line to your `composer.json` file:

```json
"mountpoint/eprocessingnetwork": "~0.1"
```

or

```sh
composer require mountpoint/eprocessingnetwork
```

## Testing

Local testing without PHPUnit

```sh
cp src/config.php.dist src/config.php
php tests/index.php > index.html
```
