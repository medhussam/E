<?php 

$message_reg="";

include 'assets/conx.php';  
require_once 'google_auth/config.php';





if(isset($_SESSION["CLIENTSERVER"])){

    header("Location: index");
}


// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $userinfo = [
    'email' => $google_account_info['email'],
    'first_name' => $google_account_info['givenName'],
    'last_name' => $google_account_info['familyName'],
    'gender' => $google_account_info['gender'],
    'full_name' => $google_account_info['name'],
    'picture' => $google_account_info['picture'],
    'verifiedEmail' => $google_account_info['verifiedEmail'],
    'token' => $google_account_info['id'],
  ];

//   // checking if user is already exists in database
//   $sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
//   $result = mysqli_query($conn, $sql);
//   if (mysqli_num_rows($result) > 0) {
//     // user is exists
//     $userinfo = mysqli_fetch_assoc($result);
//     $token = $userinfo['token'];
//   } else {
//     // user is not exists
//     $sql = "INSERT INTO users (email, first_name, last_name, gender, full_name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['full_name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}')";
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//       $token = $userinfo['token'];
//     } else {
//       echo "User is not created";
//       die();
//     }
//   }

//   // save user data into session
//   $_SESSION['user_token'] = $token;
// } else {
//   if (!isset($_SESSION['user_token'])) {
//     header("Location: index.php");
//     die();
//   }

//   // checking if user is already exists in database
//   $sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
//   $result = mysqli_query($conn, $sql);
//   if (mysqli_num_rows($result) > 0) {
//     // user is exists
//     $userinfo = mysqli_fetch_assoc($result);
//   }
}
 



if(isset($_GET["registration"])) {
$user_ = $_GET["user"];
   
    $message_reg="Thank you for filling out our sign up form. We are glad that you joined us."  ;
   
    
   } 


 
    $user_email = "<script>document.write(localStorage.getItem('email'));</script>";
    $username__ = "<script>document.write(localStorage.getItem('username'));</script>";
  




	$error = "";
	function test_input($data) {
		  
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	   
	if ($_SERVER["REQUEST_METHOD"]== "POST") {
		  
		$adminname = test_input($_POST["username"]);
		$password =  test_input($_POST["password"]);
  
	   
		
		$sql = "Select * from account where username='$adminname' or email='$adminname'";
		//   echo $sql;
		$result1 = mysqli_query($conn, $sql);
		$users = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result1); 
  
//    echo $num."   ----------";
  
  if($num == 0 ){
	$error =  ' <div style="color:#fa8484;font-size: 14px;" class=" text-center text-danger  "><strong>Error! : </strong> Username or email address not exist</div> ';
  }
	  //   $stmt = $conn->prepare("SELECT * FROM account");
	  //   $stmt->execute();
	  //   $users = $stmt->fetchAll();
		  
		foreach($users as $user) {
			  
  
		  // if(password_verify($password, $user['password'])){
  
		  //     echo '<br> '.$user["password"].' == '.$password."<br>";
		  //     echo 'Password is valid!';
		  // }else{
		  //     echo '<br> no mutch<br>';
		  //     echo 'Invalid password.';
		  // } ;
  
		 
  
			if((password_verify($password, $user['password']))) {
  
				//   session_start();
				  $_SESSION["CLIENTSERVER"] = $adminname;
				  $_SESSION["email"] = $user['email'];
				  $_SESSION["connectedby"] = 'L';
				  
					header("Location: investment");
			}
			else {
			  //   echo "<script language='javascript'>";
			  $error =  ' <div style="color:#fa8484;font-size: 14px;" class=" text-center text-danger  ">
	  
			  <strong>Error! : </strong> WRONG PASSWORD
		   
		 </div> ';
			  //   echo "</script>";
			  //  die();
			}
		}
	}









?>






<!DOCTYPE html>

<!--
	Template:   EARNARA PROTOCOL - Highest Yield Automated Portfolio
	Author:     EARNARA PROTOCOL
	URL:        https://earnara.io/
