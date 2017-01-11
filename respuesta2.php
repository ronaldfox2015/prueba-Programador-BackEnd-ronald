<?php
  include 'CompleteRange.php';
$change=new CompleteRange();

 $variable= $argv[1];
echo $change->build($variable)."\n";
?>
