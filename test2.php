
<?php
    


	

    
$showAlert = false; 
$showError = false; 
$exists=false;
    
include 'assets/conx.php';  








if(isset($_GET["ref"])) {
$id_ = $_GET["ref"];
    $sql = "UPDATE `account` SET `ref_click`=`ref_click`+1 WHERE id = $id_ ";
   // echo $sql;

    // echo $sql.'<br>';
    
    $result = mysqli_query($conn, $sql);
    

    if ($result) {
     // echo "success";
   }
   } 



if($_SERVER["REQUEST_METHOD"] == "POST") {
     
// Include file which makes the
// Database Connection.

// include 'sign-in.php';   

$username = $_POST["username"]; 
$password = $_POST["password"]; 
$cpassword = $_POST["cpassword"];
$email = $_POST["email"];
$ref = $_POST["ref"];
        

// $sql = "Select * from account ";
$sql = "Select * from account where username='$username' or email='$email'";

$result1 = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result1); 


// echo "num : ".$num; 


// echo "result : ".$result; 
// This sql query is use to check if
// the username is already present 
// or not in our Database
if($num == 0) {
    if(($password == $cpassword) && $exists==false) {


        if(strlen($password)>5 ){


            $hash = password_hash($password,PASSWORD_DEFAULT);

// Password Hashing is used here. 
$sql = "INSERT INTO `account` ( `username`,`password`,`email`,`referral`, `date`) VALUES ('$username', '$hash','$email',$ref, now())";


// echo $sql.'<br>';

$result = mysqli_query($conn, $sql);

if ($result) {
$showAlert = true; 
}

        }else{
            $showError = "Passwords must be 6 characteres or more";  
        }
    } 
    else { 
        $showError = "Passwords do not match"; 
    }      
}// end if 

if($num>0) 
{


//while ($row = $result1->fetch_assoc()) {
  //  echo '<br>- '. $row['Username']." -<br>";
    $exists="Username or email not available"; 

//}


 
} 

}//end if   