-->

<html lang="en">
	
<head>

		<!-- Title -->
		<title>My Account | EARNARA PROTOCOL - Highest Yield Automated Portfolio</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="description" content="EARNARA PROTOCOL - Highest Yield Automated Portfolio">
		<meta name="author" content="earnara.io">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-9EFVNS2G0E"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-9EFVNS2G0E');
		</script>

		<!-- Google fonts (https://www.google.com/fonts) -->
		<link rel="preconnect" href="https://fonts.gstatic.com/">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"> <!-- Body font -->
		<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&amp;display=swap" rel="stylesheet"> <!-- Secondary/Alter font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="assets_/vendor/normalize/normalize.min.css"> <!-- Normalize CSS (https://necolas.github.io/normalize.css/) -->
		<link rel="stylesheet" href="assets_/vendor/fontawesome/css/fontawesome-all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="assets_/vendor/swiper/css/swiper-bundle.min.css"> <!-- Swiper CSS (https://swiperjs.com/) -->
		<link rel="stylesheet" href="assets_/vendor/lightgallery/css/lightgallery.min.css"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->

		<!-- Template master CSS -->
		<link rel="stylesheet" href="assets_/css/helper.css">
		<link rel="stylesheet" href="assets_/css/shop.css"> <!-- Note: Used on shop-related pages only! -->
		<link rel="stylesheet" href="assets_/css/theme.css">

		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.4-rc.1/web3.min.js"></script>
		
		
		<style>
		
		
		
		
		    .bfIkEQ {
            background-color: rgb(0 0 0) !important ;
        	}
	 
	
            	div#prepare {
                margin-top: 40px;
                 }
	
	.hide__{
		height: 0;
		opacity: 0;
		transition: all 0.5s ease 0s;
	}

	
	.show__{
		height: "auto";
		opacity: 1;
		transition: all 2s ease 0s;
	}
	
	</style>
	</head>

	
	<!-- ===========
	///// Body /////
	================
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	* Use class "tt-smooth-scroll" to enable page smooth scrolling.
	* Use class "tt-transition" to enable page transitions.
	* Use class "tt-magic-cursor" to enable magic cursor.
	-->
	<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">


		<!-- *************************************
		*********** Begin body inner ************* 
		************************************** -->
		<main id="body-inner">

			<!-- Begin page transition (do not remove!!!) 
			=========================== -->
			<div id="page-transition">
				<div class="ptr-overlay"></div>
				<div class="ptr-preloader">
					<div class="ptr-prel-content">
						<!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".ptr-prel-image"). -->
						<img src="assets_/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
					</div> <!-- /.ptr-prel-content -->
				</div> <!-- /.ptr-preloader -->
			</div>
			<!-- End page transition -->

			<!-- Begin magic cursor 
			======================== -->
			<div id="magic-cursor">
				<div id="ball"></div>
			</div>
			<!-- End magic cursor -->

			<!-- Begin noise background -->
			<div class="bg-noise"></div>
			<!-- End noise background --> 


			<!-- *****************************************
			*********** Begin scroll container *********** 
			****************************************** -->
			<div id="scroll-container"> 
				
				<!-- ===================
				///// Begin header /////
				========================
				* Use class "tt-header-fixed" to set header to fixed position.
				-->
				<header id="tt-header" class="tt-header-fixed">
					<div class="tt-header-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->

						<div class="tt-header-col">

							<!-- Begin logo 
							================ -->
							<div class="tt-logo"> 
								<a href="index.html">
									<!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
									<img src="assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo"> <!-- logo light -->
									<!-- <img src="assets/img/logo-dark.png" class="tt-logo-dark magnetic-item" alt="Logo"> logo dark -->
								</a>
							</div>
							<!-- End logo -->

						</div> <!-- /.tt-header-col -->

						<div class="tt-header-col">

							<!-- Begin mobile menu toggle button (for "tt-main-menu") -->
							<div id="tt-m-menu-toggle-btn-wrap">
								<div class="tt-m-menu-toggle-btn-text">
									<span class="tt-m-menu-text-menu">Menu</span>
									<span class="tt-m-menu-text-close">Close</span>
								</div>
								<div class="tt-m-menu-toggle-btn-holder">
									<a href="#" class="tt-m-menu-toggle-btn magnetic-item"><span></span></a>
								</div>
							</div>
							<!-- End mobile menu toggle button -->

							<!-- Begin main menu (classic)
							===============================
							* Use class "tt-submenu-dark" to enable submenu dark style.
							* Use class "tt-m-menu-center" to align mobile menu to center (no effect on desktop!).
							-->
							<nav class="tt-main-menu tt-submenu-dark tt-m-menu-center">
								<div class="tt-main-menu-holder">
									<div class="tt-main-menu-inner">
										<div class="tt-main-menu-content">

											<!-- Begin main menu list -->
											<ul class="tt-main-menu-list">

												<li><a href="index.html">Home</a></li>
												<li><a href="token.html">Earnara Token</a></li>
												<li><a href="investment.html">Investment</a></li>
												<li><a href="swap.html">Swap</a></li>
												<li><a href="games.html">Games</a></li>
												<li><a href="https://docs.earnara.io" target="_blank" rel="noopener">Whitepaper</a></li>
												<li><a href="login.html">Login</a></li>

												<!-- Begin submenu (submenu master)
												==================================== -->
												<!-- <li class="tt-submenu-wrap tt-submenu-master">
													<div class="tt-submenu-trigger">
														<a href="investment.html">Investment</a>
													</div> /.tt-submenu-trigger
													 
												</li> -->
												<!-- End submenu (sub-master) -->

											</ul>
											<!-- End main menu list -->

										</div> <!-- /.tt-main-menu-content -->
									</div> <!-- /.tt-main-menu-inner -->
								</div> <!-- /.tt-main-menu-holder -->

							</nav> 
							<!-- End main menu -->

						</div> <!-- /.header-col -->
					</div> <!-- /.header-inner -->
				</header>
				<!-- End header -->

				
				<!-- *************************************
				*********** Begin content wrap *********** 
				************************************** -->
				<div id="content-wrap">

					
					<!-- ========================
					///// Begin page header /////
					============================= 
					* Use class "ph-full" to enable fullscreen size.
					* Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg" or "ph-cap-xxlg" to set caption size (no class = default size).
					* Use class "ph-center" to enable content center position.
					* Use class "ph-bg-image" to enable page header background image (required for a portfolio single project!).
					* Use class "ph-bg-image-is-light" if needed, it makes the elements dark and more visible if you use a very light image (effect only with class "ph-bg-image").
					* Use class "ph-image-shadow" to enable page header background image (effect only with class "ph-bg-image").
					* Use class "ph-image-cropped" to crop image. It fixes image dimensions (no effect for "ph-bg-image"!).
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5").
					* Use class "ph-content-parallax" to enable content parallax.
					* Use class "ph-stroke" to enable caption title stroke style.
					-->
					<div id="page-header" class="ph-cap-sm ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<!-- <div class="ph-image">
								<div class="ph-image-inner">
									<img src="assets_/img/page-header/ph-2.jpg" alt="Image">
								</div>
							</div> -->
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption">
								<h1 class="ph-caption-title ph-appear">My Account</h1>
								<div class="ph-caption-title-ghost ph-appear">My Account</div>
								<div class="ph-caption-subtitle ph-appear">Manage your automated portfolio</div>
							</div> 
							<!-- End page header caption -->

						</div> <!-- /.page-header-inner -->

						<!-- Begin scroll down circle (you can change "data-offset" to set scroll top offset) 
						============================== -->
						<!-- <a href="#page-content" class="scroll-down-circle" data-offset="30">
							<div class="sdc-inner ph-appear">
								<div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
								<svg viewBox="0 0 500 500">
									<defs>
										<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
									</defs>
									<text dy="30">
										<textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
									</text>
								</svg>
							</div>  
						</a> -->
						<!-- End scroll down circle -->

						<!-- Begin made with love 
						========================== -->
						<!-- <div class="made-with-love ph-appear">
							<div class="mwl-inner">
								<div class="mwl-text">Made with</div>
								<div class="mwl-icon"><i class="far fa-heart"></i></div>
							</div>
						</div> -->
						<!-- End made with love -->
						
					</div>
					<!-- End page header -->


					<!-- *************************************
					*********** Begin page content *********** 
					************************************** -->
					<div id="page-content">

						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section no-padding-top">
							<div class="tt-section-inner tt-wrap">

								<div class="tt-row">
									<div class="tt-col-lg-16">

										<!-- Begin shop login box 
										========================== -->
										<div class="slr-box shop-login-box">
											<h4 class="slr-heading"><i class="fas fa-unlock-alt"></i> Earnara Log in</h4>
											<p style="color: aquamarine;" class="text-center"><?php echo $message_reg; ?></p>
											<!-- Begin form (Note: for design purposes only!)
											================ 
											* Use class "tt-form-filled" or "tt-form-minimal" to change form style.
											* Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
											-->

											<!-- <div id="btn_login" class="tt-btn tt-btn-primary tt-btn-block margin-top-40"> -->


											<div id="btn_login" class="hide__" >
											<form   action="" method="post" class="tt-login-form tt-form-minimal">
												<div class="tt-form-group">
													<label>Username or email address <span class="required">*</span></label>
													<input type="text" name="username" class="tt-form-control"  value="<?php if(isset($_GET["user"])) { echo $_GET["user"] ;}  ?>"  id="login-name" name="name" required>
												</div>

												<div class="tt-form-group">
													<label>Password <span class="required">*</span></label>
													<input type="password" name="password" class="tt-form-control" id="login-password"  name="password" required>
												</div>

												<div class="tt-form-check">
													<input type="checkbox" id="login-remember" name="rememberme">
													<label for="login-remember">Remember me</label>
												</div>

												<small class="tt-form-text margin-top-20"><a href="reset-password.html" class="tt-link-2">Lost your password?</a></small>

												<div class="tt-btn tt-btn-primary tt-btn-block margin-top-40">
													<button type="submit" data-hover="Log in">Log in</button>
												</div>


												 
												 <?php echo $error ?> 
											</form>
													
												</div>
				<div  id="btn_hide"  class="tt-btn tt-btn-primary tt-btn-block margin-top-40"> 
				<button onclick="login_()" data-hover="Log in with Password">Log in with Password </button>
				</div>


				<div style="display:none" id="btn_show"  class="text-center"> 
					<button  style="color:#fff;font-size: 13px;" onclick="login_2()" data-hover="Back"><i style="margin-left: 5px;" class='fa fa-arrow-left'></i> Back</button>
				</div>

