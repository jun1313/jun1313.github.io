<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$result1=$_POST["num1"]*$_POST["num11"]/2;
$result2=$_POST["num2"]*$_POST["num22"];
$result3=pi()*$_POST["num3"]*$_POST["num3"];
$result4=$_POST["num4"]*$_POST["num44"]*$_POST["num444"];
$result5=pi()*$_POST["num5"]*$_POST["num5"]*$_POST["num55"];
$result6=4/3*pi()*$_POST["num6"]*$_POST["num6"]*$_POST["num6"];
print "1.삼각형의 면적:";
print $result1;
print "<br>";
print "2.직사각형의 면적:";
print $result2;
print "<br>";
print "3.원의 면적:";
print $result3;
print "<br>";
print "4.직육면체의 체적:";
print $result4;
print "<br>";
print "5.원통의 체적:";
print $result5;
print "<br>";
print "6.구의 체적:";
print $result6;
?>

</body>
</html>




