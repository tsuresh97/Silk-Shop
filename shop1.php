<html>
<body bgcolor="sky blue">
<form method=post action=shop1.php>
<h1><center><font color=black>SUPPLIER'S DETAIL<center></h1>
<body vlink=red>
<h2><a href=alllink.php>Back To Main Menu</a></h2><br></body>
<?php
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("sample") or die("database error");
echo "Name:<input type=text name=t1 value><br>";
echo"Age:<input type=text name=t2><br>";
echo"Mobile.No:<input type=text name=t3><br>";
echo"e-mail:<input type=text name=a1><br>";
echo"<br><input type=submit value=SAVE>";
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["a1"];
$res1=mysql_query("insert into sample1 values('$a',$b,$c,'$d')");

?>
</form>
</body>
</html>