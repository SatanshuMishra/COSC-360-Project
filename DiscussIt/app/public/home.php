
<!-- PostgreSQL -->
<?php 
// $host = "172.22.0.4"; 
// $user = "discussIt"; 
// $pass = "password"; 
// $db = "discussItDatabase";  

// $con = pg_connect("host=$host dbname=$db user=$user password=$pass");
// if(!$con){
//   echo "Connection failed\n";
//   exit();
// }

// $query = "SELECT * FROM public.user"; 

// $rs = pg_query($con, $query);
// if(!$rs){
//   echo "Query failed\n";
//   exit();
// }


// while ($row = pg_fetch_assoc($rs)) {
//     echo implode(", ", $row);
//     echo "\n";
// }

// pg_close($con);
?>

<!-- MySQL -->
<?php
$servername = "discussIt-mysql";
$username = "discussIt";
$password = "password";
$dbname = "discussItDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>