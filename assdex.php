<?php

$con = mysqli_connect("localhost","root","","abi");
if(mysqli_connect_errno()){
 echo "fail to connect: ". mysqli_connect_error();
}

if(isset($_POST['submit']))
{
 $Assname = $_FILES["file"]["name"];
$Asstype = $_FILES["file"]["type"];
$Asssize = $_FILES["file"]["size"];
$subdate = $_POST['subdate'];
$dategiven = $_POST['date'];
$for= $_POST['for'];
$url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/assignment/'.$Assname;

$upload = move_uploaded_file($_FILES['file']['tmp_name'], "assignment/".$Assname);
if($upload){
 $sql= mysqli_query($con,"insert into assignment (assignment,url,subjectid,assignmentdate, subdate) values('$Assname','$url','$for','$dategiven','$subdate')");

echo "<script>alert('Assignment has been uploaded');location.href='upassignment.php'</script>";
}else{
	echo "file not uploaded";
}
	}else{
		echo "file was not set";
		
	}
	
	

?>