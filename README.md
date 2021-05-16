# text-manipulation

 Text or string manipulation library

## Installation:

composer require panduanvip/text-manipulation

### Usage:

```php
<?php

include 'vendor/autoload.php';
use PanduanVIP\TextManipulation\Text;
```


### Text::spintax ( $string ) : string

Make a sentence from a spintax

```php
$string = "{green|blue|yellow} bird is sitting {there|over there|on the ground}.";
$result = Text::spintax($string);
```

**Result:** 
```
blue bird is sitting on the ground.
```


### Text::string_to_array ( $string ) : array

Converts string to array based on newlines

```php
$string = <<<test
Example of string
spanning multiple lines
using heredoc syntax.
test;

$result = Text::string_to_array($string);
```

**Result:**
```
['Example of string', 'spanning multiple lines', 'using heredoc syntax.']
```


### Text::excerpt ( $string, $max_length=40, $cut_off="...", $keep_word=true ) : string

Create excerpt from a paragraph

```php
$string = "PHP is a general-purpose scripting language especially suited to web development. It was stringly created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.";
$result = Text::excerpt($string, 50);
```

**Result:**
```
PHP is a general-purpose scripting language...

```

### Text::remove_double_space ( $string ) : string

Replace double with single space

```php
$string = "Lorem     ipsum dolor sit amet,   consectetur adipiscing elit";
$result = Text::remove_double_space($string);
```

**Result:**
```
Lorem ipsum dolor sit amet, consectetur adipiscing elit
```


### Text::string_between ( $string, $start, $end ) : string

Get a string between two strings

```php
$string = "This is my dog!";
$result = Text::string_between($string, "my", "!");
```

**Result:**
```
dog
```


### Text::slug ( $string ) : string

Sanitize string for creating url slug

```php
$string = "красивые сакуры";
$result = Text::slug($string);
```

**Result**
```
красивые-сакуры
```
