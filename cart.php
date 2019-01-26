<html>
<head>
 <style>

table, th, td {
  border: 1px solid black;
 
 border-collapse: collapse;
}

</style>
</head>
<body>
<?php
	$name=$_GET["name"];
	$gender=$_GET["gender"];
	$address=$_GET["address"];
	$pno=$_GET["pno"];
	$payment_type=$_GET["paymenttype"];
	$q1=$_GET["Q1"];
	$q2=$_GET["Q2"];
	$q3=$_GET["Q3"];
	$q4=$_GET["Q4"];
	?>
    <?php echo "Name:".$name;?><br>
    <?php echo"Gender:". $gender;?><br>
    <?php echo"Address:".$address;?><br>
    <?php echo"phonenumber:".$pno;?><br>
    <?php echo"Type of payment you opted:".$payment_type;?><br>
    <table>
    <tr>
    <th>item</th>
    <th>Qty</th> 
    <th>cost</th>
    </tr>
  
<tr>
    
<td>USB pendrive</td>
    
<td><?php echo $q1;?></td> 
    
<td><?php echo $q1*300;?></td>
 
 </tr>
 
 <tr>
   
 <td>wireless mouse</td>
   
 <td><?php echo $q2;?></td> 
   
 <td><?php echo $q2*200;?></td>
  </tr>
 
 <tr>
   
 <td>keyboard</td>
   
 <td><?php echo $q3;?></td> 
    
<td><?php echo $q3*400;?></td>
 
 </tr>
 
 <tr>
    
<td>laptop</td>
    
<td><?php echo $q4;?></td> 
    
<td><?php echo $q4*33000;?></td>
 
 </tr>
 <?php $total=$q1*300+$q2*200+$q3*400+$q4*33000;?> 
 <tr>
<td><h2>Total cost :</h2><?php echo $total;?></td>
</tr>
</table>
<h1><?php echo "<br>"; 
    echo"Thanks for your order"?></h1>
</body>
</html>
