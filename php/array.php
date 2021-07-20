<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworkers = array('egoing','leezche','duru','taeho');
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';
    array_push($coworkers,'tjsdn','선우');
    echo count($coworkers);
    array_unshift($coworkers,'rlacl');
    var_dump($coworkers);
     ?>

     <ol>
       <li><?php echo $coworkers[1].'<br>'; ?></li>
       <li><?php echo $coworkers[3].'<br>'; ?></li>
     </ol>
  </body>
</html>