<div id="btn_hide2" >
									 		

											<!-- End form -->

						<div style="width: 100%; height: 20px; border-bottom: 1px solid #474747; text-align: center">
						<span style="font-size: 10px; color: white; padding: 0 10px;">
							Or  <!--Padding is optional-->
						</span>
						</div>
										
						 
							 
							  <div class="row">
								<div class="col-md-12">
								  
						
								 <form id="form_connect_wallet" method="post" action="" style="dmargin-top:10px;"> <br>
								 <input id="network_form" type="hidden" name="network" value="-" class="tt-form-control"    >
								 <input id="address_form" type="hidden" name="address"  value="-" class="tt-form-control"    >
								 <!-- <button style="color:white" type="submit">submit</button> -->
								 </form>
						
								  <div class="alert alert-danger" id="alert-error-https" style="display: none;color:red;margin-top:10px;">
									 <!-- HTTPS Required! -->
								  </div>
						
								  <div id="prepare">
								      
								      
								      <div class="tt-btn tt-btn-primary tt-btn-block margin-top-40" id="btn-connect">
													<button  data-hover=" Connect wallet"> Connect wallet</button>
												</div>
								 
								  </div>
						
								  <div id="connected" style="display: none">
						
									 
						     <div class="tt-btn tt-btn-primary tt-btn-block margin-top-40" id="btn-disconnect">
													<button  data-hover=" Connect wallet"> Disconnect wallet</button>
												</div>
									<hr>
						
									<div id="network">
									  <p  style="font-size: 13px;">
										<strong>Connected blockchain<br></strong> <span id="network-name"></span>
									  </p>
						
									  <p>
										<strong>Selected account:</strong> <span style="font-size: 13px;" id="selected-account"></span>
									  </p>
						
									</div>
						
									<hr>
						
									 
						
								 
									<p id="accounts">
									</p>
								 
						
								 
						
								  </div>
						
								  
						
								   
						
								</div>
							  </div>
							</div>
						
							<!-- We use simple <template> templating for the example -->
							<div id="templates" style="display: none">
							  <template id="template-balance">
								<tr>
								  <th class="address"></th>
								  <td class="balance"></td>
								</tr>
							  </template>
							</div>
						
						
						
						

