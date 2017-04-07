<?php
include('webconfig.php');
if(isset($_GET['posid']))
{
	$z=$_GET['posid'];
	$query ="delete from tbl_helpdesk where hd_id=$z";
	
	if(mysql_query($query) or die(mysql_error()))
	{
     ?>
    <script>
       alert('Successfully Delete Information');
        window.location.href='Helpdesk.php';
        </script>
    <?php
	}
	
	else
	{
		echo '<h4 class="alert error">Error In Deleting user</h4>';
	}
}
?>