# MonTestPack

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Ceci est un test de package php

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```

src/

```


## Install

Via Composer

``` bash
$ composer require christer77/MonTestPack

$ composer recreate-project christer77/MonTestPack
```

## Usage

``` php
// setup autoload
require "vendor/autoload.php"
$MonTestPack = new christer77\MonTestPack();
echo $MonTestPack->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email kahashachrister77@gmail.com instead of using the issue tracker.

## Credits

- [christer kahasha][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/christer77/MonTestPack.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/christer77/MonTestPack/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/christer77/MonTestPack.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/christer77/MonTestPack.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/christer77/MonTestPack.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/christer77/MonTestPack
[link-travis]: https://travis-ci.org/christer77/MonTestPack
[link-scrutinizer]: https://scrutinizer-ci.com/g/christer77/MonTestPack/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/christer77/MonTestPack
[link-downloads]: https://packagist.org/packages/christer77/MonTestPack
[link-author]: https://github.com/christer77
[link-contributors]: ../../contributors
