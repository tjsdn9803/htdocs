<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  }else{
    echo "WELCOME!";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  }else{
    echo "this is home";
  }
}
function print_list(){
  $list = scandir("./data");
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.'){
      if($list[$i] != '..'){
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i++;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    <?php
    print_title()
    ?>
  </title>
  <!-- <link rel="stylesheet" type="text/css" href="http://localhost/style.css" > -->
</head>
<body>
  <header>
    <h1><a href="index.php">WEB</a></h1>
  </header>
  <nav>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
  </nav>
  <article>
    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
    ?>
  </article>
</body>
</html>
