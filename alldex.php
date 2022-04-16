<?php
require("conn/connect.php");

if(isset($_POST['submit']))
{
$pdo= prepareconnection();
$teacher = $_POST['teacher'];
$class = $_POST['class'];
$subject = $_POST['subject'];



$sql= "insert into allocation (teacher_id, class_id, subject_id) values(:teacher, :class, :subject)";
$stmt = $pdo->prepare ($sql);
$stmt->bindParam(':teacher',$teacher);
$stmt->bindParam(':class',$class);
$stmt->bindParam(':subject',$subject);
			
	     try{
		
		$stmt->execute();
			echo'<script>alert("allocation Successful");
			location.href="allocation.php";</script>';
		 }
		catch(Exception $e){
			echo $e->getMessage();
				echo'<script> alert("Allocation Failed");
				location.href="allocation.php";
				</script>';
			}	
	}
	
	
	


?>