<html>
<body>
<form action =post action=shop3.php>
<h1><center>Stock Section</center></h1>
<body vlink=red>
<h2><a href=alllink.php>Back To Main Menu</a></h2><br></body>
<?php
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("purchase5") or die("database error");
echo"<table border=1>";
echo"<tr><th>Product ID<th>Product Name<th>Quantity<th>Rate Per Piece<th>Vat<th>Profit<th>Total<th>Date</tr>";
$res=mysql_query("Select * from purchase6");
while($rn=mysql_fetch_array($res))
{
$bd1=$rn['proid'];
$bd7=$rn['proname'];
$bd2=$rn['quantity'];
$bd3=$rn['rate'];
$bd4=$rn['vat'];
$bd5=$rn['profit'];
$bd6=$rn['total'];
$bd8=$rn['date'];
echo "<tr><td>".$bd1."<td>".$bd7."<td>".$bd2."<td>".$bd3."<td>".$bd4."<td>".$bd5."<td>".$bd6."<td>".$bd8."</tr>";

}
?>