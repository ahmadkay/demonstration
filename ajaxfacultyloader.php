

id='faculty' name="faculty" class="form-control" 

<script type="text/javascript">
    $(document).ready(function()
    {
      $("#faculty").change(function()
    {
    var faclt_id =$(this).val();
    var post_fids = 'fids='+ faclt_id;

    $.ajax
    ({
    type: "POST",
    url: "departmentchanger.php",
    data: post_fids,
    cache: false,
    success: function(dept)
    {
    $(".dept").html(dept);
    }
        });
      });
    });
  </script>






<?php
session_start();
include("db/db.php");
if($_POST['fids']){
	$facultyid = $_SESSION['faculty_id'] = $_POST['fids'];
	if($facultyid==0){
		echo "<option value='0' class='small text-danger'>Select D</option>";
		}
		else{
			
			$dept = mysqli_query($con,"SELECT * FROM department WHERE facultyID = '$facultyid'");
			echo "<option value='0' class='small text-danger'>Department was loaded</option>";
      while ($deptrow = mysqli_fetch_array($dept)) {
        // code...
        echo "<option class='small ' value='".$deptrow['departmentID']."'>".$deptrow['departmentName']."</option>";
  
      }

			}
		}else{
      echo "<option value='0' class='small text-danger'>Select E</option>";
    }
?>
