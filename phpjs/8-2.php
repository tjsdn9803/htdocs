<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
</head>
<body>
  <?php
    $password = $_GET["pass"];
    if($password == "1111"){
      echo "주인님 환영합니다";
    }else{
      echo "뉘신지?";
    }
  ?>
</body>
</html>
