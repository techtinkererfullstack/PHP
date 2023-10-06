### Variables

```
#variable can be asigned with _ letter
$myName = "Shafe alam";

#to show myname as variable we need to assigned it with double clots or {}
echo 'hello $myname';
echo "my name is $myName";

echo 'my name is ' . $myName
```

### Embadding php in html

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample php</title>
</head>
<body>
    <h1>
        <?php
        $myName = 'shafe alam';
        echo 'My name is '. $myName
        ?>
    </h1>
</body>
</html>

```

### variable, constant, variable variable, magic variable

```
<?php
//variable
$_myName = "tasnim"; //variable are assigned by value
$_lastName = "alam";
$_myName = &$_lastName; //variable assingned by referrence
echo "my name is {$_myName}";


//constant
define('PROFESSION', 'software engineer');
const STATUS_PAID = 'PAID';
echo 'PROFESSTION : ' . PROFESSION;
echo STATUS_PAID;

defined("STATUS_PAID");


//when have static data use constant

//magic variables
echo PHP_VERSION;
echo __LINE__;

//variable variable
$name = 'tasnim';
$$name = 'alam';

echo "$name, {$$name}";

```
