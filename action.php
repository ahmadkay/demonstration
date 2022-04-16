<?php 
require ("conn/connect.php");
if(isset($_POST['submit'])){
  $pdo = prepareConnection();
  $username= $_POST['username'];
$password= $_POST['password'];
$status="active";

$sql = "select * from users  where username= :username and password = :password and users.status =:status";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->bindParam(":status", $status);


try{

  $stmt->execute();
  if($stmt->rowCount() == 1){
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    @session_start();
    $_SESSION['id'] = $rows[0]['id'];
    
$_SESSION['username'] = $rows[0]['username'];
$_SESSION['role_id'] = $rows[0]['role'];
$_SESSION['password'] = $rows[0]['password'];
$_SESSION['loggedin'] = true;

if($rows[0]['role'] == 1){
echo header("location: admin.php");}

else if($rows[0]['role'] ==3){
  echo header("location: tea.php");}

  else if($rows[0]['role'] == 2){
  echo header("location: stu.php");}
  }

  else {echo
    '<script>alert ("Invalid Username/Password, Please Try Again");
    location.href="login.html";
    </script>';
}
}
catch(Exception $e){
  echo $e->getMessage();
  echo'<script>alert ("Login Failed");
    location.href="login.html";
    </script>';
}
}
	
?>