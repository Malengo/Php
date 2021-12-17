<?php
function primo($inicial,$final)
$primos=array();

for($inicial;$inicial<$final;$inicial++){
    $test=true;
     for($i=2;$i<$inicial;$i++){
         if($inicial % $i == 0){
             $test=false;
             
         }
         
     }
     if($test==true){
         $primos[]=$inicial;
     }
   
}
return $primos;

?>
	