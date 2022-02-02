<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <? 

    phpinfo();

    echo "Hanna Sola BBCAP21A3";
    echo "   ";
    echo 'Hello world! My name is "David"';
    echo "   ";
    echo 'It is possible to place variables inside of double-quoted strings (<i>"e.g. "string here and a $variable"</i>"). <b>By putting a variable</b> inside the quotes (" ") you are telling <u>PHP</u> that you want it to grab the string value of that variable and use it in the string. The example below shows an example of this  feature. ';

    define ("FIRSTNAME", "Hanna");
    define ("LASTNAME", "Sola");

    echo "My first name is ";
    echo FIRSTNAME;
    echo " and last name is ";
    echo LASTNAME;
    echo ". ";  

    echo "Today is " . date("2000-01-31");
    $title = '<h1> PHP is interesting </h1> ';
    echo $title;

    $g1=5;
    $g2=4;
    $g3=5;

    echo "<table border='1'>
    <tr>
    <th>S.N</th>
    <th>name</th>
    <th>grade</th>
    </tr>";

    echo "<table border='1'>
    <tr>
    <th>1</th>
    <th>Pekka</th>
    <th>$g1</th>
    </tr>";

    echo "<table border='1'>
    <tr>
    <th>2</th>
    <th>Johanna</th>
    <th>$g2</th>
    </tr>";

    echo "<table border='1'>
    <tr>
    <th>3</th>
    <th>John</th>
    <th>$g3</th>
    </tr>";

    ?>
    
</body>
</html> 