<?php 
	$num = 22;
	$div2 = $num % 2;
	$div5 = $num % 5;
	$div10 = $num % 10;

	if($div2 == 0){
		echo ($num . "<br>O número é divísivel por 2");
	}else{
		echo ($num . "<br>O número não é divísivel por 2");
	}
	
	if($div5 == 0){
		echo ("<br>O número é divísivel por 5");
	}else{
		echo ("<br>O número não é divísivel por 5");
	}

	if($div10 == 0){
		echo ("<br>O número é divísivel por 10");
	}else{
		echo ("<br>O número não é divísivel por 10");
	}
	
 ?>