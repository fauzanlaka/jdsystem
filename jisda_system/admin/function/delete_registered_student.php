<?php
	include("../connect.php");

        $sql = " DELETE FROM student_register WHERE sr_id='".$_GET['id']."' ";

	if($_GET['id']!= ""){
	if (!mysql_query($sql))
		{
			die('Error: ' . mysql_error());
		}
	else{
		echo"<script language='JavaScript'>";
		echo"alert('Hapus berjaya');";
		echo"</script>";		
		echo "<meta http-equiv='refresh' content='0;url=../registered_list.php' />";
	}
	}
         
?>