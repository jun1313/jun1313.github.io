<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
   $num1=0;
   $num2=1;
   $prod=1;
   for($prod=1; $prod<=$_POST["num"]
   ; $prod=$prod+1)
    {$num1=$num1+$prod;
    }
   echo ("총합:$num1");
   for($prod=1; $prod<=$_POST["num"]
   ; $prod=$prod+1)
    {$num2=$num2*$prod;
    }
   echo ("총곱:$num2");


?>

</body>
</html>





