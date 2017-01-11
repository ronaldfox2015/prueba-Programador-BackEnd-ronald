<?php
  include 'ChangeString.php';
$change=new ChangeString();

 $variable= $argv[1];
echo $change->build($variable)."\n";
?>

