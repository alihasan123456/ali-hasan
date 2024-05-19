<?php  
    //CONNECT TO MYSQL
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

// Output data of each row
while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
}

$conn->close();
?>