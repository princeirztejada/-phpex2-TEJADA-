<!DOCTYPE html>
<html>
<head></head>
<body>
   <?php 
      include ("Functions.php");
      $functions = new Functions;

      echo "<br>".$functions -> triangle($_GET['first'],$_GET['second']);
      echo "<br>" . $functions -> countones($_GET['integer']);
      echo "<br>" . $functions -> twoparts($_GET['path1'],$_GET['path2']);
      echo "<br>" . $functions -> sastrynum($_GET['test']);
   ?>