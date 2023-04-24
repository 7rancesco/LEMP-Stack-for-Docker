<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "my_db_test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO my_table (my_text) VALUES ('Hello by php =)')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='padding:15px; text-align:center;'>";
    echo "<h1>WELCOME TO LEMP!</h1>";
    echo "<p><span style='color:green; font-size:25px;'>•</span> MySQL connection successfully!</p>";
    echo "<p>New record was created in my_db_test/my_table. See <a href='http://localhost:8001'>PhpMyAdmin</a></p>";
    echo "</div>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();