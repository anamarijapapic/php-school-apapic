# PHP School



## Resources

- https://www.php.net - Offical PHP website
- https://www.php.net/manual/en/langref.php - Offical PHP Language Reference
- https://3v4l.org - Run code online in 300+ PHP versions simultaneously
- https://regex101.com/ - Build and validate regexes
- https://google.com / https://stackoverflow.com - Search for your problem on Google and stackoverflow
- [PHP For Beginners | 3+ Hour Crash Course](https://www.youtube.com/watch?v=BUCiSSyIGGU)

## Setting up PHP School project

### Software requirements

You should have the following software installed:

- [Visual Studio Code](https://code.visualstudio.com/)
  - Install and enable these extensions
    - [Git Graph](https://marketplace.visualstudio.com/items?itemName=mhutchie.git-graph)
    - [PHP Debug](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug)
    - [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
- [Docker](https://docs.docker.com/desktop/mac/install/) 4.6.0+
- [nvm](https://github.com/nvm-sh/nvm#installing-and-updating)
- node v12.22.1
  - Install with `nvm install 12.22.1`
- npm 6.14.12
	- Install with `npm i -g npm@6.14.12`
- [Monosnap](https://monosnap.com) or some other tool for screenshot sharing

### Getting started

1. Work with your mentor to create your personal PHP School repo
   - The repo URL should be something like https://gitlab.com/_agilo/backend-internship/php-school-yourname
2. Install and update all the requirements above
3. Create a directory for your projects if you don't have it already, eg. `mkdir ~/htdocs`
4. Navigate to the projects directory: `cd ~/htdocs`
5. Clone the repo: `git clone git@gitlab.com:_agilo/backend-internship/php-school-yourname.git`
6. Copy `.env.example` file to `.env`
7. Install all JS dependencies by running: `npm install`
8. Append these hosts to your `/etc/hosts` file:
   - `127.0.0.1 php56.php-school.test`
   - `127.0.0.1 php80.php-school.test`
   - `127.0.0.1 php-school.test`
9. Generate your local certificate by running: `npm run addcert`
10. Build and start the local web server for the first time: `docker-compose up`
11. Open [https://php-school.test/](https://php-school.test/) in your browser
12. Work with the code in the `src` directory.

### Assignments

#### Hello World

Hello, this is your first assignment :).

Create an `index.php` script in the `src/assignments/hello-world/` folder and make it output "Hello World". Visit the script in your browser at https://php-school.test/assignments/hello-world/index.php and make sure it works.

If you visit the https://php-school.test/assignments/hello-world/ folder without explicitly specifying `index.php` does it work? Why? Write your answers as PHP comments inside `index.php`.

Now run your script from the command line:

1. Log into the docker container: `docker-compose exec php bash`
2. Navigate to the assignment folder: `cd assignments/hello-world`
3. Run the script: `php index.php`

You should see something like the below outputted to the command line:

```
Hello Worldroot@65b684498593:/var/www/html/assignments/hello-world#
```

Now add a new line in your script to make the output look like this instead:

```
Hello World
root@65b684498593:/var/www/html/assignments/hello-world#
```

Notes:

- Screenshot: N/A
- Assignment folder: [hello-world](src/assignments/hello-world/)
- Resources:
  - [`PHP_EOL`](https://www.php.net/manual/en/reserved.constants.php#constant.php-eol)
- Tests: N/A

#### Phpinfo

Write a script to output PHP information using the `phpinfo()` function and find out:

- which PHP version is running in the Docker container
- which HTTP server is being used
- what is the maximum execution time our PHP scripts can run
- what is the memory limit our PHP scripts can reach
- are PHP errors being logged and where

Write your answers as PHP comments inside `index.php`.

Notes:

- Screenshot: N/A
- Assignment file: [index.php](src/assignments/phpinfo/index.php)
- Resources
  - [phpinfo](https://www.php.net/manual/en/function.phpinfo.php)
  - [max_execution_time](https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time)
  - [memory_limit](https://www.php.net/manual/en/ini.core.php#ini.memory-limit)
  - [display_errors](https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors)
  - [log_errors](https://www.php.net/manual/en/errorfunc.configuration.php#ini.log-errors)
  - [error_log](https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-log)
  - [error_reporting](https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting)
- Tests: N/A

#### Error Reporting

While you're implementing assignments from this repo it's very useful to see all the errors on screen in your browser so we're going to enable that now. Open the [php.ini](docker/php/8.0/zz-php.ini) file and make sure **all PHP errors, warnings, and notices** are being logged to the screen, check the resources notes below to find out how to do that. Once you update the `php.ini` file restart Docker using `docker-compose up --build` so that the new config takes effect. Make sure the assignment files [parse-error.php](src/assignments/error-reporting/parse-error.php) and [warning.php](src/assignments/error-reporting/warning.php) display errors to the browser when you run them like in the screenshots.

**Outputting errors directly to the browser should only be used locally while developing and should NEVER be enabled in production.**

Notes:

- Screenshots:
  - [Screenshot 1](assets/screenshots/error-reporting-warning.png)
  - [Screenshot 2](assets/screenshots/error-reporting-parse-error.png)
- Assignment files:
  - [php.ini](docker/php/8.0/zz-php.ini)
  - [parse-error.php](src/assignments/error-reporting/parse-error.php)
  - [warning.php](src/assignments/error-reporting/warning.php)
- Resources
  - [display_errors](https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors)
  - [log_errors](https://www.php.net/manual/en/errorfunc.configuration.php#ini.log-errors)
  - [error_log](https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-log)
  - [error_reporting](https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting)
  - https://maximivanov.github.io/php-error-reporting-calculator/
- Tests: N/A

#### Data Types

Create a script which defines one variable for each PHP data type (except callable, iterable and resource), print each variable and its type to the browser.

Notes:

- Screenshot: [Screenshot](assets/screenshots/data-types.png)
- Assignment files:
  - [index.php](src/assignments/data-types/index.php)
- Resources:
  - https://www.php.net/manual/en/language.types.intro.php
  - https://www.w3schools.com/php/php_datatypes.asp
  - [var_dump()](https://www.php.net/manual/en/function.var-dump.php)
- Tests: N/A

#### File Size Calculator

Create a script which receives a file size in bytes as input via a query parameter and converts that into GB, MB, KB, GiB, MiB and KiB values.

Notes:

- Screenshot: [Screenshot](assets/screenshots/file-size-calculator.png)
- Assignment files:
  - [index.php](src/assignments/file-size-calculator/index.php)
- Resources:
  - [File Size Calculator](https://www.dr-lex.be/info-stuff/bytecalc.html)
  - https://ss64.com/convert.html
  - https://massive.io/blog/gb-vs-gib-whats-the-difference/
  - [number_format()](https://www.php.net/manual/en/function.number-format.php)
- Tests: N/A

#### Modulo Operator

Create a script which receives a five digit whole number via a query parameter. Split the digits in separate numbers and print them out separated with a space. Implement using the Modulo operator. Hint: `$digit4 = (int) ( ( 12345 % 100 ) / 10 ); // $digit4 will equal 4`.

Notes:

- Screenshot: [Screenshot](assets/screenshots/modulo-operator.png)
- Assignment files:
  - [index.php](src/assignments/modulo-operator/index.php)
- Resources:
  - [Modulo operator](https://www.php.net/manual/en/language.operators.arithmetic.php)
  - https://www.calculatorsoup.com/calculators/math/modulo-calculator.php
- Tests: N/A

#### Even and Odd Numbers

Write a script that takes a number via a query parameter and prints out whether it's an even or an odd number.

Notes:

- Screenshot: [Screenshot](assets/screenshots/even-and-odd-numbers.png)
- Assignment files:
  - [index.php](src/assignments/even-and-odd-numbers/index.php)
- Resources:
  - [Modulo operator](https://www.php.net/manual/en/language.operators.arithmetic.php)
  - https://www.calculatorsoup.com/calculators/math/modulo-calculator.php
- Tests: N/A

#### Leap Year

Write a script which accepts a year via a query parameter and checks if it's a leap year. Leap years are those divisble by 4 except those also divisible by 100, but also each year divisible by 400 is a leap year.

In other words a leap year must either be divisible by 400, or divisible by 4 and not 100.

Notes:

- Screenshot: [Screenshot](assets/screenshots/leap-year.png)
- Assignment files:
  - [index.php](src/assignments/leap-year/index.php)
- Resources:
  - https://en.wikipedia.org/wiki/Category:Leap_years_in_the_Gregorian_calendar
- Tests: N/A

#### FizzBuzz

Write a program to print all the numbers from 1 to 100, with two exceptions. For numbers divisible by 3, print "Fizz" instead of the number, and for numbers divisible by 5 (and not 3), print "Buzz" instead.

When you have that working, modify your program to print "FizzBuzz", for numbers that are divisible by both 3 and 5 (and still print "Fizz" or "Buzz" for numbers divisible by only one of those).

Notes:

- Screenshot: [Screenshot](assets/screenshots/fizzbuzz.png)
- Assignment files:
  - [index.php](src/assignments/fizzbuzz/index.php)
- Resources:
  - [for loop](https://www.php.net/manual/en/control-structures.for.php)
- Tests: N/A

#### Drawing a Triangle

Write a script which takes triangle size as a query parameter and prints a triangle on the page. Validate that the minimum number of lines is 5.

Notes:

- Screenshot: [Screenshot](assets/screenshots/drawing-a-triangle.png)
- Assignment files:
  - [index.php](src/assignments/drawing-a-triangle/index.php)
- Resources:
  - [for loop](https://www.php.net/manual/en/control-structures.for.php)
  - [PHP Tutorial 11 - Nested Loops](https://www.youtube.com/watch?v=UPDVZIu7Otk)
- Tests: N/A

#### Drawing a Box

Write a script which accepts box size as a query parameter and draws a box on the page. Use the `<pre>` HTML tag and non-breaking space (`&nbsp;`) HTML entity to draw whitespace where needed. Make the default box size 3.

Notes:

- Screenshot: [Screenshot](assets/screenshots/drawing-a-box.png)
- Assignment files:
  - [index.php](src/assignments/drawing-a-box/index.php)
- Resources:
  - [for loop](https://www.php.net/manual/en/control-structures.for.php)
  - [PHP Tutorial 11 - Nested Loops](https://www.youtube.com/watch?v=UPDVZIu7Otk)
- Tests: N/A

### Drawing a Chess Board

Write a script that accepts a chess board size as a query parameter and draws a grid similar to a chess board on the page. Use the markup from the `html.php` file.

Notes:

- Screenshot: [Screenshot](assets/screenshots/drawing-a-chess-board.png)
- Assignment files:
  - [html.php](src/assignments/drawing-a-chess-board/html.php)
  - [index.php](src/assignments/drawing-a-chess-board/index.php)
- Resources:
  - [filter_input()](https://www.php.net/filter_input)
  - [for loop](https://www.php.net/manual/en/control-structures.for.php)
  - [PHP Tutorial 11 - Nested Loops](https://www.youtube.com/watch?v=UPDVZIu7Otk)
- Tests: N/A

#### Multiplication Table

Write a script which prints out a multiplication table. Define the size of the multiplication table via a named constant. Use the markup from the `html.php` file.

Notes:

- Screenshot: [Screenshot](assets/screenshots/multiplication-table.png)
- Assignment files:
  - [html.php](src/assignments/multiplication-table/html.php)
  - [index.php](src/assignments/multiplication-table/index.php)
- Resources:
  - `define()` - define a named constant - https://www.php.net/manual/en/function.define.php
  - https://www.mathsisfun.com/tables.html
  - [for loop](https://www.php.net/manual/en/control-structures.for.php)
  - [PHP Tutorial 11 - Nested Loops](https://www.youtube.com/watch?v=UPDVZIu7Otk)
- Tests: N/A

#### Convert Percentage to Decimal

Write a function to convert a percentage string to its decimal equivalent.

Examples:

```php
convert_to_decimal( '0%' );   // return 0
convert_to_decimal( '1%' );   // return 0.01
convert_to_decimal( '2%' );   // return 0.02
convert_to_decimal( '25%' );  // return 0.25
convert_to_decimal( '100%' ); // return 1
```

Notes:

- Screenshot: [Screenshot](assets/screenshots/convert-percentage-to-decimal.png)
- Assignment files:
  - [index.php](src/assignments/convert-percentage-to-decimal/index.php)
  - [functions.php](src/assignments/convert-percentage-to-decimal/functions.php)
- Resources:
  - [str_replace()](https://www.php.net/manual/en/function.str-replace.php)
- Tests: `./vendor/bin/phpunit --filter ConvertPercentageToDecimalTest`

#### Cardinal to Ordinal Number

Create a function that takes in a Cardinal Number and converts it to an Ordinal Number. Assume the passed number will always be greater than 0. Write a loop to print out the first 1000 Ordinal Numbers.

[Internationalization (Intl) extension](https://www.php.net/manual/en/book.intl.php) is not available on the client system so we can't use [`NumberFormatter::format`](https://www.php.net/manual/en/numberformatter.format.php) with `NumberFormatter::ORDINAL`.

Examples:

```php
cardinal_to_ordinal( 1 ); // return '1st'
cardinal_to_ordinal( 2 ); // return '2nd'
cardinal_to_ordinal( 11 ); // return '11th'
cardinal_to_ordinal( 21 ); // return '21st'
cardinal_to_ordinal( 100 ); // return '100th'

// write a loop to print out the first 1000 ordinal numbers

```

Notes:

- Screenshot: [Screenshot](assets/screenshots/cardinal-to-ordinal-number.png)
- Assignment files:
  - [index.php](src/assignments/cardinal-to-ordinal-number/index.php)
  - [functions.php](src/assignments/cardinal-to-ordinal-number/functions.php)
- Resources:
  - https://www.mathsisfun.com/numbers/cardinal-ordinal-chart.html
- Tests: `./vendor/bin/phpunit --filter CardinalToOrdinalNumberTest`

#### Get Century

Create a function that takes in a year and returns the correct century. The year passed will always be greater than 0. Use the function from [Cardinal to Ordinal Number](#cardinal-to-ordinal-number) exercise to format the number, include the `cardinal_to_ordinal` function using [`require`](https://www.php.net/manual/en/function.require.php).

Examples:

```php
get_century( 1 ); // return '1st century'
get_century( 67 ); // return '1st century'
get_century( 150 ); // return '2nd century'
get_century( 1586 ); // return '16th century'
get_century( 1900 ); // return '19th century'
get_century( 1901 ); // return '20th century'
get_century( 1999 ); // return '20th century'
get_century( 2000 ); // return '20th century'
get_century( 2010 ); // return '21st century'
```

Notes:

- Screenshot: [Screenshot](assets/screenshots/get-century.png)
- Assignment files:
  - [index.php](src/assignments/get-century/index.php)
  - [functions.php](src/assignments/get-century/functions.php)
- Resources:
  - https://en.wikipedia.org/wiki/List_of_years
  - [ceil()](https://www.php.net/manual/en/function.ceil.php)
- Tests: N/A

#### Celsius to Fahrenheit

Write a function that takes a temperature input in celsius and converts it to Fahrenheit. Return calculated temperature up to two decimal places.

The formula to calculate the temperature in Fahrenheit from Celsius is `F = C * 9/5 + 32`.

Examples:

```php
celsius_to_fahrenheit( -10 ); // return '14.00'
celsius_to_fahrenheit( 0 ); // return '32.00'
celsius_to_fahrenheit( 22.45 ); // return '72.41'
celsius_to_fahrenheit( 22.455 ); // return '72.42'
celsius_to_fahrenheit( 100 ); // return '212.00'
```

Notes:

- Screenshot: [Screenshot](assets/screenshots/celsius-to-fahrenheit.png)
- Assignment files:
  - [index.php](src/assignments/celsius-to-fahrenheit/index.php)
  - [functions.php](src/assignments/celsius-to-fahrenheit/functions.php)
- Resources:
  - [number_format()](https://www.php.net/manual/en/function.number-format.php)
- Tests: `./vendor/bin/phpunit --filter CelsiusToFahrenheitTest`

#### Convert Comma-Delimited String to Array

Write a function that turns a comma-delimited string into an array of strings. If an empty string is passed return an empty array.

Examples:

```php
to_array( '' ); // return []
to_array( 'foo' ); // return ['foo']
to_array( 'foo,bar,baz' ); // return ['foo', 'bar', 'baz']
```

Notes:

- Screenshot: [Screenshot](assets/screenshots/convert-comma-delimited-string-to-array.png)
- Assignment files:
  - [index.php](src/assignments/convert-comma-delimited-string-to-array/index.php)
  - [functions.php](src/assignments/convert-comma-delimited-string-to-array/functions.php)
- Resources:
  - [print_r()](https://www.php.net/manual/en/function.print-r.php)
  - [explode()](https://www.php.net/manual/en/function.explode.php)
- Tests: `./vendor/bin/phpunit --filter ConvertCommaDelimitedStringToArrayTest`

#### Get Numbers

Create a function which returns all numbers (integers and floats) from a given array.

Examples:

```php
get_numbers( [] ); // return []
get_numbers( [ 1, true, 2.5, 'foo', [], null, new stdClass ] ); // return [1, 2.5]
```

Notes:

- Screenshot: [Screenshot](assets/screenshots/convert-comma-delimited-string-to-array.png)
- Assignment files:
  - [index.php](src/assignments/get-numbers/index.php)
  - [functions.php](src/assignments/get-numbers/functions.php)
- Resources:
  - [is_int()](https://www.php.net/manual/en/function.is-int.php)
  - [is_float()](https://www.php.net/manual/en/function.is-float.php)
- Tests: `./vendor/bin/phpunit --filter GetNumbersTest`

#### Vowel Counter

Write a function that takes a string and returns the number of vowels contained within it. Letters a, e, i, o, u are considered vowels. Implement using `str_split`.

Examples:

```php
count_vowels( '' ); // return 0
count_vowels( 'php' ); // return 0
count_vowels( 'programming' ); // return 3
count_vowels( 'aeiou' ); // return 5
```

Notes:

- Screenshot: N/A
- Assignment files:
  - [index.php](src/assignments/vowel-counter/index.php)
  - [functions.php](src/assignments/vowel-counter/functions.php)
- Resources:
  - [str_split()](https://www.php.net/manual/en/function.str-split.php)
- Tests: `./vendor/bin/phpunit --filter VowelCounterTest`

#### Longest Common Ending

Write a function that returns the longest common ending between two strings.

Examples:

```php
longest_common_ending( 'cat', 'dog' ); // return ''
longest_common_ending( 'house', 'house' ); // return 'house'
longest_common_ending( 'sitting', 'standing' ); // return 'ing'
```

Notes:

- Screenshot: N/A
- Assignment files:
  - [index.php](src/assignments/longest-common-ending/index.php)
  - [functions.php](src/assignments/longest-common-ending/functions.php)
- Resources:
  - [strrev()](https://www.php.net/manual/en/function.strrev.php)
  - [min()](https://www.php.net/manual/en/function.min.php)
  - [strlen()](https://www.php.net/manual/en/function.strlen.php)
- Tests: `./vendor/bin/phpunit --filter LongestCommonEndingTest`

#### Longest Word

Write a function that finds the longest word in a sentence and returns it. If there are multiple longest words of the same size return the first one. Characters such as apostrophe, commas, periods, etc count as letters (e.g. O'Reilly is 8 characters long).

Examples:

```php
longest_word( 'Lorem ipsum dolor sit amet' ); // return "Lorem"
longest_word( 'Hello world' ); // return "Hello"
longest_word( '' ); // return ""
```

Notes:

- Screenshot: N/A
- Assignment files:
  - [index.php](src/assignments/longest-word/index.php)
  - [functions.php](src/assignments/longest-word/functions.php)
- Resources:
  - [explode()](https://www.php.net/manual/en/function.explode.php)
  - [strlen()](https://www.php.net/manual/en/function.strlen)
- Tests: `./vendor/bin/phpunit --filter LongestWordTest`

### Is Christmas

Create a function that takes a date string and checks whether it's christmas.

Examples:

```php
is_christmas( '2005-06-31' ); // return false
is_christmas( '2005-12-25' ); // return true
is_christmas( '2022-12-25' ); // return true
```

Notes:

- Screenshot: N/A
- Assignment files:
  - [index.php](src/assignments/is-christmas/index.php)
  - [functions.php](src/assignments/is-christmas/functions.php)
- Resources:
  - [DateTime class](https://www.php.net/manual/en/class.datetime.php)
  - [DateTime::format()](https://www.php.net/manual/en/datetime.format.php)
- Tests: `./vendor/bin/phpunit --filter IsChristmasTest`

### Longest Streak

Create a function that takes an array of date strings and return the "longest streak" (i.e. longest number of consecutive days in a row).

Examples:

```php
longest_streak( [] ); // return 0
longest_streak( [ '2005-06-31' ] ); // return 1
longest_streak( [
	'2005-06-31',
	'2010-10-18',
	'2010-10-19',
	'2010-10-20',
	'2022-01-26',
] ); // return 3
```

Notes:

- Screenshot: N/A
- Assignment files:
  - [index.php](src/assignments/longest-streak/index.php)
  - [functions.php](src/assignments/longest-streak/functions.php)
- Resources:
  - [DateTime class](https://www.php.net/manual/en/class.datetime.php)
  - [DateTime::format()](https://www.php.net/manual/en/datetime.format.php)
  - [DateInterval class](https://www.php.net/manual/en/class.dateinterval.php)
- Tests: `./vendor/bin/phpunit --filter LongestStreakTest`

#### Friday the 13th

Write a function that given the month and year as numbers, return whether that month contains Friday the 13th.

Examples:

```php
has_friday_the_13th( 2022, 5 ); // return true
has_friday_the_13th( 2022, 6 ); // return true
has_friday_the_13th( 2022, 7 ); // return false
```

Notes:

- Screenshot: N/A
- Assignment files:
  - [index.php](src/assignments/friday-the-13th/index.php)
  - [functions.php](src/assignments/friday-the-13th/functions.php)
- Resources:
  - [DateTime class](https://www.php.net/manual/en/class.datetime.php)
  - [DateTime::format()](https://www.php.net/manual/en/datetime.format.php)
  - [DateTime::createFromFormat()](https://www.php.net/manual/en/datetime.createfromformat.php)
- Tests: N/A

#### Email Validation

Write a function to validate emails to prevent simple errors like the user forggetting to put in @ or dot. Assume valid emails are those that follow the format string@string.string.

Examples:

```php
is_valid_email( '' ); // return false
is_valid_email( 'ivo' ); // return false
is_valid_email( 'ivo@' ); // return false
is_valid_email( 'ivo@agilo' ); // return false
is_valid_email( 'ivo@agilo.' ); // return false
is_valid_email( 'ivo@agilo.co' ); // return true
```

Notes:

- Screenshot: N/A
- Assignment files:
  - [index.php](src/assignments/validate-email/index.php)
  - [functions.php](src/assignments/validate-email/functions.php)
- Resources:
  - [preg_match()](https://www.php.net/manual/en/function.preg-match.php)
- Tests: `./vendor/bin/phpunit --filter ValidateEmailTest`

#### Validate US Phone Number

Create a function that accepts a string and returns true if it's in the format of a proper phone number and false if it's not. Assume any number between 0-9 (in the appropriate spots) will produce a valid phone number.

Valid phone number looks like this: (123) 456-7890

```php
is_valid_phone_number( '' ); // return false
is_valid_phone_number( '(123) 456-7890' ); // return true
is_valid_phone_number( '(555) 555-5555' ); // return true
is_valid_phone_number( '(555 ) 555-5555' ); // return false
is_valid_phone_number( '(555) 555 - 5555' ); // return false
```

Notes:

- Screenshot: N/A
- Assignment files:
  - [index.php](src/assignments/validate-us-phone-number/index.php)
  - [functions.php](src/assignments/validate-us-phone-number/functions.php)
- Resources:
  - [preg_match()](https://www.php.net/manual/en/function.preg-match.php)
- Tests: `./vendor/bin/phpunit --filter ValidateUsPhoneNumberTest`

#### Validate CSS Hex Color Code

Write a function that determines whether a string is a valid hex code. A hex code must begin with a pound key # and is exactly 6 characters in length. Each character must be a digit from 0-9 or an alphabetic character from A-F. All alphabetic characters may be uppercase or lowercase.

Examples:

```php
is_valid_hex_code( '' ); // return false
is_valid_hex_code( '#ffffff' ); // return true
is_valid_hex_code( '#000000' ); // return true
is_valid_hex_code( '#AbAbAb' ); // return true
is_valid_hex_code( '#123456' ); // return true
is_valid_hex_code( '#zzzzzz' ); // return false
```

Notes:

- Screenshot: N/A
- Assignment files:
  - [index.php](src/assignments/validate-css-hex-color-code/index.php)
  - [functions.php](src/assignments/validate-css-hex-color-code/functions.php)
- Resources:
  - [preg_match()](https://www.php.net/manual/en/function.preg-match.php)
- Tests: `./vendor/bin/phpunit --filter ValidateCssHexColorCodeTest`

#### PHP OOP Class & Object

Make an `animal` variable that would contain an instance of class `Animal`.
The class should contain two public properties `species` & `kudos`, and one protected property `calling`.
The class should also contain one public method `set_species`.

After an object is initialized, populate object property `species` by the `set_species` method that first would check if the given value `tiger` is a string, else leave null.

On the end print_r variable `animal`.

Notes:

- Screenshot: [Screenshot](assets/screenshots/oop-class-object.png)
- Assignment files:
  - [index.php](src/assignments/oop-class-object/index.php)
  - [classes.php](src/assignments/oop-class-object/classes.php)
- Resources:

  - https://www.w3schools.com/php/php_oop_classes_objects.asp
  - https://www.w3schools.com/php/php_oop_access_modifiers.asp

- Tests: `./vendor/bin/phpunit --filter OopClassObjectTest`

#### PHP OOP Constructor & Destructor

From the last task change the way how we set the value of property `species` by using Constructor that would now populate both object properties, `species` with `tiger` and `calling` with `rawr`, but first check if given values are type strings, else leave null.

After an object is initialized and if both `species` and `calling` property are set echo their values using Destructor with conjunction value `says` from class Constant `CONJUNCTION`.

Notes:

- Screenshot: [Screenshot](assets/screenshots/oop-constructor-destructor.png)
- Assignment files:
  - [index.php](src/assignments/oop-constructor-destructor/index.php)
  - [classes.php](src/assignments/oop-constructor-destructor/classes.php)
- Resources:

  - https://www.w3schools.com/php/php_oop_constructor.asp
  - https://www.w3schools.com/php/php_oop_destructor.asp
  - https://www.w3schools.com/php/php_oop_constants.asp

- Tests: `./vendor/bin/phpunit --filter OopConstructorDestructorTest`

#### PHP OOP Inheritance

Make a new class `Attributes` that would class `Animal` extend from now on.
Class should containt protected properties `weight`, `height` & `color`.
Class should also contain private property `default` with value of `n/a` that would be used as default value for properties `weight`, `height` & `color`.
The class should also contain public methods:

- `get_color` should return a value of property `color`.
- `set_color` should set the value to property `color`.

After a newly initialized object from class `Animal` is assigned to variable `animal`, assign value `orange` to object property `color` with `set_color` method.

Echo object method `get_color` return value before and after value set.

Notes:

- Screenshot: [Screenshot](assets/screenshots/oop-inheritance.png)
- Assignment files:
  - [index.php](src/assignments/oop-inheritance/index.php)
  - [classes.php](src/assignments/oop-inheritance/classes.php)
- Resources:

  - https://www.w3schools.com/php/php_oop_inheritance.asp

- Tests: `./vendor/bin/phpunit --filter OopInheritanceTest`

#### PHP OOP Abstract Class

Make a new abstract class `SetGet` that from now on class `Attributes` will extend.
The class should contain public abstract methods:

- `get_color` with no attributes.
- `set_color` with one `color` attribute.

After the new abstract class implementation makes sure that the echo from previous task works like before.

Notes:

- Screenshot: [Screenshot](assets/screenshots/oop-abstract.png)
- Assignment files:
  - [index.php](src/assignments/oop-abstract/index.php)
  - [classes.php](src/assignments/oop-abstract/classes.php)
- Resources:

  - https://www.w3schools.com/php/php_oop_classes_abstract.asp

- Tests: `./vendor/bin/phpunit --filter OopAbstractTest`

#### PHP OOP Interface

Change newly created abstract classes with interface `SetGet` that class `Attributes` will from now on implement.
After interfaces implememntations make sure that echo from previous task works like before.

Notes:

- Screenshot: [Screenshot](assets/screenshots/oop-interface.png)
- Assignment files:
  - [index.php](src/assignments/oop-interface/index.php)
  - [classes.php](src/assignments/oop-interface/classes.php)
  - [interfaces.php](src/assignments/oop-interface/interfaces.php)
- Resources:

  - https://www.w3schools.com/php/php_oop_interfaces.asp

- Tests: `./vendor/bin/phpunit --filter OopInterfaceTest`

#### PHP OOP Trait

Make `Kudos` trait that the `Animal` class should use from now on.

Trait should contain public methods:

- `give_kudos` that should increment object property `kudos` by 1
- `count_kudos` that should get the value of object property `kudos`

After trait implementation, give the animal three kudos and echo the `count_kudos` return value.

Notes:

- Screenshot: [Screenshot](assets/screenshots/oop-trait.png)
- Assignment files:
  - [index.php](src/assignments/oop-trait/index.php)
  - [classes.php](src/assignments/oop-trait/classes.php)
  - [interfaces.php](src/assignments/oop-trait/interfaces.php)
  - [traits.php](src/assignments/oop-trait/traits.php)
- Resources:

  - https://www.w3schools.com/php/php_oop_traits.asp

- Tests: `./vendor/bin/phpunit --filter OopTraitTest`

#### PHP OOP Static Method / Property

Add private static property `weight_unit` with value `kg` and add public static method `get_weight_unit` to class `Attributes`.
The method should echo the `weight_unit` value without initializing the object.

Call `get_weight_unit` on class `Animal`.

Notes:

- Screenshot: [Screenshot](assets/screenshots/oop-static.png)
- Assignment files:
  - [index.php](src/assignments/oop-static/index.php)
  - [classes.php](src/assignments/oop-static/classes.php)
  - [interfaces.php](src/assignments/oop-static/interfaces.php)
  - [traits.php](src/assignments/oop-static/traits.php)
- Resources:

  - https://www.w3schools.com/php/php_oop_static_methods.asp
  - https://www.w3schools.com/php/php_oop_static_properties.asp
  - https://www.w3schools.com/php/php_oop_inheritance.asp

- Tests: `./vendor/bin/phpunit --filter OopStaticTest`

#### PHP OOP Namespace

Add namespace `Zoo` to class `Animal` and then call a static method from the task above.

Notes:

- Screenshot: [Screenshot](assets/screenshots/oop-namespace.png)
- Assignment files:
  - [index.php](src/assignments/oop-namespace/index.php)
  - [classes.php](src/assignments/oop-namespace/classes.php)
  - [interfaces.php](src/assignments/oop-namespace/interfaces.php)
  - [traits.php](src/assignments/oop-namespace/traits.php)
- Resources:

  - https://www.w3schools.com/php/php_namespaces.asp

- Tests: `./vendor/bin/phpunit --filter OopNamespaceTest`


#### Migrate Legacy Code

A client sent us an old piece of code which parses a zipped CSV file and generates a product report. This legacy code was written for and runs on PHP 5.6. Your assigment is to make the code run on PHP 8.0.

Make a copy of the legacy code inside [migrate-legacy-code/product-reporter-2.0.0](src/assignments/migrate-legacy-code/product-reporter-2.0.0) and modernize the code there. Keep in mind the API of product reporter classes needs to stay the same.

PHP_CodeSniffer with PHP Compatibility are tools which can be used to scan PHP code for deprecated and/or removed PHP features and are already installed in PHP School. As a first step figure out how to use PHP_CodeSniffer with PHP Compatibility to scan the legacy code in this assigment and fix any found issues. There might be issues that are missed by the tools. Make sure the product report has the same output in both PHP 5.6 and PHP 8.0 for the same input CSV file.

Notes:

- Screenshot: N/A
- Assignment files:
  - [product-reporter-1.0.0/index.php](src/assignments/migrate-legacy-code/product-reporter-1.0.0/index.php)
  - [product-reporter-2.0.0/index.php](src/assignments/migrate-legacy-code/product-reporter-2.0.0/index.php)
- Resources:
  - [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
  - [PHP Compatibility](https://github.com/PHPCompatibility/PHPCompatibility)
- Tests: `./vendor/bin/phpunit --filter MigrateLegacyCodeTest`
