<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php $server = "localhost"; 
$username = "webproye_npotasc"; 
$password = "kpwi792q"; 
$database = "webproye_ejemplo"; 
$con = mysqli_connect($server, $username, $password, $database) or die ("No se conecto: " . mysql_error()); 

//mysql_select_db($database, $con); 
$lID = $_POST["lid"]; 
$email = mysqli_real_escape_string($con, $_POST["email"]); 
$comment = mysqli_real_escape_string($con, $_POST["comentario"]); 
$sql = "INSERT INTO comments (location_id, email, comment) ";
 $sql .= "VALUES ('$lID', '$email', '$comment')"; 
 
 if (!mysqli_query($con, $sql)) { 
  die('Error: ' . mysqli_error($con));
   } else {    
   echo "Comentario agregado"; 
   }
    mysqli_close($con); ?>
</body>
</html>
