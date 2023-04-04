<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Data</title>
</head>
<body>

<?php
if(isset($_POST["txUSER"])){
    $usr = $_POST["txUSER"];
    if($usr==""){
      echo "<div><h3 style='color:blue;padding:5px;'>User Name/password kalian salah</h3></div>";
    }
  }
  if(isset($_POST["txPASSKEY"])){
    $pwd = $_POST["txPASSKEY"];
    if($pwd==""){
      echo "<div><h3 style='color:blue;padding:5px;'>User Name/password kalian salah</h3></div>";
    }
  }

    
 
?>

<form action ="latihan02Post.php" method="POST">
 <div>
    User Name<br>
    <input type="teks" id="txUSER" name="txUSER" required >
</div>

<div>
    Password<br>
    <input type="Password" id="txPASSKEY" name="txPASSKEY">
</div>

<div>
    <button type="submit"> login </button>
    <a href="daftar.php"> Daftar </a>
    
</div>

</form>

</body>
</html>