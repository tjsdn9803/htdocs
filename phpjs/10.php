<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
  <style media="screen">
    ul {color: blue}
  </style>
</head>
<body>

  <h1>Javascript</h1>
  <ul>
  <script>
    list = new Array("one","two","three");
    i=0;
    while(i < list.length) {
      document.write("<li>"+list[i]+"</li>");
      i++;
    }
  </script>
  </ul>

  <h1>PHP</h1>
  <?php
    $list = array("1번","2번","3번","4번");
    $i = 0;
    while($i<count($list)){
      echo "<li>".$list[$i]."</li>";
      $i++;
    }
   ?>

</body>
</html>
