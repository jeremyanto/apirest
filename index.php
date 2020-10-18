<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "apirest";
$conn = mysqli_connect($server, $username, $password, $db);

$db = new PDO(
	'mysql:host=localhost:;dbname=apirest'
);

 if(isset($_POST['submit'])){
   $email = $_POST['username'];
   $pass = $_POST['password'];

   $sql = "SELECT * FROM user where username = '$email'";
  
   $result = $db->prepare($sql);
   $result->execute();

   if($result->rowCount() > 0){
    $data = $result->fetchAll();
      if (password_verify($pass, $data[0]["password"]));
}
   else{
     $pass = password_hash($pass, PASSWORD_DEFAULT);
   }


 }

  



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Connexion</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="img/favicon.png" type="images/x-icon" />  
      <link rel="stylesheet" type="text/css" media="screen" href="style.css">
      <script src="script.js"></script>
  </head>
  <body>
  <form action = "" method = "post">
    <label>E-mail  :</label><input type = "text" name = "username" class = "box"/><br /><br />
    <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
    <input type = "submit" value = " Submit " name="submit"/><br />
  </form>
  </body>
</html>
