<?php

namespace Example;

use Techworker\CryptoCurrency\CryptoCurrency;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

// small functionality to get all currency classes
$currencyFiles = glob(__DIR__.'/../src/Currencies/*.php');
$currencies = [];
foreach($currencyFiles as $currencyFile) {
    $name = pathinfo($currencyFile)['filename'];
    $class = sprintf('\\Techworker\\CryptoCurrency\\Currencies\\%s', $name);
    $refl = new \ReflectionClass($class);
    $units = [];
    $unitsFromConstants = $refl->getConstants();
    foreach($unitsFromConstants as $unitsFromConstant) {
        $units[$unitsFromConstant[0]] = $unitsFromConstant;
    }

    $currencies[$name] = [
        'class' => $class,
        'name' => $name,
        'units' => $units,
        'base' => $class::getBaseUnit()
    ];
}

// now we check if it's an ajax request
if(isset($_GET['ajax']))
{
    // get the current currency
    $currency = $_GET['currency'];
    // get the unit that is changed manually
    $unit = $_GET['unit'];
    // get the unit value that is changed manually
    $value = $_GET['value'];

    // now we instantiate the currency
    /** @var CryptoCurrency $instance */
    $instance = new $currencies[$currency]['class']($value, $currencies[$currency]['units'][$unit]);
    $result = [
        'values' => []
    ];
    foreach($currencies[$currency]['units'] as $unit) {
        $result['values'][] = [
            'unit' => $unit,
            'value' => $instance->format($unit, null, '.', ''),
            'formatted' => $instance->format($unit),
            'formatted_precision' => $instance->format($unit, $unit[1], '.', ',')
        ];
    }

    $result['bestFormat'] = $instance->format($instance->getBestMatchingUnit()) . ' ' . $instance->getBestMatchingUnit()[0];
    $result['baseFormat'] = $instance->format($instance->getBaseUnit()) . ' ' . $instance->getBaseUnit()[0];

    header('Content-Type: application/json');
    echo json_encode($result);
    exit(0);
}
//print_r($currencies);

?>

<?php

// print menu
echo implode(' | ', array_map(function($currency) {
    return sprintf(
        '<a href="index.php?currency=%s">%s</a>',
        $currency['name'], $currency['name']
    );
}, $currencies));

// default currency
if(!isset($_GET['currency'])) {
    $_GET['currency'] = array_keys($currencies)[0];
}
$currency = $_GET['currency'];

echo '<div id="best-format">Best display: <span></span></div>';
echo '<div id="base-format">Base display: <span></span></div>';

// print table
echo '
<table>
    <tr>
        <th>Name</th>
        <th>Value</th>
        <th>Formatted</th>
        <th>Formatted w precision</th>
    </tr>';

foreach($currencies[$currency]['units'] as $unit) {
    echo sprintf(
        '<tr class="%s">
            <td>%s</td>
            <td><input onClick="this.select();" size="40" class="value" data-unit="%s"><small>%s</small></td>
            <td><span class="formatted best" data-unit="%s"></td>
            <td><span class="formatted precision" data-unit="%s"></td>
        </tr>',
        ($unit === $currencies[$currency]['base']) ? 'base' : '',
        $unit[2], $unit[0], $unit[0], $unit[0], $unit[0]
    );
}
echo '</table>';
?>

<style>
    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .formatted {
        font-family:Menlo, Monaco, Consolas, "Courier New", monospace;
        background: rgba(0,0,0,.1);
        display: inline-block;
        padding: 5px;
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
    }
    table tr th {
        font-weight: bold;
        text-align: left;
        background: #666;
        color: white;
        padding: 5px;
    }
    table tr td {
        padding: 5px;
        border-bottom: 1px solid #000;
    }

    table tr.base td {
        background: yellow;
    }
</style>

<script>
    var $inputs = document.querySelectorAll('input');
    Array.prototype.forEach.call($inputs, function($input, i){
        $input.addEventListener('keyup', function(e) {
            var unit = e.currentTarget.getAttribute('data-unit');
            var value = e.currentTarget.value;

            var request = new XMLHttpRequest();
            request.open('GET', 'index.php?ajax=1&currency=<?=$currency?>&unit=' + unit + '&value=' + value, true);

            request.onload = function() {
                if (request.status >= 200 && request.status < 400) {
                    // Success!
                    var result = JSON.parse(request.responseText);
                    for(var i = 0; i < result.values.length; i++) {
                        var $elValue = document.querySelector('.value[data-unit=' + result.values[i].unit[0] + ']');
                        var $elFormatted = document.querySelector('.best[data-unit=' + result.values[i].unit[0] + ']');
                        var $elFormattedPrec = document.querySelector('.precision[data-unit=' + result.values[i].unit[0] + ']');

                        if(result.values[i].unit[0] !== unit) {
                            $elValue.value = result.values[i].value;
                        }
                        $elFormatted.innerHTML = result.values[i].formatted;
                        $elFormattedPrec.innerHTML = result.values[i].formatted_precision;
                    }
                    document.querySelector('#best-format > span').innerHTML = result.bestFormat;
                    document.querySelector('#base-format > span').innerHTML = result.baseFormat;
                    console.log(result);
                }
            };
            request.send();
        });
    });
</script>
