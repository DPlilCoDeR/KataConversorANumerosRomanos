<?php

include 'vendor/autoload.php';

use App\Conversor;

$convertidor = new Conversor;
$convertidor->numeroArabigo = 10000;
echo $convertidor->ConvertirNumeroARomano();