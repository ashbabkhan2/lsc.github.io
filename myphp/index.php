<?php
  $server = "localhost";
  $username = "root";

  $password = "";
  $connection = mysqli_connect($server,$username,$password);
  if($connection==FALSE){
      echo "There is a error connecting with your database";
  }

  mysqli_select_db($connection,'my_database');
   $first = $_POST['first_name'];
   $last = $_POST['Last_name'];
   $email = $_POST['Email'];
   $data = "Insert into table_2 (first_name,last_name,email) Values ('$first','$last','$email')";
   mysqli_query($connection,$data);
   header('location:abc.php');
?>