<?php

if (!isset($_GET['code'])) {
    
 ?>

         <div id="btn_hide3" class="tt-btn tt-btn-primary tt-btn-block margin-top-40 " >							 
		 <?php echo "<a   href='" . $client->createAuthUrl() . "'   data-hover='Google'>Google</a>";    ?>
			</div>
 
 
<?php
}
?>

						


										</div>
										<!-- End shop login box -->

									</div> <!-- /.tt-col -->
								
									<div class="tt-col-lg-12">
										
										<!-- Begin shop go to register box 
										=================================== -->
										<div class="slr-box shop-goto-register-box">
											<h4 class="slr-heading"><i class="fas fa-plug"></i> Don't have an account yet?</h4>
											<small class="tt-form-text">Registering for Earnara Protocol allows you to access your Portfolio and rewards history. Just fill in the fields, and we’ll get a new account set up for you in no time. We will only ask you for information necessary to make the investment process faster and easier.</small>

											<div class="tt-btn tt-btn-dark margin-top-30">
												<a href="register" data-hover="Register Now!">Register Now!</a>
											</div>
										</div>
										<!-- End shop go to register box -->

									</div> <!-- /.tt-col -->
								</div><!-- /.tt-row -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->



 











					</div>
					<!-- End page content -->
					

					<!-- ======================
					///// Begin tt-footer /////
					=========================== -->
					<footer id="tt-footer">
						<div class="tt-footer-inner">

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center-left">
								<div class="footer-col-inner">

									<!-- You can use whatever button or link here -->
									<div class="tt-btn tt-btn-link">
										<a href="#" class="scroll-to-top" data-hover="Back to top">Back to top</a>
									</div>

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center order-m-last">
								<div class="footer-col-inner">

									<div class="tt-copyright">
										© Copyright - <a href="index.html" target="_blank" rel="noopener" class="tt-link">earnara.io</a>
									</div>

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

							<!-- Begin footer column 
							========================= -->
							<div class="footer-col tt-align-center-right">
								<div class="footer-col-inner">

									<div class="footer-social">
										<div class="footer-social-text"><span>Follow</span><i class="fas fa-share-alt"></i></div>
										<div class="social-buttons">
											<ul>
												<li><a href="https://t.me/earnaraprotocol" class="magnetic-item" target="_blank" rel="noopener">TG.</a></li>
												<li><a href="https://twitter.com/earnaraprotocol" class="magnetic-item" target="_blank" rel="noopener">Tw.</a></li>
												<li><a href="https://www.youtube.com/earnaraprotocol" class="magnetic-item" target="_blank" rel="noopener">Yt.</a></li>
												<li><a href="https://web.facebook.com/earnaraprotocol" class="magnetic-item" target="_blank" rel="noopener">Fb.</a></li>
												<li><a href="https://www.reddit.com/r/earnaraprotocol" class="magnetic-item" target="_blank" rel="noopener">Rd.</a></li>
												<li><a href="https://medium.com/@earnaraprotocol" class="magnetic-item" target="_blank" rel="noopener">Me.</a></li>
											</ul>
										</div> <!-- /.social-buttons -->
									</div> <!-- /.footer-social -->

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

						</div> <!-- /.tt-section-inner -->
					</footer>
					<!-- End tt-footer -->


				</div>
				<!-- End content wrap -->

			</div>
			<!-- End scroll container -->


		</main>
		<!-- End body inner -->


        

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="assets_/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets_/vendor/gsap/gsap.min.js"></script> <!-- GSAP JS (https://greensock.com/gsap/) -->
		<script src="assets_/vendor/gsap/ScrollToPlugin.min.js"></script> <!-- GSAP ScrollToPlugin JS (https://greensock.com/scrolltoplugin/) -->
		<script src="assets_/vendor/gsap/ScrollTrigger.min.js"></script> <!-- GSAP ScrollTrigger JS (https://greensock.com/scrolltrigger/) -->

		<script src="assets_/vendor/smooth-scrollbar.js"></script> <!-- Smooth Scrollbar JS (https://github.com/idiotWu/smooth-scrollbar/) -->
		<script src="assets_/vendor/swiper/js/swiper-bundle.min.js"></script> <!-- Swiper JS (https://swiperjs.com/) -->
		<script src="assets_/vendor/isotope/imagesloaded.pkgd.min.js"></script> <!-- imagesloaded JS (more info: https://imagesloaded.desandro.com/) -->
		<script src="assets_/vendor/isotope/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="assets_/vendor/isotope/packery-mode.pkgd.min.js"></script> <!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
		<script src="assets_/vendor/lightgallery/js/lightgallery-all.min.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="assets_/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->

		<!-- Theme master JS -->
		<script src="assets_/js/shop.js"></script> <!-- Note: Used on shop-related pages only! -->
		<script src="assets_/js/theme.js"></script>
		 











 
							<script type="text/javascript" src="https://unpkg.com/web3@1.2.11/dist/web3.min.js"></script>
							<script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
							<script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
							<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
							<script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>
						
							<!-- This is our example code -->
							<script type="text/javascript" src="./example.js"></script>












<script>

$(document).ready(function () {
	// document.getElementById('form_login').style.display = "none";
	// alert();
});


function login_2() {

// form_login 
//   document.getElementById('btn_login').style.display = "block";
  document.getElementById('btn_hide').style.display = "block";
  document.getElementById('btn_hide2').style.display = "block";
  document.getElementById('btn_hide3').style.display = "block";
  document.getElementById('btn_show').style.display = "none";

 
  document.getElementById("btn_login").classList.remove("show__");
  document.getElementById("btn_login").classList.add("hide__");
  
//   document.getElementById('form_login').style.opacity = 1;
// document.getElementById("btn_login").style.height = "auto";
// document.getElementById("btn_login").style.height = "200px";
}


function login_() {

	

 
	document.getElementById("btn_login").classList.add("show__");
	document.getElementById("btn_login").classList.remove("hide__");

	// form_login 
	document.getElementById('btn_hide').style.display = "none";
	document.getElementById('btn_hide2').style.display = "none";
	document.getElementById('btn_hide3').style.display = "none";
  document.getElementById('btn_show').style.display = "block";
	//   document.getElementById('btn_login').style.display = "none";
	//   document.getElementById('form_login').style.display = "block";
	// document.getElementById("btn_login").style.transition = "all 2s"; 

	// document.getElementById("btn_login").toggleClass ("hide");
	// toggleClass("btn_login","hide");
// 	document.getElementById('form_login').style.opacity = 0;
// document.getElementById("btn_login").style.height = "0px";

}
 
</script>











	</body>


</html>