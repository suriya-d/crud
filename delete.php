<?php
$con=new mysqli('localhost','root','','test');
$id=$_GET['deletename'];
$sql="delete from used where id='".$id."'";
$res=mysqli_query($con,$sql)
?>