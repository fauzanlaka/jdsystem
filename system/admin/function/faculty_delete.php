<?php
	include("../connect.php");
	$sql = " DELETE FROM fakultys WHERE ft_id='".$_GET['id']."' ";

	if($_GET['id']!= ""){
	if (!mysql_query($sql))
		{
			die('Error: ' . mysql_error());
		}
	else{
		echo"<script language='JavaScript'>";
		echo"alert('Hapus berjaya');";
		echo"</script>";		
		echo "<meta http-equiv='refresh' content='0;url=../faculty_jurusan_add.php' />";
	}
	}		
?>