<?php session_start();
include 'connection.php';
$id = $_SESSION['id'];
$aid=$_GET['aid'];
if(!isset($_SESSION["id"]))
{
    header('location:index.php');
}
$q="DELETE FROM art WHERE aid=".$aid;
if (mysqli_query($cn,$q)) {
  echo "<script>alert('Product Delete'); window.location.href='art-details.php';</script>";
} else {
   echo "<script> alert('Failed to Delete Product');</script>;";
}