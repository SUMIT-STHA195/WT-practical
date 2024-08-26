<!-- php work -->
<?php
 // PHP mysql connection
if($_REQUEST==$_POST){
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$connection=new mysqli("172.17.0.3","root","root");
if($connection->connect_error){
    die('connection failed!!!');
}
else{
   echo 'connection successful';
}
$sql = 'CREATE DATABASE IF NOT EXISTS student_details';
//actual connection starts here
if($connection->query($sql) == true){
    echo "DATABASE CREATED SUCCESSFULLY!!";
}
else{
    echo "FAILED TO CREATE DATABASE!!";
}
  //mysql config to create table
  $connection1 = new mysqli('172.17.0.3', 'root', 'root',"student_details" );//test is db 
  //creating new table inside a db
  $table_sql = "CREATE TABLE IF NOT EXISTS students (id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL UNIQUE,
                gender ENUM('Male', 'Female', 'Other') NOT NULL
                )";
 if($connection1->query($table_sql) == true){
         $addition_sql=" INSERT INTO students (name,email,gender) VALUES ('$name','$email','$gender')";
         if($connection1->query($addition_sql) == true){
             echo "VALUES ADDED TO TABLE students";
         }
 }
 else{
         echo "FAILED TO CREATE TABLE!!";
 }
}
$conn->close();
?>