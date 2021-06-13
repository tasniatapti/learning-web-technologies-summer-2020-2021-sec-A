<?php
$price = 100;
$vat = 15;

echo round($price * (($vat / 100) + 1), 2);
?>