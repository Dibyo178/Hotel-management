<?php 

//include('tokenconnect.php');

$con=mysqli_connect("localhost","root","","jfaran");


$id=$_GET['tid'];

$status=$_GET['status'];


$q="update room set status=$status where tid =$id";

mysqli_query($con,$q);

header('location:adminRoom.php');



?>