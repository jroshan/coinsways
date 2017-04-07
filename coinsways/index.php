<!DOCTYPE html>
<html>
	<head>
		<title>Home::Coinways</title>
		
<?php include 'head.php'; ?>
<style>
ul.gtyuer{margin-top:30px;}
.inv_plans .plans_cont li {
    float: left;
    width: 235px;}
.popup-trigger { display: block; margin: 0 auto; padding: 20px; max-width: 260px; background: #4EBD79; color: #fff;
    						 font-size: 18px; font-weight: 700; text-align: center; text-transform: uppercase; line-height: 24px; cursor: pointer; }
		  	.rtyue { position: absolute; top: 100px; left: 50%; width: 582px; margin-left: -350px; padding: 0px 0px;
  					background: #fff; color: #333; font-size: 19px; line-height: 30px;  z-index: 9999;}
  			.popup-mobile {position: relative; top: 0; left: 0; margin: 30px 0 0; width: 100%;}		
  		    .popup-btn-close {position: absolute; top: 1px; right: -36px; color: #4EBD79; font-size: 14px; font-weight: bold; text-transform: uppercase; cursor: pointer;}
    </style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<script>
		// Popup Window
		var scrollTop = '';
		var newHeight = '100';

		$(window).bind('scroll', function() {
		   scrollTop = $( window ).scrollTop();
		   newHeight = scrollTop + 100;
		});
		
		$('.popup-trigger').click(function(e) {
  		 e.stopPropagation();
		 if(jQuery(window).width() < 767) {
		   $(this).after( $( ".popup" ) );
		   $('#popup').show().addClass('popup-mobile').css('top', 0);
		   $('html, body').animate({
				scrollTop: $('.popup').offset().top
			}, 500);   
		 } else {
		   $('#popup').removeClass('popup-mobile').css('top', newHeight).toggle();
		 };
		});
		
		$('html').click(function() {
		 $('#popup').hide();
		});

		$('.popup-btn-close').click(function(e){
		  $('#popup').hide();
		});

		$('#popup').click(function(e){
		  e.stopPropagation();
		});
		</script>
	</head>
	<body>

  <div id="popup" class="rtyue">
		<img src="img/btc-7.png">
		<span id class="popup-btn-close"><img src="img/close.png"></span>
		</div>
	<?php include 'header.php'; ?>
		

        	<section class="inv_plans">
			<div data-parallaxify-range-x="-30" class="parallax ip_parallax_1"></div>
			<div data-parallaxify-range-x="30" class="parallax ip_parallax_2"></div>
			<div class="container">
				<h1>Our investment plans</h1>
				<div class="separator_2"><span></span></div>
				<ul class="plans_cont clearfix">
					<li class="plan_1 calc_link">
						<div class="plan_heading"><span>COINSWAYS</span></div>	
						<div class="plan_title">
						<p><span class="s1">$10-$100<br>2%
						   </p>
						</div>
						<div class="plan_info">
							<div>- Minimum: <span>$10</span></div>
							<div>- Maximum: <span>$100</span></div>
							<div>- Daily:<span>Return</span></div>
							<div>- Total Days:<span>100 Days</span></div>
						</div>
						<div class="plan_button"><span onclick="window.location.href='registration.php'">Sign up</span></div>
					</li>
					<li class="plan_2 calc_link">
					<div class="plan_heading"><span>COINSWAYS</span></div>	
						<div class="plan_title">
					     <p><span class="s1">$101-$250<br>2%
						   </p>
						</div>
						<div class="plan_info">
							<div>- Minimum: <span>$101</span></div>
							<div>- Maximum: <span>$250</span></div>
							<div>- Daily:<span>Return</span></div>
							<div>- Total Days:<span>100 Days</span></div>
						</div>
						<div class="plan_button"><span onclick="window.location.href='registration.php'">Sign up</span></div>
					</li>
					<li class="plan_3 calc_link">
					<div class="plan_heading"><span>COINSWAYS</span></div>	
						<div class="plan_title">
						<p><span class="s1">$251-$500<br>2%
						   </p>
						</div>
						<div class="plan_info">
							<div>- Minimum: <span>$251</span></div>
							<div>- Maximum: <span>$500</span></div>
							<div>- Daily:<span>Return</span></div>
							<div>- Total Days:<span>100 Days</span></div>
						</div>
						<div class="plan_button"><span onclick="window.location.href='registration.php'">Sign up</span></div>
					</li>
					
						<li class="plan_1 calc_link">
						<div class="plan_heading"><span>COINSWAYS</span></div>	
						<div class="plan_title">
                       <p><span class="s1">$501-$800<br>2% 
						   </span></p>
						</div>
						<div class="plan_info">
							<div>- Minimum: <span>$501</span></div>
							<div>- Maximum: <span>$800</span></div>
							<div>- Daily:<span>Return</span></div>
							<div>- Total Days:<span>100 days</span></div>
						</div>
						<div class="plan_button"><span onclick="window.location.href='registration.php'">Sign up</span></div>
					</li>					
				</ul>
                                <ul class="plans_cont clearfix gtyuer">
					<li class="plan_1 calc_link">
						<div class="plan_heading"><span>COINSWAYS</span></div>	
						<div class="plan_title">
						<p><span class="s1">$801-$1000<br>2%
						   </p>
						</div>
						<div class="plan_info">
							<div>- Minimum: <span>$801</span></div>
							<div>- Maximum: <span>$1,000</span></div>
							<div>- Daily:<span>Return</span></div>
							<div>- Total Days:<span>100 Days</span></div>
						</div>
						<div class="plan_button"><span onclick="window.location.href='registration.php'">Sign up</span></div>
					</li>
					<li class="plan_2 calc_link">
					<div class="plan_heading"><span>COINSWAYS</span></div>	
						<div class="plan_title">
					     <p><span class="s1">$1001-$1500<br>2%
						   </p>
						</div>
						<div class="plan_info">
							<div>- Minimum: <span>$1001</span></div>
							<div>- Maximum: <span>$1500</span></div>
							<div>- Daily:<span>Return</span></div>
							<div>- Total Days:<span>100 Days</span></div>
						</div>
						<div class="plan_button"><span onclick="window.location.href='registration.php'">Sign up</span></div>
					</li>
					<li class="plan_3 calc_link">
					<div class="plan_heading"><span>COINSWAYS</span></div>	
						<div class="plan_title">
						<p><span class="s1">$1501-$2,500<br>2%
						   </p>
						</div>
						<div class="plan_info">
							<div>- Minimum: <span>$1501</span></div>
							<div>- Maximum: <span>$2,500</span></div>
							<div>- Daily:<span>Return</span></div>
							<div>- Total Days:<span>100 Days</span></div>
						</div>
						<div class="plan_button"><span onclick="window.location.href='registration.php'">Sign up</span></div>
					</li>
					
						<li class="plan_1 calc_link">
						<div class="plan_heading"><span>COINSWAYS</span></div>	
						<div class="plan_title">
                       <p><span class="s1">$2,501-$5,000<br>2% 
						   </span></p>
						</div>
						<div class="plan_info">
							<div>- Minimum: <span>$2,501</span></div>
							<div>- Maximum: <span>$5,000</span></div>
							<div>- Daily:<span>Return</span></div>
							<div>- Total Days:<span>100 days</span></div>
						</div>
						<div class="plan_button"><span onclick="window.location.href='registration.php'">Sign up</span></div>
					</li>					
				</ul>
			</div>
		</section>
        <div id="main-about"><!--start company about-->
     <div id="sub-about">
        <div class="video zoomIn  wow animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: zoomIn;">
            <img src="img/video-2.jpg" height="332">
        </div>
        <div class="about-right slideInRight  wow animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: slideInRight;">
            <div class="about-head">
                <h4>ABOUT COINSWAYS LIMITED</h4>
            </div>
            <div class="about-text">
                <p> COINSWAYS may be a future, stable and profitable fund. presently we've variety of profitable areas, like Forex market commercialism exchange commercialism, Cryptocurrency market commercialism and finance in varied funds and activities.<br><br>  Processing Re-write Suggestions Done (Unique Article) Profits from these investments square measure wont to enhance our program and increase its stability for the future. Our high practiced and gifted team of traders with distinctive ways and techniques supported priceless wealth of expertise will create that the your cash can work for you underneath their practiced and careful management. Join us!</p>
            </div>
            <div class="read-morea">
                
            </div>
        </div>
    </div>
</div>

	
       <section class="home_about">
			<div class="container clearfix">
				<div class="about">
					<h2>Welcome to  COINSWAYS Website</h2>
					<div class="separator_1"><span></span></div>
					<div class="text">
						<p>
							Are you yearning for stable financial gain from your investments? we will assist you by providing the mandatory platform. The  COINSWAYS is trendy investment trust from the India. The company's business is closely associated with commerce activity within the multi-currency Forex market, moreover as on the exchange. Currently, Bitspayu is stepping into a replacement part of its development. Since we've got begun to induce stable and high profit we'd like new investment interactions.
						</p>
						<p>
							Our company has developed and launched an internet platform for investors that permits creating deposits and regular accruals of profits in automatic mode. this may facilitate America to multiply our gift profit level persistently. the corporate is attracting investments to learn from the impact of scale - the upper the investment, the upper the come. <br>
							Join us, get in into your financial well-being!
							
						</p>
					</div>
				</div>
                                <div class="affiliate">
<img src="img/bitcoins-large2.jpg" alt="BITSPAYU" />
</div>
			</div>
			<div class="arrow"></div>
		</section>
		


		<div class="container">
		<div class="m_reviews">
       <div data-parallaxify-range-x="-30" class="parallax ip_parallax_1"></div>
			<div data-parallaxify-range-x="30" class="parallax ip_parallax_2"></div>
			<div class="container clearfix">
			


			<h1 class="fgtnh">Gallery Testimonials</h1>
				<div class="separator_2"><span></span></div>
				<div class="rev_carousel">
					<ul class="slides clearfix">
					
						
						<li>
							<div class="test_img"><img src="img/bitcoin-new3.jpg" /></div>
						</li>
						<li>
							<div class="test_img"><img src="img/bitcoin-new4.jpg" /></div>
						</li>
                        <li>
							<div class="test_img"><img src="img/bitcoin-new5.jpg" /></div>
						</li>
						
						<li>
							<div class="test_img"><img src="img/bitcoin-new6.jpg" /></div>
						</li>
						<li>
							<div class="test_img"><img src="img/bitcoin-new7.jpg" /></div>
						</li>
                        <li>
							<div class="test_img"><img src="img/bitcoin-new1.jpg" /></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		</div>
		 <?php include 'footer.php'; ?>
		</body>
</html>



