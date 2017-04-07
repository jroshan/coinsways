<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Profile::COINSWAYS</title>
<?php include 'head.php'; ?>
</head>
<body>
<?php 
include('webconfig.php');
$result = mysql_query("SELECT * FROM tbl_user");
while($row = mysql_fetch_array($result))
{
$user_name = $row['user_name'];
$email_id = $row['email_id'];
$mobile_no = $row['mobile_no'];
$bitcan_wellet = $row['bitcan_wellet'];
$register_date = $row['register_date'];
$status = $row['status'];
}
?>
    <div class="wrapper">
   <?php include 'sidebar.php'; ?> 
	    <div class="main-panel">
			  <?php include 'header.php'; ?>
			<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Edit Profile</h4>
									<p class="category">Complete your profile</p>
	                            </div>
	                            <div class="card-content">
	                                <div>
                                        <div class="clearfix"></div>
	                                    <div class="row">
                                            <div class="col-md-6">
                                             <label>Username</label>
												<div class="form-group label-floating">
									<label class="control-label fgtybnmi"></label>
 <input name="txtname" type="text" value="<?php echo $user_name;?>" id="ctl00_ContentPlaceHolder1_txtname" class="form-control fgtybnmi" />
												</div>
	                                        </div>
	                                        <div class="col-md-6">
                                            <label>Email-Id</label>
												<div class="form-group label-floating">
<input name="eml" type="text" value="<?php echo $email_id;?>" id="ctl00_ContentPlaceHolder1_txtmail" disabled="disabled" class="form-control fgtybnmi" />
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                      <div class="col-md-6">
                                         <label>Mobile Number</label>
												<div class="form-group label-floating">
													<label class="control-label fgtybnmi"></label>
<input name="status" type="text" value="<?php echo $mobile_no;?>" id="ctl00_ContentPlaceHolder1_txtstatus" disabled="disabled" class="form-control fgtybnmi" />
												</div>
	                                        </div>
                                         
	                                        <div class="col-md-6">
                                            <label>Register Date</label>
												<div class="form-group label-floating">
													<label class="control-label fgtybnmi"></label>
	<input name="regdate" type="text" value="<?php echo $register_date;?>" id="ctl00_ContentPlaceHolder1_txtedate" disabled="disabled" class="form-control fgtybnmi" />
												</div>
	                                        </div>
	                                        <div class="col-md-6">
                                         <label>My Bitcoin Number</label>
												<div class="form-group label-floating">
													<label class="control-label fgtybnmi"></label>
<input name="status" type="text" value="<?php echo $bitcan_wellet;?>" id="ctl00_ContentPlaceHolder1_txtstatus" disabled="disabled" class="form-control fgtybnmi" />
												</div>
	                                        </div>
	                                         <div class="col-md-6">
                                         <label>Status</label>
												<div class="form-group label-floating">
													<label class="control-label fgtybnmi"></label>
<input name="status" type="text" value="<?php echo $status;?>" id="ctl00_ContentPlaceHolder1_txtstatus" disabled="disabled" class="form-control fgtybnmi" />
												</div>
	                                        </div>
	                                    </div>
	  <input type="submit" name="btnssubmit" value="Save Settings" id="ctl00_ContentPlaceHolder1_btnupdate" class="btn btn-primary paper-shadow relative" />
	                                    <div class="clearfix"></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								
    									<img id="ctl00_ContentPlaceHolder1_imgprofile" src="profile-pics/17012017231301.png" align="middle" style="border-color:Black;border-style:Solid;height:125px;width:100px;border-width:0px;" />
    								
    							</div>
                                <div class="content">
                                <center><input type="file" name="ctl00$ContentPlaceHolder1$fu01" id="ctl00_ContentPlaceHolder1_fu01" class="inputfile inputfile-6" /></center>
                                    </div>
    							<div class="content">
    								
					
				
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$lnkupload" value="Upload" id="ctl00_ContentPlaceHolder1_lnkupload" class="btn btn-primary btn-round" />
    								
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
	        </div>
    <style>
input[type=file] {
    display: block;
    display: block;
}
</style>

			
	</div>
    
    </form>
</body>
    <!--   Core JS Files   -->


	<script type="text/javascript">
	    $(document).ready(function () {

	        // Javascript method's body can be found in assets/js/demos.js
	        demo.initDashboardPageCharts();

	    });
	</script>
</html>
