<?php
  $name = $_POST['names'];
  $password = $_POST['passwords'];
  $gender = $_POST['R1'];
  $gmail = $_POST['gmails'];

  //database connection
  $conn = new mysqli('localhost','root','','connecting database');
  if ($conn->connect_error){
    die('connection failed : '.$conn->connect_error );
  }else {
      $stmt = $conn->prepare("insert into registration(name,password,gender,gmail) values(?,?,?,?)");
      $stmt->bind_param("ssss",$name,$password,$gender,$gmail);
      $stmt->execute();
      echo "registraion succesfully";
      $stmt->close();
      $conn->close();

  }
 ?>
