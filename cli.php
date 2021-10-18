<?php

require_once('assets/vendor/autoload.php');

use \Statickidz\GoogleTranslate;

$source = 'auto';
$target = 'en';
$text = implode(file('bahan_file/bahan_file_translate'));

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);

echo $result;