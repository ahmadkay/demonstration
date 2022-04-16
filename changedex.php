<?php
require("conn/connect.php");
if(isset($SESSION['role'])){
	header("location: index.html");
}

if(isset($SESSION['userID'])){
$id = $_SESSION['userID'];
}
if(isset ($_POST['submit']));
{
$password=md5($_POST['cpass']);
$newpassword=addslashes($_POST['npass']);
$newpassword=md5($_POST['npass']);
$username= $_SESSION['username'];
$sql ="SELECT password FROM users WHERE username=:username and password=:password";
$stmt= $pdo -> prepare($sql);
$stmt-> $bindParam(':username', $username);
$stmt-> $bindParam(':password', $password);
$stmt-> execute();
$rows = $stmt -> fetchALL(PDO::FETCH_OBJ);
if ($stmt-> rowcount() > 0)
{
$sql ="update users set password=:newpassword where username=:username";
$stmt = $pdo-> prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':newpassword', $newpassword);
$stmt->execute();
echo "<script> alert('your password sussesfully change.'); loation.href='index.php';</script>";
}
else{
	echo "<script> alert('your current password is wrong.'); location.href='change.php';</script>";
}
}



?>