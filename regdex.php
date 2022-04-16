<?php
require("conn/connect.php");

if(isset($_POST['submit']))
{
$pdo= prepareconnection();
$surname = $_POST['surname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$sex= $_POST['sex'];
$mail= $_POST['mail'];
$parentname= $_POST['parentname'];
$parentnumber = $_POST['parentno'];
$parenraddress = $_POST['parentadd'];
$parentemail = $_POST['parentemail'];
$sponsorname = $_POST['sponsorname'];
$sponsornumber= $_POST['sponsorno'];
$sponsoraddres= $_POST['sponsoradd'];
$sponsoremail = $_POST['sponsoremail'];
$enteryclass= $_POST['enteryclass'];
$yearforgraduation= $_POST['yearforgraduation'];
$session = $_POST['session'];
$status='active';
$role=2;


$sql= "insert into users (username, password, role, status) values(:username, :password, :role, :status)";
$stmt = $pdo->prepare ($sql);
$stmt->bindParam(':username',$mail);
$stmt->bindParam(':password',$surname);
$stmt->bindParam(':role',$role);
$stmt->bindParam(':status',$status);

	try{
		
		$stmt->execute();
		$userid=$pdo->lastInsertID();
			
		$sql="insert into profile (userid, surname, lastname, sex, date_of_birth, email, parentname, parentaddres, parentnumber, sponsorname, sponsoraddres, sponsornumber, parentemail, sponsoremail, enteryclass, yearforgraduation, session)
		values(:userid, :surname, :lastname, :sex, :date_of_birth, :email, :parentname, :parentaddres, :parentnumber, :sponsorname, :sponsoraddres, :sponsornumber, :parentemail,:sponsoremail, :enteryclass, :yearforgraduation, :session)"; 
			$stmt = $pdo->prepare ($sql);
			$stmt->bindParam(':userid',$userid);
			$stmt->bindParam(':surname',$surname);
			$stmt->bindParam(':lastname',$lastname);
			$stmt->bindParam(':sex',$sex);
			$stmt->bindParam(':date_of_birth',$dob);
			$stmt->bindParam(':email',$mail);
			$stmt->bindParam(':parentname',$parentname);
			$stmt->bindParam(':parentaddres',$parenraddress);
			$stmt->bindParam(':parentnumber',$parentnumber);
			$stmt->bindParam(':sponsorname',$sponsorname);
			$stmt->bindParam(':sponsoraddres',$sponsoraddres);
			$stmt->bindParam(':sponsornumber',$sponsornumber);
			$stmt->bindParam(':parentemail',$parentemail);
			$stmt->bindParam(':sponsoremail',$sponsoremail);
			$stmt->bindParam(':enteryclass',$enteryclass);
			$stmt->bindParam(':yearforgraduation',$yearforgraduation);
			$stmt->bindParam(':session',$session);
			
	     try{
		
		$stmt->execute();
			echo'<script>alert("Registration Successful");
			location.href="students.php";</script>';
		 }
		catch(Exception $e){
			echo $e->getMessage();
				echo'<script> alert("Account Registration Failed");
				location.href="students.php";
				</script>';
			}	
	}
	
	
	catch (Exception $e){
		echo $e->getMessage();
		echo'<script> alert("Account Registration Failed");
		location.href="students.php";
		</script>';
	}

}
?>