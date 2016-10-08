<?php

//Task 1
for ($i = 1; $i <= 10; $i++) {
    echo 'Hello! <br>';
	
}

//Task 2
$sum=0;
for ($i = 1; $i <= 112; $i+=3) {
    
	$sum+=$i;
	
}

echo $sum .'<br>';

//Task 3
for ($i = 1; $i <= 10000; $i++) {
    
	if((strpos($i, '3') !== false) && ($i%5!==0)) {
		 echo $i .'<br>';
	}
}

//Task 4

$limit = 3; 
$max_num = 100; 
$used_nums = array(); 
while($limit) { 
  $random = rand(0, $max_num); 
  $limit-=!isset($used_nums[$random]); 
  $used_nums[$random]=true; 
} 

foreach ($used_nums as $key => $value)
{

echo $key." ";
}

echo "<br> ";

//Task 5
for ($i = 35; $i <= 87; $i++) {
    
	if(($i%7==1) ||($i%7==2) || ($i%7==5) ) {
		echo $i .'<br>';
	}
}


//Task 6
$A=100000;
$B=999999;
$k=0;
$p=0;
for($j=$A; $j<=$B; $j++){
 $tmp=sprintf('%d', $j); 
 if($tmp[0]+$tmp[1]+$tmp[2]==$tmp[3]+$tmp[4]+$tmp[5]){
	 echo $tmp, '<br>';
 $k++;
 }
}

echo 'Happy tickets ',$k.'<br>';
$p=$k*100/$j;

echo 'Procent happy tickets ',$p, '%';