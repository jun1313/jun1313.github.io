<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <p>1 부터 n까지의 숫자를 프린트하고 전체 합과 곱을 구합니다.
    </p>
  </head>
  <body>
    <form action="welcome.php" method="post">
      <p><input type="text" name="num"></p>
      <p><input type="submit"></p>
    </form>
    <?php
   $num1=0;
   $num2=1;
   $prod=1;
   if(isset($_POST["num"]))
   for($prod=1; $prod<=$_POST["num"]
   ; $prod=$prod+1)
    {$num1=$num1+$prod;
    }
    
    if(isset($_POST["num"]))
    for($prod=1; $prod<=$_POST["num"]
   ; $prod=$prod+1)
    {$num2=$num2*$prod;
    }
    ?>
<?php
if(isset($_POST["num"]))
echo ("총합:$num1");
?>
<?php
if(isset($_POST["num"]))
echo ("총곱:$num2");
?>

  </body>
</html>