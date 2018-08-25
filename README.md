# cryptocurrency

A library dedicated to help with the management of cryptocurrency values in PHP.

## Installation

The library needs the [bcmath](http://php.net/manual/de/book.bc.php) 
extension.



## Contribute currencies

The library aims to support all cryptocurrencies, but of course not every 
currency is supported. If you would like to add one, feel free to create a 
pull request.

## Supported currencies

 - PascalCoin
 - Ethereum
 - Bitcoin

## How to use the library

Each currency has it's own class defined in the `Techworker\CryptoCurrency\Currencies`
namespace.

```php
<?php

namespace Readme;

use \Techworker\CryptoCurrency\Currencies;

// 1 wei
$ethereum = new Currencies\Ethereum(1);

// 1 iota
$iota = new Currencies\IOTA(1);

// create a currency value with 1 ether
$oneEthereum = new Ethereum(1);

// convert the value to wei
$wei = $oneEthereum->as(Ethereum::WEI);
echo $wei;
// will output: 
 

```


Every currency has a base unit - for ethereum 
its `wei` - that will be used as a base conversion unit.

No matter with which unit you will initialize a currency value, it is always 
converted to it's base conversion unit.

If you feel lucky, you can extend each currency - the base unit is not baked in.

```php
<?php

namespace Example;

use \Techworker\CryptoCurrency\Currencies\Ethereum;

// create a currency value with 1 ether
$oneEthereum = new Ethereum(1);

// convert the value to wei
$wei = $oneEthereum->as(Ethereum::WEI);
echo $wei;
// will output: 

```

## How to use the library

