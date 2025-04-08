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

if ($result = $conn -> query("SELECT * FROM user u JOIN profile p WHERE u.id=p.user_id")) {
    echo "<br>Returned rows are: " . $result -> num_rows . '<br>';

    if ($result->num_rows > 0) {
        ?>

        <table cellspacing="10" cellpadding="10">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Sex</td>
                <td>Email</td>
                <td>Dept</td>
                <td>Level</td>
                <td>Years of Service</td>
                <td>Address</td>
                <td>Date of Birth</td>
            </tr>
        

        <?php
        while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo($row['id']); ?></td>
                <td><?php echo($row['name']); ?></td>
                <td><?php echo($row['sex']); ?></td>
                <td><?php echo($row['email']); ?></td>
                <td><?php echo($row['dept']); ?></td>
                <td><?php echo($row['level']); ?></td>
                <td><?php echo($row['years_of_service']); ?></td>
                <td><?php echo($row['address']); ?></td>
                <td><?php echo($row['dob']); ?></td>
            </tr>
        <?php
        }
        ?>
        </table>
    <?php
    } else {
        echo "0 results";
    }
    $result -> free_result();
  }
  
  $conn -> close();

?>