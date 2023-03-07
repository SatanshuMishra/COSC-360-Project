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

var_dump(array_diff(scandir('.'), array('..', '.')), array_diff(scandir('./images'), array('..', '.')));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./">
</head>
<body>
  <a href="home.php"><button>Go To Home</button></a>
</body>
</html>