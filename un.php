<html>
<head>
<style>
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

</style>
</head>
<?php
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("purchase1") or die("database error");
echo "<table border=1>";
echo "<tr><th>&nbspProduct ID&nbsp<th>&nbspProduct Name&nbsp<th>&nbspQuantity&nbsp<th>&nbspRate&nbsp<th>&nbspVat&nbsp<th>&nbspDiscount&nbsp<th>&nbspTotal&nbsp</tr>";
$res=mysql_query("Select * from purchase2");
while($rn=mysql_fetch_array($res))
{
$bd8=$rn['supid'];
$bd1=$rn['proid'];
$bd2=$rn['proname'];
$bd3=$rn['quantity'];
$bd4=$rn['rate'];
$bd5=$rn['vat'];
$bd6=$rn['discount'];
$bd7=$rn['total'];
$tot=$tot+$bd7;
echo "<tr><td><center>".$bd1."<td><center>".$bd2."<td><center>".$bd3."<td><center>".$bd4."<td><center>".$bd5."<td><center>".$bd6."<td><center>".$bd7."</center></tr><br>";
}
mysql_connect("localhost","root","") or die("localhost error");
mysql_select_db("sur6") or die("database error");
$res=mysql_query("Select * from sur7 where proid=$bd8");
while($rn=mysql_fetch_array($res))
{
$id=$rn['proname'];
$id1=$rn['mobile'];
$id2=$rn['address'];
}
echo"<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThanjai Silks</h1>";
echo"<h2><i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBILL</i></h2>";
echo"<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u>Supplier's Detail</u></h2>";
echo "<big>Name:&nbsp".$id;
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo "Mobile No.:&nbsp".$id1;
echo"<br>";
echo "Address:&nbsp".$id2;
echo"<br></big>";
echo"</table>";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>TOTAL=$tot";
echo"<br><br><br><br><br><br><br>";
echo"<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href=shop.php><i>Thank You For Shopping With us.....</i></a></h2>";
?>
<head runat="server">
    <title>Print Page</title>
    <script type="text/javascript">
        function print_page() {
            var ButtonControl = document.getElementById("btnprint");
            ButtonControl.style.visibility = "hidden";
            window.print();
        }
    </script>
</head>
 <body>
<div>
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;

<button  type=button class =button id="btnprint" value="Print This Page" onclick="print_page()" />
</div>
</body>