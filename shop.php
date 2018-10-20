<html>
<body>
<form method = post action=shop.php>
<h1><center><strong>Bill Section</strong></center></h1>
<body vlink=red>
<h2><a href=alllink.php>Back To Main Menu</a></h2><br></body>
<?php
echo"DATE:<input type=text name=d1>";
$date=$_POST["d1"];
$ss=10/10/2000;
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("purchase5") or die("database error");
$res=mysql_query("Select date from purchase6");
while($rn=mysql_fetch_array($res))
{
$ss=$rn['date'];
}
echo"<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSupplier's ID:<select name=s1>";
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("sur6") or die("database error");
$res=mysql_query("Select proid from sur7");
while($rn=mysql_fetch_array($res))
{
$rno=$rn['proid'];
echo "<option value =".$rno.">".$rno."</option>";
}
echo "</select>";
echo"<br>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProduct Name:<input type=text name=t6><br>"; 
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspQuantity:<input type=text name=t7><br>"; 
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRate Per Piece:<input type=text name=t8><br>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVat:<input type=text name=t9><br>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSales Profit(%):<input type=text name=t10><br>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDiscount:<input type=text name=t11></h2><br>";
$e=$_POST["s1"];
$g=$_POST["t6"];
$h=$_POST["t7"];
$i=$_POST["t8"];
$j=$_POST["t9"];
$k=$_POST["t10"];
$l=$_POST["t11"];
mysql_connect("localhost","root","")or die("localhost error");
mysql_select_db("purchase5")or die("database error");
$per=1;
$suresh=$e*10000;
$res=mysql_query("Select counter from purchase6");
while($rn=mysql_fetch_array($res))
{
$id=$rn['counter'];
$per=$id+1;
}
$pro=$suresh+$per;
$price=$h*$i;
$vat=$price*$j/100;
$profit=$price*$k/100;
$discount=$price*$l/100;
$total=$price+$vat-$discount;
$ma=1;
echo"<center><input type=submit value=ADD name=b4>";
echo"<center><input type=submit value=CONFORM name=b88>";
echo"<input type=submit value=DELETE name=b5>";
echo"<input type=reset value=CLEAR>";
$btn4=$_POST["b4"];
$btn88=$_POST["b88"];
mysql_connect("localhost","root","")or die("localhost error");
mysql_select_db("purchase1")or die("database error");
if($btn4=="ADD")
{
 $res=mysql_query("insert into purchase2 values($e,$pro,'$g',$h,$i,$j,$k,$l,$total,$ma)");
 mysql_connect("localhost","root","")or die("localhost error");
 mysql_select_db("purchase5")or die("database error");
 $res=mysql_query("insert into purchase6 values($per,$pro,'$g',$h,$i,$j,$profit,$total,'$ss')");
}
$btn5=$_POST["b5"];	
if($btn5=="DELETE")
{
mysql_connect("localhost","root","")or die("localhost error");
mysql_select_db("purchase1")or die("database error");
$res=mysql_query("delete from purchase2 where quantity!=0");
}
echo"<a href=un.php><h1>print<h1></a>";
mysql_connect("localhost","root","")or die("localhost error");
mysql_select_db("purchase1")or die("database error");
$res=mysql_query("select * from purchase2")or die("Table error");
echo"<Table border=1>";
echo"<tr><th>PROID<th>PRONAME<th>QTY<th>RATE<th>VAT<th>PROFIT<th>DISCOUNT<th>TOTAL</tr>";
while($rn=mysql_fetch_array($res))
{
   echo"<tr><td>".$rn['proid'];
   echo"<td>".$rn['proname'];
   echo"<td>".$rn['quantity'];
   echo"<td>".$rn['rate'];
   echo"<td>".$rn['vat'];
   echo"<td>".$rn['profit'];
   echo"<td>".$rn['discount'];
   echo"<td>".$rn['total']."</tr>";
}
  echo"</table>";
?>
</form>
</body>
</html>