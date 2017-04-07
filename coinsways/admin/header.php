<?php 
error_reporting(0);
session_start(); 
include('webconfig.php');
if( ( empty($_SESSION['ad_id'] )) && (empty($_SESSION['user_name'] )) && ( empty($_SESSION['email_id'] )) && ( empty($_SESSION['password'] ))  ){

       header('location: login.php');

  }
?>
<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle fhgvswe" data-toggle="dropdown">
							    <img src="img/mini-profile.png" class="mini-profi" /> 
                                    <span id="ctl00_lblmail"><?php echo $_SESSION['user_name']; ?></span><span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="index.php"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
									<li><a href="BitcoinAddress.php"><i class="fa  fa-bitcoin"></i> Bitcoin Address</a></li>
									<li><a href="Profile.php"><i class="fa fa-user"></i> Profile</a></li>
									<li><a href="Password.php"><i class="fa fa-lock"></i> Update Password</a></li>
									<li><a href="logout.php?logout"><i class="fa fa-sign-out"></i> Logout</a></li>
								</ul>
							</li>
							<li>
								<a href="logout.php?logout" class="ftuif">Logout</a>
							</li>
						</ul>

					</div>
				</div>
			</nav>
