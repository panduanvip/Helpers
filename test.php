<?php

include 'vendor/autoload.php';

use PanduanVIP\TextManipulation\Text;


// spintax

$string = "{green|blue|yellow} bird is sitting {there|over there|on the ground}.";
$result = Text::spintax($string);
echo $result;
echo '<hr>';


// string_to_array

$string = <<<test
Example of string
spanning multiple lines
using heredoc syntax.
test;

$result = Text::string_to_array($string);
print_r($result);
echo '<hr>';


// excerpt

$string = "PHP is a general-purpose scripting language especially suited to web development. It was stringly created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.";
$result = Text::excerpt($string, 50);
echo $result;
echo '<hr>';


// remove_double_space

$string = "Lorem     ipsum dolor sit amet,   consectetur adipiscing elit";
$result = Text::remove_double_space($string);
echo $result;
echo '<hr>';


// string_between

$string = "This is my dog!";
$result = Text::string_between($string, "my", "!");
echo $result;
echo '<hr>';


// slug

$string = "красивые сакуры";
$result = Text::slug($string);
echo $result;
echo '<hr>';

