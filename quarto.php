<?php 
	$num1 = 8;
	$num2 = 9;
	$num3 = 7;
	$cont = 0;
	$t = 0;

	while($cont <= 4){

		if($num1 > $num2){
           $t = $num1;
           $num1 = $num2;
           $num2 = $t;

       }else if($num2 > $num3){
       	$t = $num2;
       	$num2 = $num3;
       	$num3 = $t;
       }

       $cont++;
   }

   echo($num3 . "<br>" . $num2 . "<br>" . $num1);
   
 ?>