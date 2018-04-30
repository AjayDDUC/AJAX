<?php  
 $state=$_GET['state'];
 $c1=array('B','C','D');
 $c2=array('F','H','I');
 if($state=="A")
 {
 	foreach ($c1 as $v1) {
 		echo "<option>$v1</option"."<BR>";
 	}
 }
 else if($state=="E")
 {
 	foreach ($c2 as $v1) {
 		echo "<option>$v1</option"."<BR>";
 	}
 }
 else
 	echo "<option>first select</option>";
?>