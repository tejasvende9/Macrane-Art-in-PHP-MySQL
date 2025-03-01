<?php
  include "connection.php";
  $sql="SELECT * FROM art where aid={$_POST["aid"]}";
  $res=$cn->query($sql);
  if($res->num_rows>0){
    $row=$res->fetch_assoc();
    echo $row["aprice"];
  }
  else{
    echo "0";
  }
?>