require_once 'google_auth/config.php';

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

  // checking if user is already exists in database
  $sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // user is exists
    $userinfo = mysqli_fetch_assoc($result);
    $token = $userinfo['token'];
  } else {
    // user is not exists
    $sql = "INSERT INTO users (email, first_name, last_name, gender, full_name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['full_name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $token = $userinfo['token'];
    } else {
      echo "User is not created";
      die();
    }
  }

  // save user data into session
  $_SESSION['user_token'] = $token;
} else {
  if (!isset($_SESSION['user_token'])) {
    header("Location: index.php");
    die();
  }

  // checking if user is already exists in database
  $sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // user is exists
    $userinfo = mysqli_fetch_assoc($result);
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
		<title>Register | EARNARA PROTOCOL - Highest Yield Automated Portfolio</title>

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
 
		<meta name="google-signin-client_id" content="721111095697-l3nc4j0s19tgu2tr1njf7bt8mgruqm65.apps.googleusercontent.com">
		
	
		
		
		
		<style>
		
		
		
		
		    .bfIkEQ {
            background-color: rgb(0 0 0) !important ;
        	}
	 
	
            	div#prepare {
                margin-top: 40px;
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
												<li><a href="login.html">My Account</a></li>

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
								<div class="ph-caption-subtitle ph-appear">Sign up and We will start your portfolio.</div>
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
										<h4 class="slr-heading"><i class="fas fa-plug"></i> Create an Account</h4>
									
									
										 
											<!-- Begin form (Note: for design purposes only!)
											================ 
											* Use class "tt-form-filled" or "tt-form-minimal" to change form style.
											* Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
											-->
										    <form style="display:none" id="form_register" action="" method="post" class="tt-register-form tt-form-minimal">

											
                                            <div class="tt-form-group">
                                                <label>Username <span class="required">*</span></label>
                                                <input type="text" name="username"  class="tt-form-control"   required>
                                            </div>

                                            <div class="tt-form-group">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email"  name="email"  class="tt-form-control"   required>
                                            </div>

                                            <div class="tt-form-group">
                                                <label>Password <span class="required">*</span></label>
                                                <input type="password"  name="password" class="tt-form-control"  required>
                                            </div>

                                            <div class="tt-form-group">
                                                <label>Confirm Password <span class="required">*</span></label>
                                                <input type="password"  name="cpassword" class="tt-form-control"  required>
                                            </div>



											<input id="network_form" type="text" name="network" value="Binance Smart Chain Mainnet" readonly     class="tt-form-control text-center"   >
								 <input id="address_form" type="text" name="address"  value="0xC14A2a9Bf6152640aED9525300c80931d2323d86"  readonly     class="tt-form-control text-center"    >


                                            
                                            <div class="tt-form-group">
                                            <input type="text"  readonly     class="tt-form-control text-center"  placeholder=" Your senior partner ID: <?php if(isset( $_GET["ref"])){ echo $_GET["ref"];}else{echo "EARNARA";} ?>"        >
                                                <input type="hidden"         name="ref"  value="<?php if(isset( $_GET["ref"])){ echo $_GET["ref"];}else{echo "0";} ?>">

                                            </div>
                                            




                                            <small class="tt-form-text">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="privacy-policy.html" class="tt-link-2" target="_blank" rel="noopener">privacy policy</a>.</small>

                                            <div class="tt-btn tt-btn-primary tt-btn-block margin-top-40">
                                                <button type="submit" data-hover="Register">Register</button>
                                            </div>












 

 

                                        </form>
											<!-- End form -->
<div id="connect_div" >
<div style="width: 100%; height: 20px; border-bottom: 1px solid #474747; text-align: center">
  <span style="font-size: 10px; color: white; padding: 0 10px;">
    First Step   <!--Padding is optional-->
  </span>
</div>
										
						 
							<div  class="container">
							  <div class="row">
								<div class="col-md-12">
								  
								 <!-- style="display:none" -->
						<div   > 
							<div  class="alert alert-danger" id="alert-error-https" style="display: none ;color:red;margin-top:10px;">
									 HTTPS Required!
								  </div>
								</div>
								
						
								  <div id="prepare">
								  <small class="tt-form-text">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="privacy-policy.html" class="tt-link-2" target="_blank" rel="noopener">privacy policy</a>.</small>

								      
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
						
						
<div style="width: 100%; height: 20px; border-bottom: 1px solid #474747; text-align: center">
  <span style="font-size: 10px; color: white; padding: 0 10px;">
    Or  <!--Padding is optional-->
  </span>
</div>
										


<?php

if (isset($_SESSION['user_token'])) {
     
} else {
 ?>
 

   <div class="tt-btn tt-btn-primary tt-btn-block margin-top-40 " >
													<!--<button  >Google</button>-->
												  <?php echo "<a   href='" . $client->createAuthUrl() . "'   data-hover='Google'>Google</a>";    ?>
												</div>
 
 
<?php
}
?>





 <p>Full Name: <?= $userinfo['full_name'] ?></p>
    <p>Email Address: <?= $userinfo['email'] ?></p>



										</div>
									
								
									</div>
										<!-- End shop login box -->

									</div> <!-- /.tt-col -->
								
									<div class="tt-col-lg-12">
                                    
                                    <!-- Begin shop go to login box 
                                    ================================ -->
                                    <div class="slr-box shop-goto-login-box">
                                        
						
	<div id="example2" class="g-signin2" data-onsuccess="onSignIn"></div>

                                        <h4 class="slr-heading"><i class="fas fa-unlock-alt"></i> Already have an account?</h4>
                                        <small class="tt-form-text">Login here by filling you're username and password to manage your portfolio. Earnara login will simplify the investment process and allows you to manage your automated portfolio.</small>

                                        <div class="tt-btn tt-btn-dark margin-top-30">
                                            <a href="login" data-hover="Log in">Log in</a>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        


<button id="myBtn2">Try it</button>


 
<!--<button type="button" id="example" data-function-name="showAllElements">Click Me</button>-->



                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    <!-- End shop go to login box -->

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
											<li><a href="https://t.me/earnaraprotocol" aria-label="Earnara Protocol Telegram" 
													class="magnetic-item" target="_blank" rel="noopener"><i
														class="fab fa-telegram"></i></a></li>
											<li><a href="https://twitter.com/earnaraprotocol" aria-label="Earnara Protocol Twitter" class="magnetic-item"
													target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
											</li>
											<li><a href="https://www.youtube.com/earnaraprotocol" aria-label="Earnara Protocol Youtube" class="magnetic-item"
													target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
											</li>
											<li><a href="https://web.facebook.com/earnaraprotocol" aria-label="Earnara Protocol Facebook" class="magnetic-item"
													target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
											</li>
											<li><a href="https://www.reddit.com/r/earnaraprotocol" aria-label="Earnara Protocol Reddit" 
													class="magnetic-item" target="_blank" rel="noopener"><i
														class="fab fa-reddit"></i></a></li>
											<li><a href="https://medium.com/@earnaraprotocol" aria-label="Earnara Protocol Medium" 
															class="magnetic-item" target="_blank" rel="noopener"><i
																class="fab fa-medium"></i></a></li>
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







	<script src="https://apis.google.com/js/platform.js" async defer></script>





<script>
    function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

 
document.getElementById("myBtn").addEventListener("click", onSignIn);
document.getElementById("myBtn2").addEventListener("click", displayDate);

function displayDate() {
 alert();
}
 
  
 
 var functions = {
  showAllElements: function() {
    alert("showAllElements was called");
  }
};

$("#example").on("click", function() {
  var fn = $("#example2").attr("data-onsuccess");
  onSignIn[fn]();
});
 
 
 
 
 
 
 
 
 
</script>










	</body>


</html>