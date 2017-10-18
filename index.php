<?php
$types = ['Hallo!', true, 5.3, 8, ['Hallo', 'Wereld']];
foreach ($types as $watIs) {
    echo getTypes($watIs), PHP_EOL;
};

function getTypes($watIs)
{
    return gettype($watIs);
}