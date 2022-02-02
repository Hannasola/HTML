<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

#1.
$month = date('F', time());
  if ($month == 'August') {
  echo "It's August, so it's still holiday.";
} else {
  echo "Not August, This is $month so i don't have any holidays.";
}

#2.

$color = 'Red';
  if ($color == 'Red') {
  echo " The color is red.";
} else {
  echo "The color is not red.";

}

echo "<br/>";

#3.

$grade = 88;

if( $grade >80 ) 
{
    echo "Grade is excellent";

}

else if ( $grade >70 && $grade <=80)
{
    echo "Grade is great";

}

else if ( $grade >60 && $grade <=70)
{
    echo "Grade is good";

}

else if ( $grade >50 && $grade <=60)
{
    echo "Grade is pass";

}

else 
{
    echo "Grade is fail";

}

echo "<br/>";


#4.
?>



<form method="post">
Enter your name<input type="text" name="y">
Enter your age<input type="text" name="n"/><hr/>
<input type="submit" value="check age"/>
</form>

<?php

echo "<br/>";

$age=$_POST['n'];

if( $age > 18 ) 
{
    echo "You are eligble to vote";

}

else
{
    echo "You are not eligble to vote";

}

echo "<br/>";

#5.
echo "<br/>";

for($i=0;$i<=8;$i++)
{  
for($j=8-$i;$j>=1;$j--)
{  
echo $j." ";
}  
echo "<br>";  
}  
 
echo "<br/>";


#6.

function pyramid($p)
{
      
    for ($i = 0; $i < $p; $i++)
    {
          
        // inner loop to handle
        // number of columns
        // values changing acc. 
        // to outer loop
        for($j = 0; $j <= $i; $j++ )
        {
              
            
            echo "* ";
        }
  
        // ending line after
        // each row
        echo "<br/>";
    }
}
  
    // Driver Code
    $p = 8;
    pyramid($p);
  

?>

</body>
</html>