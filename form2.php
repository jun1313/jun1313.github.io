<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
for($i=0;$i<$_POST["num"];$i++)
{
$car=rand(10,100);
$num[$i]="$car";
echo $num[$i];
echo "<br>";

}
sort ($num);
echo "<br>";
echo "<br>";

for($j=0;$j<$_POST["num"];$j++)
{
print $num[$j];
echo "<br>";

}
?>

</body>
</html>




