<?php
	
	for($x=0;$x < 3;$x++)
	{
		        $count=0;
				echo "Data Received (unsorted)";
				foreach($_GET as $val => $x_value)
				{
					echo "Key=" . $val . ", Value=" . $x_value;
					echo "<br>";
					echo "<br>";
					$count=$count+1;
				}
				echo "There are" .$count. "number of lines";
				echo "<br>";
				echo "<br>";
		
		if($x = 1)
		{
		         $count=0;
				echo "Data Received (sorted by name)";
				foreach($_GET as $val => $x_value)
				{
				   
					$k=array("$val"=>"$x_value");
					ksort($k);
					echo "Key=" . $val . ", Value=" . $x_value;
					echo "<br>";
					echo "<br>";
					$count=$count+1;
					
				}
				echo "There are" .$count. "number of lines";
				echo "<br>";
				echo "<br>";
		}
		if($x = 2)
		{
		         $count=0;
				echo "Data Received (sorted by value)";
				foreach($_GET as $val => $x_value)
				{
				   
					$a=array("$val"=>"$x_value");
					asort($a);
					echo "Key=" . $val . ", Value=" . $x_value;
					echo "<br>";
					echo "<br>";
					$count=$count+1;
					
				}
				echo "There are" .$count. "number of lines";
				echo "<br>";
				echo "<br>";
		}
	}
	
?>
