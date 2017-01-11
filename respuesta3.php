<?php
  include 'ClearPar.php';
$change=new ClearPar();

 $variable= $argv[1];
echo $change->build($variable)."\n";
?>
