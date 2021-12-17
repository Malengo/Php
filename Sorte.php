<?php
$a=array();
for($x=1;$x<20;$x++){

$a[]=rand(1,10);
}
$valores= array_unique($a);
foreach($valores as $val)
echo $val;
?>
