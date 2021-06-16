<?php

include 'vendor/autoload.php';
use PanduanVIP\Helpers\Please;


// spintax

$string = "{green|blue|yellow} bird is sitting {there|over there|on the ground}.";
$result = Please::createSpintax($string);
echo $result;
echo '<hr>';


// new line to array

$string = <<<test
Example of string
spanning multiple lines
using heredoc syntax.
test;

$result = Please::explodeNewLine($string);
print_r($result);
echo '<hr>';


// excerpt

$string = "PHP is a general-purpose scripting language especially suited to web development. It was stringly created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.";
$result = Please::createExcerpt($string, 50);
echo $result;
echo '<hr>';


// remove double space

$string = "Lorem     ipsum dolor sit amet,   consectetur adipiscing elit";
$result = Please::removeDoubleSpace($string);
echo $result;
echo '<hr>';


// string between

$string = "This is my dog!";
$result = Please::getStringBetween($string, "my", "!");
echo $result;
echo '<hr>';


// slug

$string = "красивые сакуры";
$result = Please::createSlug($string);
echo $result;
echo '<hr>';

