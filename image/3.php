<?php
 $server_name='localhost:';
 $user_name='root';
 $password="";
 $database="resort";

   $firstname = $_POST['firstname'];
   $phn_number = $_POST['phn_number'];
   $departure_date= $_POST['departure_date'];
   $guest = $_POST['guest'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $arrival_date = $_POST['arrival_date'];
   $room = $_POST['room'];

  
   //database connection
   $conn = new mysqli($server_name,$user_name,$password,$database);
   if ($conn->connect_error) 
   {
   	   die('Connection failed:' .$conn->connect_error);
   }
   echo"database connected";
   
   	   $stmt = $conn->prepare("INSERT INTO book(firstname,phn_number,departure_date,guest,lastname,email,arrival_date,room)
   	   	VALUES(?,?,?,?,?,?,?,?");
   	   $stmt->bind_param("siiissis",$firstname,$phn_number,$departure_date,$guest,$lastname,$email,$arrival_date,$room);
   	   $stmt->execute();
   	   echo"book successfully....";
   	   $stmt->close();
   	   $conn->close();
       
  ?>