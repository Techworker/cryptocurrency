<?php

/*
 * This file is part of the Techworker\CryptoCurrency package.
 *
 * (c) Benjamin Ansbach <benjaminansbach@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__.'/../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$currencyClass = '\\Techworker\\Crypto\\Currency\\Currencies\\'.$argv[1];
$r = new \ReflectionClass($currencyClass);
$data = [];
$fixture = '';

foreach ($currencyClass::getUnits() as $unit) {
    $fixture .= '['.$argv[1].'::class, '.$argv[1].'::'.array_search($unit, $r->getConstants(), true).", [\n";
    foreach ($currencyClass::getUnits() as $subUnit) {
        $fixture .= "['".(new $currencyClass(1, $unit))->format($subUnit)."', ".$argv[1].'::'.array_search($subUnit, $r->getConstants(), true)."],\n";
    }
    $fixture .= "]],\n";
}

file_put_contents(__DIR__ . '/Currencies/' . $argv[1] . 'Test.php',
    str_replace(['{CURRENCY}', '{FIXTURE}'], [$argv[1], $fixture], file_get_contents(__DIR__ . '/_currencytest.tpl'))
);