<?php
require("conn/connect.php");

if(isset($_POST['submit']))
{
$pdo= prepareconnection();
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$sql= "insert into contact (name, email, subject, message) values(:name, :email, :subject, :message)";
$stmt = $pdo->prepare ($sql);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':subject',$subject);
$stmt->bindParam(':message',$message);
			
	     try{
		
		$stmt->execute();
			echo'<script>alert("Message send Successful");
			location.href="contact.html";</script>';
		 }
		catch(Exception $e){
			echo $e->getMessage();
				echo'<script> alert("Message not send");
				location.href="contact.html";
				</script>';
			}	
	}
	
	
	


?>