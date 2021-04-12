<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$a=1;
$b=1;
for ($i=0;$i<=$_POST["num"];$i++)
{   $c=$b+$a;
    print $a ;
    print "\t";
    $a=$b;
    $b=$c;
}
$a2=1;
$b2=1;
print "<br>";

for ($j=1;$j<=$_POST["num"];$j++)

{  
    print $j;
    print "\t";
    $c2=$b2+$a2;
    print $a2;
    print "\t";
    print $b2/$a2;
    $a2=$b2;
    $b2=$c2;

    print "<br>";
}


?>

</body>
</html>







