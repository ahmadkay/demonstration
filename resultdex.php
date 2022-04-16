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
$class = $_POST['class'];
$subject = $_POST['subject'];
$url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/result/'.$Assname;

$upload = move_uploaded_file($_FILES['file']['tmp_name'], "result/".$Assname);
if($upload){
 $sql= mysqli_query($con,"insert into results (result,url,classid,subjectid) values('$Assname','$url','$class','$subject')");

echo "<script>alert('Result has been uploaded');location.href='upresults.php'</script>";
}else{
	echo "file not uploaded";
}
	}else{
		echo "file was not set";
		
	}
	
	

?>