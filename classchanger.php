<?php
session_start();
require("conn/connect.php");


if($_POST['classid']){
	$classid = $_SESSION['classID'] =  $_POST['classid'];
	if($classid==0){
		echo "class not loaded";
		}
		else{
			
			$count = 1;
      while ($count <= $classid) {
        // code...
		$class  =  "class".$count;
		$subjectname = "subject".$count;
       ?>
	<table style="width:100%;"><tr>
	<td style="width:50%;">
	<select class="form-control" name="<?php echo $class;?>" required>
	<option value=''>SELECT CLASS</option>
	<option value='jss1'>jss1</option>
	<option value='jss2'>jss2</option>
	<option value='jss3'>jss3</option>
	<option value='ss1'>ss1</option>
	<option value='ss2'>ss2</option>
	<option value='ss3'>ss3</option>
	</select></td>
	<td style="width:50%;">
	<select class="form-control" name="<?php echo $subjectname;?>" required>
	<option value=''>SELECT SUBJECT</option>
	<?php 
	$sql = "SELECT * FROM subject";
	$stmt=$pdo->prepare($sql);
	$stmt->execute();
	$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach($rows AS $row){
		$id= $row['id'];
			$subject= $row['subject'];
			
		
				echo "<option value='".$id."'>".$subject."</option>";
	$i++; }
	?>
	</select>
	</td></tr></table>
	<?php
  $count++;
      }

			}
		}
?>
