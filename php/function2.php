<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>function</title>
</head>
<body>
  <h1>Function</h1>
  <h2>Basic</h2>
  <?php
  function basic(){
    print("Lorem ipsum dolor sit amet1,<br>");
    print("Lorem ipsum dolor sit amet2,<br>");
  }

  basic();
  ?>
  <h2>parameter &amp; argument</h2>
  <?php
  function sum($left,$right){
    print($left+$right);
    print("<br>");
  }
  function sum2($left,$right){
    return $left+$right;
  }
  sum(2,4);
  print(sum2(2,4));
  file_put_contents("test.txt",sum2(7,8));
  ?>
</body>
</html>
