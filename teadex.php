<?php
session_start();
require("conn/connect.php");

if(isset($_POST['submit']))
{
	$classID = $_SESSION['classID'];
	$counter = 1;
$pdo= prepareconnection();
$surname = $_POST['surname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$phonenumber= $_POST['phoneno'];
$email= $_POST['mail'];
$sex= $_POST['sex'];
$address = $_POST['add'];
$yearjoin = $_POST['yearj'];
$session = $_POST['session'];
$status='active';
$role=3;


$sql= "insert into users (username, password, role, status) values(:username, :password, :role, :status)";
$stmt = $pdo->prepare ($sql);
$stmt->bindParam(':username',$email);
$stmt->bindParam(':password',$surname);
$stmt->bindParam(':role',$role);
$stmt->bindParam(':status',$status);

	try{
		
		$stmt->execute();
		$userid=$pdo->lastInsertID();
			
		$sql="insert into teachers(userid, surname, lastname, date_of_birth, phonenumber, email, sex, address, yearjoin, session)
		values(:userid, :surname, :lastname, :date_of_birth, :phonenumber, :email, :sex, :address, :yearjoin, :session)"; 
			$stmt = $pdo->prepare ($sql);
			$stmt->bindParam(':userid',$userid);
			$stmt->bindParam(':surname',$surname);
			$stmt->bindParam(':lastname',$lastname);
			$stmt->bindParam(':date_of_birth',$dob);
			$stmt->bindParam(':phonenumber',$phonenumber);
			$stmt->bindParam(':email',$email);
			$stmt->bindParam(':sex',$sex);
			$stmt->bindParam(':address',$address);
			$stmt->bindParam(':yearjoin',$yearjoin);
			$stmt->bindParam(':session',$session);
		
			
	     try{
		
		$stmt->execute();
			echo'<script>alert("Registration Successful");
			location.href="teachers.php";</script>';
		 }
		catch(Exception $e){
			echo $e->getMessage();
				echo'<script> alert("Account Registration Failed");
				location.href="teachers.php";
				</script>';
			}	
	}
	
	
	catch (Exception $e){
		echo $e->getMessage();
		echo'<script> alert("Account Registration Failed");
		location.href="teachers.php";
		</script>';
	}

}
?>