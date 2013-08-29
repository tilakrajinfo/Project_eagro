<?PHP
include('db.inc.php');
$uid=$_GET["val"];
$sql="select * FROM egro_tab WHERE code='$uid'";
$result=mysql_query($sql);
$row= mysql_fetch_array($result);
$name= $row["name"];
$code= $row["code"];
$price= $row["price"];
$insert="INSERT INTO shopping_cart(name,code,price) VALUES ('$name','$code','$price')";
mysql_query($insert);
//header("Location:shopingbag.php");
?>
<html>
<script language="JavaScript" type="text/javascript">

 window.location.replace('shopingbag.php');

 
</script>
</html>
