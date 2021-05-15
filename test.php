<style>
    hr {
        border: none;
        height: 1px;
        /* Set the hr color */
        color: #333; /* old IE */
        background-color: #333; /* Modern Browsers */
    }
</style>

<?php

include 'vendor/autoload.php';

use PanduanVIP\TextManipulation\Text;

echo '<h1>PanduanVIP Text Library</h1>';
echo '<hr>';

echo '<h2>How To Use?</h2>';
echo '<pre>include "vendor/autoload.php";<br>';
echo 'use PanduanVIP\Text\Text;</pre>';
echo '<hr>';


// spintax

echo '<h2>Text::spintax ( $string ) : string</h2>';

echo '<pre>$result = Text::spintax($string);</pre><br>';

$string = "{green|blue|yellow} bird is sitting {there|over there|on the ground}.";
echo "<b>string:</b> $string<br>";

$sentence = Text::spintax($string);
echo "<b>result:</b> $sentence";
echo '<hr>';


// string_to_array

echo '<h2>Text::string_to_array ( $string ) : array</h2>';

echo '<pre>$result = Text::string_to_array($string);</pre><br>';

$string = <<<test
Example of string
spanning multiple lines
using heredoc syntax.
test;

echo "<b>string:</b>";
echo "<pre>";
echo $string;
$result = Text::string_to_array($string);
echo '</pre>';
echo "<b>result:</b>";
echo '<pre>';
print_r($result);
echo "</pre>";
echo '<hr>';


// excerpt

echo '<h2>Text::excerpt ( $string, $max_length=40, $cut_off="...", $keep_word=true ) : string</h2>';

echo '<pre>$result = Text::excerpt($string, 50);</pre><br>';

$string = "PHP is a general-purpose scripting language especially suited to web development. It was stringly created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.";
echo "<b>string:</b> $string<br>";
$excerpt = Text::excerpt($string, 50);
echo "<b>result:</b> $excerpt";
echo '<hr>';


// remove_double_space

echo '<h2>Text::remove_double_space ( $string ) : string</h2>';

echo '<pre>$result = Text::remove_double_space($string);</pre><br>';

$string = "Lorem     ipsum dolor sit amet,   consectetur adipiscing elit";
echo "<b>string:</b>";
echo "<pre>";
echo $string;
$result = Text::remove_double_space($string);
echo '</pre>';
echo "<b>result:</b>";
echo '<pre>';
echo($result);
echo "</pre>";
echo '<hr>';


// string_between

echo '<h2>Text::string_between ( $string, $start, $end ) : string</h2>';

echo '<pre>$result = Text::string_between($string, "my", "!");</pre><br>';

$string = "This is my dog!";
echo "<b>string:</b> $string<br>";
$result = Text::string_between($string, "my", "!");
echo "<b>result:</b> $result";
echo '<hr>';