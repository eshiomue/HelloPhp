<?php
$host = 'localhost';
$port = 3306;
$username = 'root';
$password = '';
$database = 'prosperhellophp';

// Connection 
$conn = new mysqli($host, 
           $username, $password, $database);
 
// For checking if connection is
// successful or not
if ($conn->connect_error) {
  die("Connection failed: "
      . $conn->connect_error);
}
echo "Connected successfully";
    $sql = "INSERT INTO user (name, email, sex, dept, level, years_of_service) VALUES('Paul','paul@gmail.com','M', 'Admin', 100, 10)";
    // $result -> free_result();
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
  $conn -> close();

?>