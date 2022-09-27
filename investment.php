
<?php

include 'assets/conx.php';  

// ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
// session_start();
 
$user_ = $connectedby_ = $email_ = "-";
 

if(isset($_SESSION["CLIENTSERVER"])){
	$user_ = $_SESSION["CLIENTSERVER"];
	$email_ = $_SESSION["email"];
	$connectedby_ = $_SESSION["connectedby"];
	
}
 
  
 
 
    $user_checker = "";
    $user_email =  "";
    
   
    // $user_email = (string)"<script>if (localStorage.getItem('username') == null){document.write('false');}</script>";
    // $username__ ="<script> if (localStorage.getItem('username') != null) {document.write(localStorage.getItem('username'));}else{document.write(false);} </script>";
     
      
    //    echo "/".$user_."/".$email_."/".$connectedby_."/";
     
     
    //  if($user_email == $_SESSION["test_____"] ){
    //      echo "true";
    //  }else{
    //      echo "false";
    //  }
?>
 
<!DOCTYPE html>



<html lang="en">


<head>

	<!-- Title -->
	<title>Earnara Assets </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="description"
		content="Download Nui - Creative Portfolio Showcase HTML Website Template that comes with rich features and well-commented code. Made by Themetorium.">
	<meta name="author" content="themetorium.net">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon (http://www.favicon-generator.org/) -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Google Analytics -->
	<!-- Google tag (gtag.js) -->
	<script async src="../../../www.googletagmanager.com/gtag/js9ae0?id=G-S1BBE4FJ4H"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-S1BBE4FJ4H'); 
	</script>

	<!-- Google fonts (https://www.google.com/fonts) -->
	<link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
	<link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin>
	<link
		href="../../../fonts.googleapis.com/css2ceae.css?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet"> <!-- Body font -->
	<link href="../../../fonts.googleapis.com/css24477.css?family=Syne:wght@400;500;600;700;800&amp;display=swap"
		rel="stylesheet"> <!-- Secondary/Alter font -->

	<!-- Libs and Plugins CSS -->
	<link rel="stylesheet" href="assets/vendor/normalize/normalize.min.css">
	<!-- Normalize CSS (https://necolas.github.io/normalize.css/) -->
	<link rel="stylesheet" href="assets/vendor/fontawesome/css/fontawesome-all.min.css">
	<!-- Font Icons CSS (https://fontawesome.com) Free version! -->
	<link rel="stylesheet" href="assets/vendor/swiper/css/swiper-bundle.min.css">
	<!-- Swiper CSS (https://swiperjs.com/) -->
	<link rel="stylesheet" href="assets/vendor/lightgallery/css/lightgallery.min.css">
	<!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
	<!-- Template master CSS -->
	<link rel="stylesheet" href="assets/css/helper.css">
	<link rel="stylesheet" href="assets/css/theme.css">
	
	<link rel="stylesheet" href="assets/css/inv-style.css">
	
	<style>
	

	</style>
</head>


<!-- ===========
	///// Body /////
	================
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	* Use class "tt-smooth-scroll" to enable page smooth scrolling.
	* Use class "tt-transition" to enable page transitions.
	* Use class "tt-magic-cursor" to enable magic cursor.
	* Note: there may be classes that are specific to this page only!
	-->

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor modal">




	<div class="area">
		<ul class="circles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

	<!-- <section class="modal container_modal"> -->


	<div style="background-color: #000000;" class="modal__container" id="modal-Deposit">
		<div class="modal__content" style="		">
			<div class="modal__close close-modal" title="Close">
				<i class="bx bx-x"></i>
			</div>


			<h1 class="modal__title">


				<b class=" title2">
					Deposit </b>
				<img src="assets/img/tokens/earnara1.png" style="width: 30px;margin: 5px 0px -7px 4px;left: 0;"
					class=" " alt="earnara">

				Earnara
			</h1>


			<label class="label-network">Select Network</label>
			<!-- <input type="text" id="login-password"  name="Network" required> -->


			<!-- <select class="tt-form-control  select-network"  Placeholder="Network" name="Network" id="Network">
	<option value="volvo">ERC20</option>
	<option value="saab">BEP20</option>
	 
  </select> -->

			<select name="menu" onchange="validate_network()" id="meun_network">
				<option disabled selected>Network</option>
				<option value="ERC20">ERC20</option>
				<option value="BEP20">BEP20</option>
				<!-- <option value="js">JAVASCRIPT</option> 
	<option value="c">C LANGUAGE</option> -->
			</select>

			<div id="div_network">
				<p class="par_1">To see the wallet address, first select the network</p>
				<p class="hint_1">Ensure the deposit network matches the withdrawal network, or assets will be lost.</p>


			</div>




			<div style="display: none;" id="small_modal1">

				<hr>
				<br>
				<label class="label-network">Your personal address</label>
				<input type="text" style="color:rgb(255, 255, 255) !important; border-radius: 10px;
background: linear-gradient(90.74deg,#3870ff 0%,#46a7ff 100%);" value=" 0x74523da9d00155836c0064beab019659db3a34a7"
					class="tt-form-control" id="address_" name="address" required>

				<i class="fa fa-copy  icon_copy"></i>



				<p class="hint_1" style="    margin: 0 !important;"><i class="fa fa-clock"></i> Coins will be transfered
					in 1-2 minutes. Sometimes it can take up to 2 hours. The first reward will be paid after 24 hours.
				</p>



			</div>


		</div>

		<div class="modal__content" id="small_modal2" style="	display: none;	margin-top: -90px;		">




			<p class="par_2"><span class="numbers">1</span>Send only EARNARA to this address</p>
			<p class="par_2"><span class="numbers">2</span>Ensure the network is {Network} Chain . Sending to another
				network will result to permanent loss of your funds</p>
			<!-- <p class="hint_1"></p>  -->








			<!-- 
 <hr>
 <br>  -->


			<!-- <p class="hint_1"><i class="fa fa-clock" style="    margin: 15px 0 0px 0 !important;"></i>	Coins will be transfered in 1-2 minutes. Sometimes it can take up to 2 hours. The first reward will be paid after 24 hours.</p>  -->




		</div>
	</div>



	<div class="modal__container" id="modal-container">
		<div class="modal__content">
			<div class="modal__close close-modal" title="Close">
				<i class="bx bx-x"></i>
			</div>


			<h1 class="modal__title"> <img src="assets/img/tokens/earnara1.png"
					style="width: 30px;margin: 0 0px -7px -11px;left: 0;" class=" " alt="earnara">
				<b class=" title2">
					EARNARA </b>Earnara
			</h1>

			<div style="color: black;display: flex;" class="row">
				<div style="width: 33%;" class="col-4 text-center">
					<h6 style="color: #b1b1b1;font-size: 17px;margin: -3px 0px;">Balance</h6>
					<p style="font-size: 15px">$0.00</p>
				</div>
				<div style="width: 33%;" class="col-4 text-center">
					<h6 style="color: #b1b1b1;font-size: 17px;margin: -3px 0px;">Qualtity</h6>
					<p style="font-size: 15px">0</p>
				</div>
				<div style="width: 33%;" class="col-4 text-center">
					<h6 style="color: #b1b1b1;font-size: 17px;margin: -3px 0px;">APY</h6>
					<p style="font-size: 15px">5.5%</p>
				</div>
			</div>






			<div style="color:black" class="chart-block svelte-1r572uh">
				<div style="float: left;" class="price_p ">
					<span id="price_value" class="label_p  ">Sep 7, 2022, 22:48</span>
					<span id="price_value_" class="value_p  ">$19,375.43</span>
					<span class="price-change  negative">
						<span class="svelte-m585q0">4.06%</span> <span class="change-time ">past 7D</span>
					</span>
				</div>




				<!-- <canvas id="myChart_1" style="width:100%;max-width:500px"></canvas><br> -->

				<!-- <button onclick="changeData();" class="my-bttn">CHANGE DATA</button> -->



				<div style="float: right;" id="headlessui-radiogroup-1" role="radiogroup" class="timeframe-options"
					aria-labelledby="headlessui-label-2">
					<!-- <label id="headlessui-label-2"
						class="timeframe-options__label css-1huc6vh" role="none">Change chart's timeframe</label> -->
					<div id="headlessui-radiogroup-option-3" role="radio" aria-checked="false" tabindex="-1"
						class="timeframe-options__option ">1D </div>
					<div id="headlessui-radiogroup-option-4" role="radio" aria-checked="true" tabindex="0"
						class="timeframe-options__option timeframe-options__option_active">7D </div>
					<div id="headlessui-radiogroup-option-5" role="radio" aria-checked="false" tabindex="-1"
						class="timeframe-options__option ">1M </div>
					<div id="headlessui-radiogroup-option-6" role="radio" aria-checked="false" tabindex="-1"
						class="timeframe-options__option ">1Y </div>
					<div id="headlessui-radiogroup-option-7" role="radio" aria-checked="false" tabindex="-1"
						class="timeframe-options__option ">All </div>
				</div>
			</div>

			<canvas id="myChart_2" style="height: 200px; width:100%;max-width:500px;margin-left: -6px;"></canvas>





			<div class="cards">

				<div class="_card card-5">
					<!-- <div class="card__icon"><i class="fas fa-bolt"></i></div>
					<p class="card__exit"><i class="fas fa-times"></i></p> -->
					<!-- <h6 class="card__title">Earn rewards in EARNARA </h6> -->


					<span class="alt-r-apy ">+1.7% APY</span>

					<!-- Slide THREE -->
					<div class="slideThree">
						<input style="display:none" type="checkbox" id="slideThree" name="check" />
						<label onclick="Earnara_Tokens_Rewards()" for="slideThree"></label>
					</div>
					<p class="card__apply">
						<img src="assets/img/tokens/earnara1.png" style="width: 18px;margin: 0 0px -3px -11px;left: 0;"
							class=" " alt="earnara"> <a class="card__link" href="#">Earn rewards in EARNARA </a>



					</p>
				</div>


				<!-- <div class="_card card-5">
					 

					<span class="alt-r-apy ">Dial Your APY</span>

					 
					<div class="slideThree">
						<input style="display:none" type="checkbox" value="None" id="slideThree1" name="check1" />
						<label onclick="MultiTokens_Rewards()" for="slideThree1"></label>
					</div>
					<p class="card__apply">
						<img src="assets/img/tokens/earnara1.png" style="width: 18px;margin: 0 0px -3px -11px;left: 0;"
							class=" " alt="earnara"> <a class="card__link" href="#">Earn rewards in multi tokens </a>



					</p>
				</div> -->



			</div>
			<!-- <div id="DIV_MultiToken" style="position: absolute; visibility: hidden;">
				<ul style="		 	">
					<li class="li_">
						<input type="checkbox" id="myCheckbox1" />
						<label class="label_img" for="myCheckbox1"><img src="assets/img/tokens/earnara1.png" /></label>
					</li>
					<li class="li_">

						<input type="checkbox" id="myCheckbox2" />
						<label class="label_img" for="myCheckbox2"><img src="assets/img/tokens/Bitcoin1.png" /></label>
					</li>
					<li class="li_">

						<input type="checkbox" id="myCheckbox3" />
						<label class="label_img" for="myCheckbox3"><img src="assets/img/tokens/ethereum1.png" /></label>
					</li>
					<li class="li_">
						<input type="checkbox" id="myCheckbox4" />
						<label class="label_img" for="myCheckbox4"><img src="assets/img/tokens/bnb1.png" /></label>
					</li>
					<li class="li_">

						<input type="checkbox" id="myCheckbox5" />
						<label class="label_img" for="myCheckbox5"><img src="assets/img/tokens/dai.png" /></label>
					</li>
					<li class="li_">

						<input type="checkbox" id="myCheckbox6" />
						<label class="label_img" for="myCheckbox6"><img src="assets/img/tokens/tron1.png" /></label>
					</li>
					<li class="li_">
						<input type="checkbox" id="myCheckbox1" />
						<label class="label_img" for="myCheckbox1"><img src="assets/img/tokens/earnara1.png" /></label>
					</li>
					<li class="li_">

						<input type="checkbox" id="myCheckbox2" />
						<label class="label_img" for="myCheckbox2"><img src="assets/img/tokens/Bitcoin1.png" /></label>
					</li>
					<li class="li_">

						<input type="checkbox" id="myCheckbox3" />
						<label class="label_img" for="myCheckbox3"><img src="assets/img/tokens/ethereum1.png" /></label>
					</li>
					<li class="li_">
						<input type="checkbox" id="myCheckbox4" />
						<label class="label_img" for="myCheckbox4"><img src="assets/img/tokens/bnb1.png" /></label>
					</li>
					<li class="li_">

						<input type="checkbox" id="myCheckbox5" />
						<label class="label_img" for="myCheckbox5"><img src="assets/img/tokens/dai.png" /></label>
					</li>
					<li class="li_">

						<input type="checkbox" id="myCheckbox6" />
						<label class="label_img" for="myCheckbox6"><img src="assets/img/tokens/tron1.png" /></label>
					</li>
				</ul>
				 
			</div> -->



			<!-- <div class="my-5 col-12">
					<iframe
					  class="mt-5 col-12 mx-auto"
					  style="height: 90vh"
					  src="https://dexscreener.com/bsc/0xb45962cb111b10183ecc5aaeee346d82cb130cef?embed=1&theme=dark&info=0"
					></iframe>
				  </div> -->




			<!-- <div class="my-5 col-12">
				<iframe class="mt-5 col-12 mx-auto" style="height: 38rem;
					  width: 100%;"
					src="https://dexscreener.com/bsc/0xb45962cb111b10183ecc5aaeee346d82cb130cef?embed=0&theme=dark&info=1"></iframe>
			</div> -->

			<!-- <style>
				#dexscreener-embed {
					position: relative;
					width: 100%;
					padding-bottom: 125%;
				}

				@media(min-width:1400px) {
					#dexscreener-embed {
						padding-bottom: 65%;
					}
				}

				#dexscreener-embed iframe {
					position: absolute;
					width: 100%;
					height: 100%;
					top: 0;
					left: 0;
					border: 0;
				}
			</style> -->
			<!-- <div id="dexscreener-embed"><iframe
					src="https://dexscreener.com/bsc/0xB45962Cb111b10183ecc5AAEee346d82CB130cef?embed=1&theme=dark&trades=0&info=0"></iframe>
			</div> -->




			<button class="custom-btn btn-5" id="open-modal-deposit" onclick="closeModal()"
				style="width: 48%;">Deposit</button>




			<button class="custom-btn btn-5" id="" style="width: 50%;">Swap</button>


<button style="width:100%;margin: 15px 0 0 0;" class="custom-btn btn-8"><span>Earn rewards in multi tokens</span></button>

			<!-- <button class="svelte-lib-btn     regular  svelte-6serbw" id="" style="width: 32%;
background: #6fadff;
border: 1px solid black;
color: rgb(0, 0, 0);
padding: 9px 8px;
margin: 13px 0px -10px 0px;
border-radius: 5px;
">Earn rewards in multi tokens</button> -->



		</div>
	</div>



	<div class="modal__container" id="modal-container2">
		<div class="modal__content">
			<div class="modal__close close-modal" title="Close">
				<i class="bx bx-x"></i>
			</div>

			<i class='bx bxs-edit'></i>
			<h1 class="modal__title"> <img src="assets/img/tokens/Bitcoin.png"
					style="width: 30px;margin: 0 0px -7px -11px;left: 0;" class=" " alt="Bitcoin">
				<b class=" title2">
					BTC </b> Bitcoin
			</h1>


			<input type="text" placeholder="Enter Your Number" class="reg" />

			<button class="modal__button modal__button-width">Deposit 2 <i
					class="bx bx-chevrons-right bx-fade-right"></i></button>
		</div>
	</div>
	<!-- </section> -->
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
					<img src="assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
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
				<div class="tt-header-inner">
					<!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->

					<div class="tt-header-col">

						<!-- Begin logo 
							================ -->
						<div class="tt-logo">
							<a href="index.html">
								<!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
								<img src="assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo">
								<!-- logo light -->
								<img src="assets/img/logo-dark.png" class="tt-logo-dark magnetic-item" alt="Logo">
								<!-- logo dark -->
							</a>
						</div>
						<!-- End logo -->

					</div> <!-- /.tt-header-col -->

					<div class="tt-header-col">

						<!-- Begin overlay menu toggle button -->
						<div id="tt-m-menu-toggle-btn-wrap">
							<div class="tt-m-menu-toggle-btn-text">
								<span class="tt-m-menu-text-menu">Menu</span>
								<span class="tt-m-menu-text-close">Close</span>
							</div>
							<div class="tt-m-menu-toggle-btn-holder">
								<a href="#" class="tt-m-menu-toggle-btn magnetic-item"><span></span></a>
							</div>
						</div>
						<!-- End overlay menu toggle button -->

						<!-- Begin overlay menu 
							======================== 
							* Use class "tt-ol-menu-count" to enable menu counter.
							-->

						<nav class="tt-main-menu tt-submenu-dark">
							<div class="tt-main-menu-holder">
								<div class="tt-main-menu-inner">
									<div class="tt-main-menu-content">

										<!-- Begin main menu list -->
										<ul class="tt-main-menu-list">

											<li><a href="landing-page.html">Home</a></li>

											<!-- Begin submenu (submenu master)
												==================================== -->
											<li class="tt-main-menu-list active">

												<a href="#">Earnara Token</a>


											</li>
											<!-- End submenu (sub-master) -->

											<!-- Begin submenu (submenu master)
												==================================== -->
											<li class="tt-submenu-wrap tt-submenu-master">
												<div class="tt-submenu-trigger">
													<a href="#">About</a>
												</div> <!-- /.tt-submenu-trigger -->

											</li>
											<!-- End submenu (sub-master) -->

											<!-- Begin submenu (submenu master)
												==================================== -->
											<li class="tt-submenu-wrap tt-submenu-master">
												<div class="tt-submenu-trigger">
													<a href="#">Blog</a>
												</div> <!-- /.tt-submenu-trigger -->

											</li>
											<!-- End submenu (sub-master) -->

											<!-- Begin submenu (submenu master)
												==================================== -->
											<li class="tt-submenu-wrap tt-submenu-master">
												<div class="tt-submenu-trigger">
													<a href="#">Contact</a>
												</div> <!-- /.tt-submenu-trigger -->

											</li>
											<!-- End submenu (sub-master) -->



<?php
  
 if(isset($_SESSION["CLIENTSERVER"])){
?>
<!--Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.-->
                                                <li class="tt-submenu-wrap tt-submenu-master">
													<div class="tt-submenu-trigger">
													<a  class="btn-account" href="#"  rel="noopener" ><i style="color:white !important;margin-right:5px;" class="fas fa-user	"></i> </a>
													</div> <!-- /.tt-submenu-trigger -->
													<div class="tt-submenu">
														<ul class="tt-submenu-list">

															<li><a href="account.php">My Account </a></li>
															<li><a href="google_auth/logout.php">Logout</a></li>

														</ul> <!-- /.tt-submenu-list -->
													</div> <!-- /.tt-submenu -->
												</li>
												
												
 
<?php
}else echo '<li><a href="login.html" rel="noopener">Login</a></li>';
?>




										
											
											
											
											
											
    							<!--	 	<button   class="tt-btn tt-btn3 tt-btn-primary margin-top-30">-->
    								 	    
											<!--	<a href="account"  -->
											<!--  rel="noopener">-->
											<!--	<div data-hover="My Account"> My Account</div> </a>-->
											<!--	<span class="tt-btn-icon "><i style="color:white !important" class="fas fa-user	"></i></span>-->
											<!--</button>-->
											
											
											
											

										</ul>
										<!-- End main menu list -->

									</div> <!-- /.tt-main-menu-content -->
								</div> <!-- /.tt-main-menu-inner -->
							</div> <!-- /.tt-main-menu-holder -->

						</nav>
						<!-- End overlay menu -->

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
					* Use class "ph-full" to enable fullscreen size (no effect on smaller screens!).
					* Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg" or "ph-cap-xxlg" to set caption size (no class = default size).
					* Use class "ph-center" to enable content center position.
					* Use class "ph-image-cropped" to crop image (if image is used). It uses fixed image dimensions (no effect with class "ph-bg-image"!).
					* Use class "ph-bg-image" to enable page header background image. Note: "ph-caption-title-ghost" will be disabled if you enable this option!
					* Use class "ph-bg-image-is-light" if needed, it makes the elements dark and more visible if you use a very light background image (effect only with class "ph-bg-image").
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5").
					* Use class "ph-content-parallax" to enable content parallax.
					* Use class "ph-stroke" to enable caption title stroke style.
					* Use class "ph-ghost-scroll" to enable the scroll effect to caption title ghost (no effect with class "ph-center"!).
					-->
				<!-- <div id="page-header"
					class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
					<div class="page-header-inner tt-wrap">

						<div class="ph-caption">
							<div class="ph-caption-subtitle">
							 
							</div>
							<h1 class="ph-caption-title">
								<div class="ph-appear">Assets</div>
							</h1>
							<div class="ph-caption-title-ghost">
								<div class="ph-appear">Crypto Assets</div>
							</div>
							<div class="ph-caption-subtitle ph-appear">Investment</div>
						</div>
						 

					</div> 
					<div class="tt-scroll-down">
						<a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
							<div class="tt-sd-arrow">
								<div class="tt-sd-arrow-inner"></div>
							</div>
							<div class="tt-sd-text">Scroll</div>
						</a>
					</div>
					 

				</div> -->
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






					<div class="tt-section">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row tt-lg-row-reverse">


								<div class="wrapper">

									<div class="header">
										<h1 class="header__title">My Investments</h1>
										<!-- <h2 class="header__subtitle">with Flexbox</h2> -->
									</div>

									<div class="cards">

										<div class=" card [ is-collapsed ] ">
											<div class="card__inner [ js-expander ]">

												<span><img src="assets/img/tokens/earnara1.png" style="width:40px ;margin: 0 9px -9px 0;
									left: 0;" class=" " alt="Bitcoin"></span>
												<span>Earnara</span>
												<div class="col6">
													<h6 class="apy_card">APY : 9.6%</h6>
													<!-- <p class="apy_card_n">9.6%</p> -->
												</div>
												<div class="col12">
													<h6 class="qt_card">Quantity,Earnara</h6>
													<p class="qt_card_n">0.000000</p>
												</div>
												<i class="fa fa-folder-o"></i>
											</div>
											<div class="card__expander">
												<i class="fa fa-close [ js-collapser ]"></i>

												<br>


												<table class="table__">
													<thead>
														<tr>
															<th class="th__"> Transaction History </th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="td__"> Make deposit to see your first transaction!</td>
															<!-- <td class="td__"> 80 cm </td>
															<td class="td__"> 60 cm </td>
															<td class="td__"> 220 cm </td> -->
														</tr>

													</tbody>
												</table>
												<div class="details_token">
													<div class="col6_">
														<h6 class="apy_card_">Current APY</h6>
														<p class="apy_card_n_">9.6%</p>

													</div>

													<div class="col6_">
														<h6 class="apy_card_">Balance</h6>
														<p class="apy_card_n_">$0.000</p>
													</div>
													<div class="col6_">
														<h6 class="apy_card_">Quantity,Earnara</h6>
														<p class="apy_card_n_">0.000000</p>
													</div>


													<button class="svelte-lib-btn     regular  svelte-6serbw" style="background: #005be9;
			color: white;
			 
			width: 50%;
			font-size: 18px;
    font-family: monospace;
			padding: 9px 13px;
			margin: 13px 0px -10px 0px;
			border-radius: 5px;
													">Deposit</button>


													<button class="svelte-lib-btn     regular  svelte-6serbw" style="background: #e90000;
			color: white;
			font-size: 18px;
    font-family: monospace;
			float: left;
			width: 48%;
			padding: 9px 13px;
			margin: 13px 2px -10px 0px;
			border-radius: 5px;
													">Withraw</button>
													 

												</div>


											</div>
										</div>

										<div class=" card [ is-collapsed ] ">



											<div class="card__inner [ js-expander ]">

												<span><img src="assets/img/tokens/Bitcoin.png" style="width:40px ;margin: 0 9px -9px 0;
									left: 0;" class=" " alt="Bitcoin"></span>
												<span>Bitcoin</span>
												<div class="col6">
													<h6 class="apy_card">APY : 3.2%</h6>
													<!-- <p class="apy_card_n">9.6%</p> -->
												</div>
												<div class="col12">
													<h6 class="qt_card">Quantity,Bitcoin</h6>
													<p class="qt_card_n">0.000000</p>
												</div>
												<i class="fa fa-folder-o"></i>
											</div>















											<div class="card__expander">
												<i class="fa fa-close [ js-collapser ]"></i>

												<br>


												<table class="table__">
													<thead>
														<tr>
															<th class="th__"> Transaction History </th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="td__"> Make deposit to see your first transaction!</td>
															<!-- <td class="td__"> 80 cm </td>
															<td class="td__"> 60 cm </td>
															<td class="td__"> 220 cm </td> -->
														</tr>

													</tbody>
												</table>
												<div class="details_token">
													<div class="col6_">
														<h6 class="apy_card_">Current APY</h6>
														<p class="apy_card_n_">9.6%</p>

													</div>

													<div class="col6_">
														<h6 class="apy_card_">Balance</h6>
														<p class="apy_card_n_">$0.000</p>
													</div>
													<div class="col6_">
														<h6 class="apy_card_">Quantity,Earnara</h6>
														<p class="apy_card_n_">0.000000</p>
													</div>


													<button class="svelte-lib-btn     regular  svelte-6serbw" style="background: #005be9;
			color: white;
			 
			width: 50%;
			font-size: 18px;
    font-family: monospace;
			padding: 9px 13px;
			margin: 13px 0px -10px 0px;
			border-radius: 5px;
													">Deposit</button>


													<button class="svelte-lib-btn     regular  svelte-6serbw" style="background: #e90000;
			color: white;
			font-size: 18px;
    font-family: monospace;
			float: left;
			width: 48%;
			padding: 9px 13px;
			margin: 13px 2px -10px 0px;
			border-radius: 5px;
													">Withraw</button>
													 

												</div>


											</div>
										</div>

										<div class=" card [ is-collapsed ] ">


											<div class="card__inner [ js-expander ]">

												<span><img src="assets/img/tokens/bnb.png" style="width:40px ;margin: 0 9px -9px 0;
									left: 0;" class=" " alt="Bitcoin"></span>
												<span>BNB</span>
												<div class="col6">
													<h6 class="apy_card">APY : 1.6%</h6>
													<!-- <p class="apy_card_n">9.6%</p> -->
												</div>
												<div class="col12">
													<h6 class="qt_card">Quantity,BNB</h6>
													<p class="qt_card_n">0.000000</p>
												</div>
												<i class="fa fa-folder-o"></i>
											</div>
											<div class="card__expander">
												<i class="fa fa-close [ js-collapser ]"></i>

												<br>


												<table class="table__">
													<thead>
														<tr>
															<th class="th__"> Transaction History </th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="td__"> Make deposit to see your first transaction!</td>
															<!-- <td class="td__"> 80 cm </td>
															<td class="td__"> 60 cm </td>
															<td class="td__"> 220 cm </td> -->
														</tr>

													</tbody>
												</table>
												<div class="details_token">
													<div class="col6_">
														<h6 class="apy_card_">Current APY</h6>
														<p class="apy_card_n_">9.6%</p>

													</div>

													<div class="col6_">
														<h6 class="apy_card_">Balance</h6>
														<p class="apy_card_n_">$0.000</p>
													</div>
													<div class="col6_">
														<h6 class="apy_card_">Quantity,Earnara</h6>
														<p class="apy_card_n_">0.000000</p>
													</div>


													<button class="svelte-lib-btn     regular  svelte-6serbw" style="background: #005be9;
			color: white;
			 
			width: 50%;
			font-size: 18px;
    font-family: monospace;
			padding: 9px 13px;
			margin: 13px 0px -10px 0px;
			border-radius: 5px;
													">Deposit</button>


													<button class="svelte-lib-btn     regular  svelte-6serbw" style="background: #e90000;
			color: white;
			font-size: 18px;
    font-family: monospace;
			float: left;
			width: 48%;
			padding: 9px 13px;
			margin: 13px 2px -10px 0px;
			border-radius: 5px;
													">Withraw</button>
													 

												</div>


											</div>
										</div>

										<!-- <div class=" card [ is-collapsed ] ">
											<div class="card__inner [ js-expander ]">
												<span>Card</span>
												<i class="fa fa-folder-o"></i>
											</div>
											<div class="card__expander">
												<i class="fa fa-close [ js-collapser ]"></i>
												Expander
											</div>
										</div>

										<div class=" card [ is-collapsed ] ">
											<div class="card__inner [ js-expander ]">
												<span>Card</span>
												<i class="fa fa-folder-o"></i>
											</div>
											<div class="card__expander">
												<i class="fa fa-close [ js-collapser ]"></i>
												Expander
											</div>
										</div>

										<div class=" card [ is-collapsed ] ">
											<div class="card__inner [ js-expander ]">
												<span>Card</span>
												<i class="fa fa-folder-o"></i>
											</div>
											<div class="card__expander">
												<i class="fa fa-close [ js-collapser ]"></i>
												Expander
											</div>
										</div>

										<div class=" card [ is-collapsed ] ">
											<div class="card__inner [ js-expander ]">
												<span>Card</span>
												<i class="fa fa-folder-o"></i>
											</div>
											<div class="card__expander">
												<i class="fa fa-close [ js-collapser ]"></i>
												Expander
											</div>
										</div>

										<div class=" card [ is-collapsed ] ">
											<div class="card__inner [ js-expander ]">
												<span>Card</span>
												<i class="fa fa-folder-o"></i>
											</div>
											<div class="card__expander">
												<i class="fa fa-close [ js-collapser ]"></i>
												Expander
											</div>
										</div>

										<div class=" card [ is-collapsed ] ">
											<div class="card__inner [ js-expander ]">
												<span>Card</span>
												<i class="fa fa-folder-o"></i>
											</div>
											<div class="card__expander">
												<i class="fa fa-close [ js-collapser ]"></i>
												Expander
											</div>
										</div> -->

									</div>

								</div>

							</div>

						</div>

					</div>






					<div class="tt-section">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row tt-lg-row-reverse">





								<div class="tt-col-lg-12">
									<!-- ----------------------------------------HOW TO INVEST   -->
									<div class="list-wrapper svelte-1ujid0w">


										<ol class="svelte-1ujid0w">
											<li class="item1 svelte-1ujid0w"><span class="heading svelte-1ujid0w"
													data-counter-text="Step 1"><b
														style="font-size: 15px; color:rgb(189, 189, 189)">Step
														1</b><br>Select your favorite asset from the
													list</span> <svg class="_svg-slide-illustration"
													preserveAspectRatio="xMinYMin meet" width="100%" height="100%"
													fill="none" viewBox="0 0 320 150">
													<g clip-path="url(#clip0_6064_49494)">
														<path fill="url(#paint0_linear_6064_49494)"
															d="M1 18.87c0-5.55 0-8.33.9-10.52A11.92 11.92 0 0 1 8.36 1.9C10.55 1 13.33 1 18.88 1h282.24c5.55 0 8.33 0 10.52.9a11.92 11.92 0 0 1 6.46 6.45c.9 2.2.9 4.97.9 10.52 0 5.56 0 8.34-.9 10.53a11.92 11.92 0 0 1-6.46 6.45c-2.19.9-4.97.9-10.52.9H18.88c-5.55 0-8.33 0-10.52-.9A11.92 11.92 0 0 1 1.9 29.4C1 27.2 1 24.43 1 18.87Z">
														</path>
														<path fill="#fff" fill-opacity=".12"
															d="M307.08 4.97h-60.62a7.95 7.95 0 0 0-7.95 7.94v11.92a7.95 7.95 0 0 0 7.95 7.95h60.62a7.95 7.95 0 0 0 7.95-7.95V12.91a7.95 7.95 0 0 0-7.95-7.94Z">
														</path>
														<path fill="#fff" fill-opacity=".16"
															d="M294.16 16.89h-35.78a1.99 1.99 0 1 0 0 3.97h35.78a1.99 1.99 0 1 0 0-3.97Zm-196.76 0H61.6a1.99 1.99 0 1 0 0 3.97h35.8a1.99 1.99 0 1 0 0-3.97Zm55.64 0h-35.77a1.99 1.99 0 1 0 0 3.97h35.77a1.99 1.99 0 1 0 0-3.97Zm55.66 0h-35.78a1.99 1.99 0 1 0 0 3.97h35.78a1.99 1.99 0 1 0 0-3.97Z">
														</path>
														<circle cx="19" cy="19" r="12" fill="#fff" fill-opacity=".16"
															style="mix-blend-mode: luminosity;"></circle>
														<path fill="#fff" fill-opacity=".06"
															d="m8.36 35.85-.2.46.2-.46ZM318.1 29.4l.46.19-.46-.2Zm-6.46 6.45.2.46-.2-.46Zm0-33.95-.19.46.2-.46Zm6.46 6.45-.46.2.46-.2ZM8.36 1.9l-.2-.46.2.46ZM1.9 8.35l-.46-.19.46.2ZM18.88 1.5h282.24v-1H18.88v1Zm282.24 34.77H18.88v1h282.24v-1Zm-282.24 0c-2.78 0-4.85 0-6.49-.11a11.99 11.99 0 0 1-3.84-.76l-.38.92c1.16.48 2.46.71 4.15.83 1.69.11 3.79.11 6.56.11v-1ZM.5 18.87c0 2.77 0 4.88.11 6.56.12 1.69.35 2.99.83 4.16l.92-.38a12.1 12.1 0 0 1-.76-3.85c-.1-1.64-.1-3.7-.1-6.49h-1ZM8.55 35.4a11.43 11.43 0 0 1-6.19-6.18l-.92.38a12.42 12.42 0 0 0 6.73 6.72l.38-.92ZM318.5 18.87c0 2.79 0 4.85-.11 6.5a11.98 11.98 0 0 1-.76 3.84l.92.38c.48-1.17.71-2.47.83-4.16.11-1.68.11-3.79.11-6.56h-1Zm-17.4 18.38c2.78 0 4.88 0 6.57-.11 1.69-.12 2.99-.35 4.15-.83l-.38-.92c-1.02.42-2.2.64-3.84.76-1.64.1-3.7.1-6.5.1v1Zm16.53-8.04a11.43 11.43 0 0 1-6.19 6.18l.38.92a12.42 12.42 0 0 0 6.73-6.72l-.92-.38ZM301.12 1.49c2.78 0 4.85 0 6.49.11 1.64.11 2.82.34 3.84.76l.38-.92a12.96 12.96 0 0 0-4.15-.83C305.99.5 303.89.5 301.12.5v.99Zm18.38 17.38c0-2.77 0-4.87-.11-6.55a12.9 12.9 0 0 0-.83-4.16l-.92.38c.42 1.03.65 2.2.76 3.85.1 1.64.1 3.7.1 6.48h1Zm-8.05-16.51a11.43 11.43 0 0 1 6.19 6.18l.92-.38a12.42 12.42 0 0 0-6.73-6.72l-.38.92ZM18.88.5c-2.77 0-4.87 0-6.56.11-1.69.12-2.99.35-4.15.83l.38.92a12 12 0 0 1 3.84-.76c1.64-.11 3.7-.11 6.5-.11v-1ZM1.5 18.87c0-2.78 0-4.84.11-6.48.11-1.64.34-2.82.76-3.85l-.92-.38a12.94 12.94 0 0 0-.83 4.16C.5 14 .5 16.1.5 18.87h1ZM8.17 1.44a12.42 12.42 0 0 0-6.73 6.72l.92.38a11.43 11.43 0 0 1 6.19-6.18l-.38-.92Z">
														</path>
														<path fill="url(#paint1_linear_6064_49494)"
															d="M1 58.6c0-5.55 0-8.32.9-10.51a11.92 11.92 0 0 1 6.46-6.45c2.19-.91 4.97-.91 10.52-.91h282.24c5.55 0 8.33 0 10.52.9a11.92 11.92 0 0 1 6.46 6.46c.9 2.19.9 4.96.9 10.52 0 5.55 0 8.33-.9 10.52a11.92 11.92 0 0 1-6.46 6.45c-2.19.91-4.97.91-10.52.91H18.88c-5.55 0-8.33 0-10.52-.9a11.92 11.92 0 0 1-6.46-6.46C1 66.94 1 64.16 1 58.61Z">
														</path>
														<g filter="url(#filter0_d_6064_49494)">
															<path fill="#FF800B"
																d="M7 59a12 12 0 0 1 24 0 12 12 0 0 1-24 0Z"></path>
															<path fill="#fff"
																d="M24.3 57.29c.23-1.6-.99-2.45-2.65-3.03l.54-2.16-1.32-.33-.52 2.1-1.06-.24.53-2.12-1.31-.33-.54 2.16a43.5 43.5 0 0 1-.84-.2l-1.82-.45-.35 1.4s.98.23.96.24c.53.13.63.49.61.77l-.61 2.46.13.04-.13-.03-.87 3.45c-.06.16-.23.4-.6.31.01.02-.96-.23-.96-.23l-.65 1.5 1.71.43.94.24-.54 2.19 1.31.33.54-2.17c.36.1.71.2 1.05.28l-.54 2.15 1.32.33.55-2.19c2.24.43 3.93.26 4.64-1.77.57-1.64-.03-2.58-1.2-3.2.85-.2 1.5-.76 1.67-1.93Zm-3.02 4.22c-.4 1.63-3.16.75-4.05.53l.72-2.9c.9.22 3.76.66 3.33 2.37Zm.41-4.24c-.37 1.48-2.66.73-3.4.54l.65-2.63c.74.19 3.14.54 2.75 2.09Z">
															</path>
														</g>
														<circle cx="19" cy="98" r="12" fill="#fff" fill-opacity=".16"
															style="mix-blend-mode: luminosity;"></circle>
														<g filter="url(#filter1_i_6064_49494)">
															<path fill="#43A1F7"
																d="M307.08 44.7h-60.62a7.95 7.95 0 0 0-7.95 7.95v11.92a7.95 7.95 0 0 0 7.95 7.95h60.62a7.95 7.95 0 0 0 7.95-7.95V52.65a7.95 7.95 0 0 0-7.95-7.95Z">
															</path><text xml:space="preserve" fill="#fff"
																font-family="Inter" font-size="12" font-weight="600"
																letter-spacing="-.01em" style="white-space: pre;">
																<tspan x="259.2" y="63.36">Invest</tspan>
															</text>
															<path stroke="#fff" stroke-opacity=".08"
																d="M307.08 45.2h-60.62a7.45 7.45 0 0 0-7.45 7.45v11.92a7.45 7.45 0 0 0 7.45 7.45h60.62a7.45 7.45 0 0 0 7.45-7.45V52.65a7.45 7.45 0 0 0-7.45-7.45Z">
															</path>
														</g>
														<path fill="#fff" fill-opacity=".16"
															d="M97.4 56.62H61.6a1.99 1.99 0 1 0 0 3.98h35.8a1.99 1.99 0 1 0 0-3.98Zm55.64 0h-35.77a1.99 1.99 0 1 0 0 3.98h35.77a1.99 1.99 0 1 0 0-3.98Zm55.66 0h-35.78a1.99 1.99 0 1 0 0 3.98h35.78a1.99 1.99 0 1 0 0-3.98Z">
														</path>
														<path fill="#fff" fill-opacity=".06"
															d="m8.36 75.58-.2.46.2-.46Zm309.74-6.45.46.2-.46-.2Zm-6.46 6.45.2.46-.2-.46Zm0-33.94-.19.45.2-.45Zm6.46 6.45-.46.19.46-.2ZM8.36 41.64l-.2-.46.2.46ZM1.9 48.09l-.46-.2.46.2Zm16.98-6.86h282.24v-1H18.88v1Zm282.24 34.76H18.88v1h282.24v-1ZM18.88 76c-2.78 0-4.85 0-6.49-.1a12 12 0 0 1-3.84-.77l-.38.92c1.16.48 2.46.72 4.15.83 1.69.12 3.79.12 6.56.12v-1ZM.5 58.61c0 2.77 0 4.87.11 6.56.12 1.68.35 2.99.83 4.15l.92-.38c-.42-1.02-.65-2.2-.76-3.84-.1-1.64-.1-3.7-.1-6.5h-1Zm8.05 16.51a11.43 11.43 0 0 1-6.19-6.18l-.92.38a12.42 12.42 0 0 0 6.73 6.72l.38-.92ZM318.5 58.61c0 2.78 0 4.85-.11 6.49a11.98 11.98 0 0 1-.76 3.84l.92.38c.48-1.16.71-2.47.83-4.15.11-1.69.11-3.79.11-6.56h-1Zm-17.4 18.38c2.78 0 4.88 0 6.57-.12a12.8 12.8 0 0 0 4.15-.83l-.38-.92c-1.02.43-2.2.65-3.84.76-1.64.11-3.7.11-6.5.11v1Zm16.53-8.05a11.43 11.43 0 0 1-6.19 6.18l.38.92a12.42 12.42 0 0 0 6.73-6.72l-.92-.38Zm-16.52-27.71c2.78 0 4.85 0 6.49.1 1.64.12 2.82.34 3.84.76l.38-.91a12.96 12.96 0 0 0-4.15-.83c-1.69-.12-3.79-.12-6.56-.12v1ZM319.5 58.6c0-2.77 0-4.87-.11-6.56a12.9 12.9 0 0 0-.83-4.15l-.92.38c.42 1.02.65 2.2.76 3.84.1 1.64.1 3.7.1 6.49h1Zm-8.05-16.52a11.43 11.43 0 0 1 6.19 6.19l.92-.38a12.42 12.42 0 0 0-6.73-6.72l-.38.91ZM18.88 40.23c-2.77 0-4.87 0-6.56.12-1.69.11-2.99.34-4.15.83l.38.91a12 12 0 0 1 3.84-.75c1.64-.11 3.7-.11 6.5-.11v-1ZM1.5 58.61c0-2.78 0-4.85.11-6.49.11-1.64.34-2.82.76-3.84l-.92-.38a12.94 12.94 0 0 0-.83 4.15C.5 53.74.5 55.84.5 58.61h1Zm6.68-17.43a12.42 12.42 0 0 0-6.73 6.72l.92.38a11.43 11.43 0 0 1 6.19-6.19l-.38-.91Z">
														</path>
														<path fill="url(#paint2_linear_6064_49494)"
															d="M1 98.34c0-5.55 0-8.33.9-10.52a11.92 11.92 0 0 1 6.46-6.45c2.19-.9 4.97-.9 10.52-.9h282.24c5.55 0 8.33 0 10.52.9a11.92 11.92 0 0 1 6.46 6.45c.9 2.2.9 4.97.9 10.52 0 5.56 0 8.34-.9 10.53a11.92 11.92 0 0 1-6.46 6.45c-2.19.9-4.97.9-10.52.9H18.88c-5.55 0-8.33 0-10.52-.9a11.92 11.92 0 0 1-6.46-6.45c-.9-2.2-.9-4.97-.9-10.53Z">
														</path>
														<path fill="#fff" fill-opacity=".12"
															d="M307.08 84.44h-60.62a7.95 7.95 0 0 0-7.95 7.94v11.93a7.95 7.95 0 0 0 7.95 7.94h60.62a7.95 7.95 0 0 0 7.95-7.94V92.38a7.95 7.95 0 0 0-7.95-7.94Z">
														</path>
														<path fill="#fff" fill-opacity=".16"
															d="M294.16 96.36h-35.78a1.99 1.99 0 1 0 0 3.97h35.78a1.99 1.99 0 1 0 0-3.97Zm-196.76 0H61.6a1.99 1.99 0 1 0 0 3.97h35.8a1.99 1.99 0 1 0 0-3.97Zm55.64 0h-35.77a1.99 1.99 0 1 0 0 3.97h35.77a1.99 1.99 0 1 0 0-3.97Zm55.66 0h-35.78a1.99 1.99 0 1 0 0 3.97h35.78a1.99 1.99 0 1 0 0-3.97Z">
														</path>
														<path fill="#fff" fill-opacity=".06"
															d="m8.36 115.32-.2.46.2-.46Zm309.74-6.45.46.19-.46-.2Zm-6.46 6.45.2.46-.2-.46Zm0-33.95-.19.46.2-.46Zm6.46 6.45-.46.2.46-.2ZM8.36 81.37l-.2-.46.2.46ZM1.9 87.82l-.46-.19.46.2Zm16.98-6.86h282.24v-1H18.88v1Zm282.24 34.77H18.88v1h282.24v-1Zm-282.24 0c-2.78 0-4.85 0-6.49-.11a11.98 11.98 0 0 1-3.84-.76l-.38.92c1.16.48 2.46.71 4.15.83 1.69.11 3.79.11 6.56.11v-1ZM.5 98.34c0 2.77 0 4.88.11 6.56.12 1.69.35 3 .83 4.16l.92-.38a12.1 12.1 0 0 1-.76-3.85c-.1-1.64-.1-3.7-.1-6.49h-1Zm8.05 16.52a11.43 11.43 0 0 1-6.19-6.18l-.92.38a12.42 12.42 0 0 0 6.73 6.72l.38-.92ZM318.5 98.34c0 2.79 0 4.85-.11 6.5a11.99 11.99 0 0 1-.76 3.84l.92.38c.48-1.17.71-2.47.83-4.16.11-1.68.11-3.79.11-6.56h-1Zm-17.4 18.38c2.78 0 4.88 0 6.57-.11 1.69-.12 2.99-.35 4.15-.83l-.38-.92c-1.02.42-2.2.64-3.84.76-1.64.1-3.7.1-6.5.1v1Zm16.53-8.04a11.43 11.43 0 0 1-6.19 6.18l.38.92a12.41 12.41 0 0 0 6.73-6.72l-.92-.38Zm-16.52-27.72c2.78 0 4.85 0 6.49.11 1.64.11 2.82.34 3.84.76l.38-.92a12.96 12.96 0 0 0-4.15-.83c-1.69-.11-3.79-.11-6.56-.11v.99Zm18.38 17.38c0-2.77 0-4.87-.11-6.55a12.9 12.9 0 0 0-.83-4.16l-.92.38c.42 1.03.65 2.2.76 3.85.1 1.64.1 3.7.1 6.48h1Zm-8.05-16.51a11.43 11.43 0 0 1 6.19 6.18l.92-.38a12.42 12.42 0 0 0-6.73-6.72l-.38.92ZM18.88 79.97c-2.77 0-4.87 0-6.56.11-1.69.12-2.99.35-4.15.83l.38.92a12 12 0 0 1 3.84-.76c1.64-.1 3.7-.11 6.5-.11v-1ZM1.5 98.34c0-2.78 0-4.84.11-6.48.11-1.64.34-2.82.76-3.85l-.92-.38a12.94 12.94 0 0 0-.83 4.16C.5 93.47.5 95.57.5 98.34h1Zm6.68-17.43a12.42 12.42 0 0 0-6.73 6.72l.92.38a11.43 11.43 0 0 1 6.19-6.18l-.38-.92Z">
														</path>
														<path fill="url(#paint3_linear_6064_49494)"
															d="M1 138.08c0-5.55 0-8.33.9-10.52a11.92 11.92 0 0 1 6.46-6.45c2.19-.91 4.97-.91 10.52-.91h282.24c5.55 0 8.33 0 10.52.9a11.92 11.92 0 0 1 6.46 6.46c.9 2.19.9 4.97.9 10.52s0 8.33-.9 10.52a11.92 11.92 0 0 1-6.46 6.45c-2.19.91-4.97.91-10.52.91H18.88c-5.55 0-8.33 0-10.52-.9a11.92 11.92 0 0 1-6.46-6.46c-.9-2.19-.9-4.97-.9-10.52Z">
														</path>
														<circle cx="19" cy="138" r="12" fill="#fff" fill-opacity=".16"
															style="mix-blend-mode: luminosity;"></circle>
														<path fill="#fff" fill-opacity=".12"
															d="M307.08 124.17h-60.62a7.95 7.95 0 0 0-7.95 7.95v11.92a7.95 7.95 0 0 0 7.95 7.95h60.62a7.95 7.95 0 0 0 7.95-7.95v-11.92a7.95 7.95 0 0 0-7.95-7.95Z">
														</path>
														<path fill="#fff" fill-opacity=".16"
															d="M294.16 136.1h-35.78a1.99 1.99 0 1 0 0 3.97h35.78a1.99 1.99 0 1 0 0-3.98Zm-196.76 0H61.6a1.99 1.99 0 1 0 0 3.97h35.8a1.99 1.99 0 1 0 0-3.98Zm55.64 0h-35.77a1.99 1.99 0 1 0 0 3.97h35.77a1.99 1.99 0 1 0 0-3.98Zm55.66 0h-35.78a1.99 1.99 0 1 0 0 3.97h35.78a1.99 1.99 0 1 0 0-3.98Z">
														</path>
														<path fill="#fff" fill-opacity=".06"
															d="m8.36 155.05-.2.46.2-.46Zm309.74-6.45.46.2-.46-.2Zm-6.46 6.45.2.46-.2-.46Zm0-33.94-.19.45.2-.45Zm6.46 6.45-.46.19.46-.2ZM8.36 121.1l-.2-.46.2.46Zm-6.46 6.45-.46-.2.46.2Zm16.98-6.87h282.24v-.99H18.88v1Zm282.24 34.77H18.88v1h282.24v-1Zm-282.24 0c-2.78 0-4.85 0-6.49-.1a11.96 11.96 0 0 1-3.84-.77l-.38.92c1.16.49 2.46.72 4.15.83 1.69.12 3.79.12 6.56.12v-1ZM.5 138.08c0 2.77 0 4.87.11 6.56.12 1.68.35 2.99.83 4.15l.92-.38c-.42-1.02-.65-2.2-.76-3.84-.1-1.64-.1-3.7-.1-6.49h-1Zm8.05 16.51a11.43 11.43 0 0 1-6.19-6.18l-.92.38a12.42 12.42 0 0 0 6.73 6.72l.38-.92Zm309.96-16.51c0 2.78 0 4.85-.11 6.49a11.99 11.99 0 0 1-.76 3.84l.92.38c.48-1.16.71-2.47.83-4.15.11-1.69.11-3.79.11-6.56h-1Zm-17.4 18.38c2.78 0 4.88 0 6.57-.12 1.69-.11 2.99-.34 4.15-.83l-.38-.92c-1.02.43-2.2.65-3.84.76-1.64.11-3.7.11-6.5.11v1Zm16.53-8.05a11.43 11.43 0 0 1-6.19 6.18l.38.92a12.41 12.41 0 0 0 6.73-6.72l-.92-.38Zm-16.52-27.72c2.78 0 4.85 0 6.49.12 1.64.1 2.82.33 3.84.75l.38-.91a12.93 12.93 0 0 0-4.15-.83c-1.69-.12-3.79-.12-6.56-.12v1Zm18.38 17.39c0-2.77 0-4.87-.11-6.56a12.9 12.9 0 0 0-.83-4.15l-.92.38c.42 1.02.65 2.2.76 3.84.1 1.64.1 3.7.1 6.49h1Zm-8.05-16.52a11.43 11.43 0 0 1 6.19 6.19l.92-.38a12.41 12.41 0 0 0-6.73-6.72l-.38.91ZM18.88 119.7c-2.77 0-4.87 0-6.56.12-1.69.11-2.99.34-4.15.83l.38.91a12 12 0 0 1 3.84-.75c1.64-.12 3.7-.12 6.5-.12v-.99ZM1.5 138.08c0-2.78 0-4.85.11-6.49.11-1.64.34-2.82.76-3.84l-.92-.38a12.94 12.94 0 0 0-.83 4.15c-.11 1.69-.11 3.79-.11 6.56h1Zm6.68-17.43a12.42 12.42 0 0 0-6.73 6.72l.92.38a11.43 11.43 0 0 1 6.19-6.19l-.38-.91Z">
														</path>
													</g>
													<defs>
														<linearGradient id="paint0_linear_6064_49494" x1=".99" x2="319"
															y1=".99" y2="36.78" gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff" stop-opacity=".12"></stop>
															<stop offset=".98" stop-color="#fff" stop-opacity=".02">
															</stop>
														</linearGradient>
														<linearGradient id="paint1_linear_6064_49494" x1=".99" x2="319"
															y1="40.73" y2="76.52" gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff" stop-opacity=".24"></stop>
															<stop offset=".98" stop-color="#fff" stop-opacity=".08">
															</stop>
														</linearGradient>
														<linearGradient id="paint2_linear_6064_49494" x1=".99" x2="319"
															y1="80.46" y2="116.25" gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff" stop-opacity=".12"></stop>
															<stop offset=".98" stop-color="#fff" stop-opacity=".02">
															</stop>
														</linearGradient>
														<linearGradient id="paint3_linear_6064_49494" x1=".99" x2="319"
															y1="120.2" y2="155.99" gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff" stop-opacity=".12"></stop>
															<stop offset=".98" stop-color="#fff" stop-opacity=".02">
															</stop>
														</linearGradient>
														<filter id="filter0_d_6064_49494" width="56" height="56" x="-9"
															y="35" color-interpolation-filters="sRGB"
															filterUnits="userSpaceOnUse">
															<feFlood flood-opacity="0" result="BackgroundImageFix">
															</feFlood>
															<feColorMatrix in="SourceAlpha" result="hardAlpha"
																values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
															</feColorMatrix>
															<feOffset dy="4"></feOffset>
															<feGaussianBlur stdDeviation="8"></feGaussianBlur>
															<feComposite in2="hardAlpha" operator="out"></feComposite>
															<feColorMatrix
																values="0 0 0 0 0.968627 0 0 0 0 0.576471 0 0 0 0 0.101961 0 0 0 0.24 0">
															</feColorMatrix>
															<feBlend in2="BackgroundImageFix"
																result="effect1_dropShadow_6064_49494"></feBlend>
															<feBlend in="SourceGraphic"
																in2="effect1_dropShadow_6064_49494" result="shape">
															</feBlend>
														</filter>
														<filter id="filter1_i_6064_49494" width="76.53" height="29.82"
															x="238.51" y="44.7" color-interpolation-filters="sRGB"
															filterUnits="userSpaceOnUse">
															<feFlood flood-opacity="0" result="BackgroundImageFix">
															</feFlood>
															<feBlend in="SourceGraphic" in2="BackgroundImageFix"
																result="shape"></feBlend>
															<feColorMatrix in="SourceAlpha" result="hardAlpha"
																values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
															</feColorMatrix>
															<feOffset dy="2"></feOffset>
															<feGaussianBlur stdDeviation="4"></feGaussianBlur>
															<feComposite in2="hardAlpha" k2="-1" k3="1"
																operator="arithmetic"></feComposite>
															<feColorMatrix
																values="0 0 0 0 0.176471 0 0 0 0 0.498039 0 0 0 0 0.984314 0 0 0 0.08 0">
															</feColorMatrix>
															<feBlend in2="shape"
																result="effect1_innerShadow_6064_49494"></feBlend>
														</filter>
														<clipPath id="clip0_6064_49494">
															<path fill="#fff" d="M0 0h320v150H0z"></path>
														</clipPath>
													</defs>
												</svg> <svg class="_svg-slide-arrow" width="76" height="16" fill="none"
													viewBox="0 0 102 18">
													<path fill="url(#paint0_linear_1373_17118-329805)"
														fill-opacity=".12"
														d="M.4 14.2a1 1 0 0 0 1.2 1.6L.4 14.2ZM101.14 16a1 1 0 0 0 .85-1.14l-1.23-8.91a1 1 0 0 0-1.98.27l1.1 7.93-7.93 1.1a1 1 0 1 0 .27 1.97l8.92-1.23ZM1.6 15.8C13.46 6.88 31.91 2.12 50.6 2 69.29 1.9 88 6.4 100.4 15.8l1.2-1.6C88.73 4.46 69.53-.12 50.6 0 31.64.12 12.72 4.93.39 14.2l1.21 1.6Z">
													</path>
													<defs>
														<linearGradient id="paint0_linear_1373_17118-329805" x1="101"
															x2="1" y1="15" y2="15" gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff"></stop>
															<stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
														</linearGradient>
													</defs>
												</svg></li>
											<li class="item2 svelte-1ujid0w"><span class="heading svelte-1ujid0w"
													data-counter-text="Step 2"><b
														style="font-size: 15px; color:rgb(189, 189, 189)">Step
														2</b><br>Deposit crypto to your wallet on the
													platform</span> <svg class="_svg-slide-illustration"
													preserveAspectRatio="xMinYMin meet" width="100%" height="100%"
													fill="none" viewBox="0 0 320 150">
													<g clip-path="url(#clip0_6064_49532)">
														<path fill="url(#paint0_linear_6064_49532)"
															d="M308 0H12A12 12 0 0 0 0 12v201a12 12 0 0 0 12 12h296a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12Z">
														</path><text xml:space="preserve" fill="#fff" fill-opacity=".36"
															font-family="Inter" font-size="12" font-weight="600"
															letter-spacing="-.01em" style="white-space: pre;">
															<tspan x="116.04" y="102.36">Scan QR-code</tspan>
														</text>
														<path fill="#fff" fill-opacity=".24"
															d="M217 18H103a3 3 0 1 0 0 6h114a3 3 0 1 0 0-6Z"></path>
														<path fill="url(#paint1_linear_6064_49532)"
															d="M291.87 42H27.21A11.21 11.21 0 0 0 16 53.21v11.22a11.2 11.2 0 0 0 11.21 11.21h264.66c6.2 0 11.22-5.02 11.22-11.21V53.2c0-6.19-5.02-11.21-11.22-11.21Z">
														</path>
														<path fill="#fff" fill-opacity=".24"
															d="M289.63 45.1H241.6a10.1 10.1 0 0 0-10.1 10.09v7.27a10.1 10.1 0 0 0 10.1 10.09h48.03a10.1 10.1 0 0 0 10.1-10.1V55.2a10.1 10.1 0 0 0-10.1-10.1Z">
														</path><text xml:space="preserve" fill="#fff"
															font-family="Inter" font-size="12" font-weight="600"
															letter-spacing="-.01em" style="white-space: pre;">
															<tspan x="243.01" y="63.36">Copy</tspan>
														</text>
														<path fill="#fff" fill-rule="evenodd"
															d="M281.58 55.6c-.14.38-.14.86-.14 1.82 0 .96 0 1.44.14 1.82.23.6.71 1.08 1.31 1.3.39.15.87.15 1.82.15.96 0 1.44 0 1.82-.14.6-.23 1.08-.7 1.3-1.31.15-.38.15-.86.15-1.82 0-.96 0-1.44-.14-1.82-.23-.6-.7-1.08-1.31-1.3-.38-.15-.86-.15-1.82-.15-.95 0-1.43 0-1.82.14-.6.23-1.08.7-1.3 1.31Zm9.2 3.43v1.2c0 .95 0 1.43-.14 1.81-.22.6-.7 1.08-1.3 1.31a5.6 5.6 0 0 1-1.82.14h-1.26a2 2 0 0 1-2.01-2c0-.14.1-.26.24-.26h.14c1-.02 1.5-.03 1.9-.16a2.8 2.8 0 0 0 1.8-1.84c.12-.4.12-.9.12-1.89v-.13c0-.14.12-.26.26-.26 1.15 0 2.08.93 2.08 2.08Z"
															clip-rule="evenodd"></path>
														<path stroke="#fff" stroke-opacity=".16" stroke-width=".28"
															d="M289.63 45.23H241.6a9.95 9.95 0 0 0-9.95 9.96v7.27c0 5.5 4.45 9.95 9.95 9.95h48.03c5.5 0 9.95-4.46 9.95-9.95v-7.27c0-5.5-4.45-9.96-9.95-9.96Z">
														</path>
														<path fill="#fff" fill-opacity=".16"
															d="M66 52H30a2 2 0 1 0 0 4h36a2 2 0 1 0 0-4Z"></path>
														<path fill="#fff" fill-opacity=".32"
															d="M219 61.5H30a2 2 0 1 0 0 4h189a2 2 0 1 0 0-4Z"></path>
														<path fill="#FCFCFC" fill-opacity=".16"
															d="M209.41 121h-98.68a6.73 6.73 0 0 0-6.73 6.73v98.68a6.73 6.73 0 0 0 6.73 6.73h98.68a6.73 6.73 0 0 0 6.73-6.73v-98.68a6.73 6.73 0 0 0-6.73-6.73Z">
														</path>
														<path fill="#fff"
															d="M113.89 128.52h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M118.62 128.52h-2.37v2.37h2.37v-2.37Zm2.38 0h-2.38v2.37H121v-2.37Zm2.36 0H121v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff" d="M125.73 128.52h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M128.1 128.52h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm2.37 0h-2.36v2.37h2.36v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm11.84 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm7.11 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm21.31 0h-2.36v2.37h2.36v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M203.89 128.52h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm-94.74 2.37h-2.37v2.37h2.37v-2.37Zm14.21 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.36 0h-2.36v2.37h2.37v-2.37Zm2.38 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M147.04 130.89h-2.36v2.37h2.36v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm9.48 0h-2.37v2.37h2.37v-2.37Zm2.36 0h-2.36v2.37h2.36v-2.37Zm4.74 0H166v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M170.73 130.89h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm14.22 0h-2.37v2.37h2.37v-2.37Zm-94.74 2.36h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.37v2.37h2.37v-2.37Zm2.38 0h-2.38v2.37H121v-2.37Zm2.36 0H121v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm7.1 0h-2.36v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm2.36 0h-2.36v2.37h2.37v-2.37Zm2.38 0h-2.37v2.37h2.37v-2.37Zm11.84 0h-2.37v2.37h2.37v-2.37Zm9.48 0h-2.38v2.37H166v-2.37Z">
														</path>
														<path fill="#fff"
															d="M168.36 133.25H166v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M180.2 133.25h-2.36v2.37h2.36v-2.37Zm2.37 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm7.1 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M203.89 133.25h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm-94.74 2.37h-2.37V138h2.37v-2.37Zm4.73 0h-2.37V138h2.37v-2.37Zm2.38 0h-2.38V138H121v-2.37Zm2.36 0H121V138h2.37v-2.37Zm4.74 0h-2.37V138h2.37v-2.37Zm4.73 0h-2.36V138h2.36v-2.37Zm4.74 0h-2.37V138h2.37v-2.37Zm9.47 0h-2.36V138h2.36v-2.37Zm2.37 0h-2.37V138h2.37v-2.37Zm14.21 0h-2.36V138h2.36v-2.37Zm2.38 0h-2.38V138H166v-2.37Zm7.1 0h-2.37V138h2.37v-2.37Zm2.37 0h-2.37V138h2.37v-2.37Zm2.37 0h-2.37V138h2.37v-2.37Zm4.73 0h-2.36V138h2.36v-2.37Zm4.74 0h-2.37V138h2.37v-2.37Zm2.37 0h-2.37V138h2.37v-2.37Zm4.73 0h-2.36V138h2.36v-2.37Zm4.74 0h-2.37V138h2.37v-2.37Zm2.37 0h-2.37V138h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M203.89 135.62h-2.37V138h2.37v-2.37Zm4.74 0h-2.37V138h2.37v-2.37ZM113.89 138h-2.37v2.36h2.37V138Zm4.73 0h-2.37v2.36h2.37V138Zm2.38 0h-2.38v2.36H121V138Zm2.36 0H121v2.36h2.37V138Zm4.74 0h-2.37v2.36h2.37V138Zm4.73 0h-2.36v2.36h2.36V138Zm7.11 0h-2.37v2.36h2.37V138Zm2.36 0h-2.36v2.36h2.37V138Zm2.38 0h-2.37v2.36h2.37V138Z">
														</path>
														<path fill="#fff"
															d="M147.04 138h-2.36v2.36h2.36V138Zm2.37 0h-2.37v2.36h2.37V138Zm2.37 0h-2.37v2.36h2.37V138Zm2.37 0h-2.37v2.36h2.37V138Zm4.74 0h-2.37v2.36h2.37V138Zm2.37 0h-2.37v2.36h2.37V138Zm2.36 0h-2.36v2.36h2.36V138Zm2.38 0h-2.38v2.36H166V138Zm9.47 0h-2.37v2.36h2.37V138Zm11.84 0h-2.37v2.36h2.37V138Zm7.1 0h-2.36v2.36h2.36V138Zm4.74 0h-2.37v2.36h2.37V138Zm2.37 0h-2.37v2.36h2.37V138Z">
														</path>
														<path fill="#fff"
															d="M203.89 138h-2.37v2.36h2.37V138Zm4.74 0h-2.37v2.36h2.37V138Zm-94.74 2.36h-2.37v2.37h2.37v-2.37Zm14.21 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.36 0h-2.36v2.37h2.37v-2.37Zm4.74 0h-2.36v2.37h2.36v-2.37Zm7.11 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M158.89 140.36h-2.37v2.37h2.37v-2.37Zm18.95 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm14.22 0h-2.37v2.37h2.37v-2.37Zm-94.74 2.37h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M118.62 142.73h-2.37v2.37h2.37v-2.37Zm2.38 0h-2.38v2.37H121v-2.37Zm2.36 0H121v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff" d="M125.73 142.73h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M128.1 142.73h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.37v-2.37Zm4.74 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.38v2.37H166v-2.37Zm4.73 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M203.89 142.73h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm-71.06 2.37h-2.37v2.37h2.37v-2.37Zm7.11 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M147.04 145.1h-2.36v2.37h2.36v-2.37Zm7.11 0h-2.37v2.37h2.37v-2.37Zm7.11 0h-2.37v2.37h2.37v-2.37Zm2.36 0h-2.36v2.37h2.36v-2.37Zm4.74 0H166v2.37h2.37v-2.37Zm18.95 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37ZM121 147.47h-2.38v2.36H121v-2.36Zm7.1 0h-2.37v2.36h2.37v-2.36Zm7.1 0h-2.36v2.36h2.36v-2.36Zm2.37 0h-2.37v2.36h2.37v-2.36Zm4.73 0h-2.36v2.36h2.37v-2.36Zm7.11 0h-2.37v2.36h2.37v-2.36Zm2.37 0h-2.37v2.36h2.37v-2.36Zm2.37 0h-2.37v2.36h2.37v-2.36Zm2.37 0h-2.37v2.36h2.37v-2.36Zm9.48 0h-2.38v2.36H166v-2.36Zm7.1 0h-2.37v2.36h2.37v-2.36Zm16.58 0h-2.37v2.36h2.37v-2.36Zm7.1 0h-2.37v2.36h2.37v-2.36Zm2.37 0h-2.37v2.36h2.37v-2.36Zm2.37 0h-2.37v2.36h2.37v-2.36Zm4.74 0h-2.37v2.36h2.37v-2.36Zm2.37 0h-2.37v2.36h2.37v-2.36Zm-94.74 2.36h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.37v2.37h2.37v-2.37Zm11.85 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm16.58 0h-2.37v2.37h2.37v-2.37Zm7.11 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm2.36 0h-2.36v2.37h2.36v-2.37Zm2.38 0h-2.38v2.37H166v-2.37Zm4.73 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm4.73 0h-2.36v2.37h2.36v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Zm2.37 0h-2.37v2.37h2.37v-2.37Zm4.74 0h-2.37v2.37h2.37v-2.37Z">
														</path>
														<path fill="#fff"
															d="M99.25 97.78H13.74a.28.28 0 1 0 0 .56h85.5a.28.28 0 0 0 0-.56Zm201.01 0h-85.5a.28.28 0 1 0 0 .56h85.5a.28.28 0 1 0 0-.56Z"
															opacity=".12"></path>
														<path stroke="#fff" stroke-opacity=".08" stroke-width=".5"
															d="M308 .25H12A11.75 11.75 0 0 0 .25 12v201c0 6.49 5.26 11.75 11.75 11.75h296c6.49 0 11.75-5.26 11.75-11.75V12c0-6.49-5.26-11.75-11.75-11.75Z">
														</path>
													</g>
													<defs>
														<linearGradient id="paint0_linear_6064_49532" x1="0" x2="323.94"
															y1="0" y2="5.83" gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff" stop-opacity=".12"></stop>
															<stop offset=".98" stop-color="#fff" stop-opacity=".04">
															</stop>
														</linearGradient>
														<linearGradient id="paint1_linear_6064_49532" x1="16"
															x2="303.31" y1="42" y2="73.57"
															gradientUnits="userSpaceOnUse">
															<stop stop-color="#367FED"></stop>
															<stop offset="1" stop-color="#0AA0F8"></stop>
														</linearGradient>
														<clipPath id="clip0_6064_49532">
															<path fill="#fff" d="M0 0h320v150H0z"></path>
														</clipPath>
													</defs>
												</svg> <svg class="_svg-slide-arrow" width="76" height="16" fill="none"
													viewBox="0 0 102 18">
													<path fill="url(#paint0_linear_1373_17118-329805)"
														fill-opacity=".12"
														d="M.4 14.2a1 1 0 0 0 1.2 1.6L.4 14.2ZM101.14 16a1 1 0 0 0 .85-1.14l-1.23-8.91a1 1 0 0 0-1.98.27l1.1 7.93-7.93 1.1a1 1 0 1 0 .27 1.97l8.92-1.23ZM1.6 15.8C13.46 6.88 31.91 2.12 50.6 2 69.29 1.9 88 6.4 100.4 15.8l1.2-1.6C88.73 4.46 69.53-.12 50.6 0 31.64.12 12.72 4.93.39 14.2l1.21 1.6Z">
													</path>
													<defs>
														<linearGradient id="paint0_linear_1373_17118-329805" x1="101"
															x2="1" y1="15" y2="15" gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff"></stop>
															<stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
														</linearGradient>
													</defs>
												</svg></li>
											<li class="item3 svelte-1ujid0w"><span class="heading svelte-1ujid0w"
													data-counter-text="Step 3"><b
														style="font-size: 15px; color:rgb(189, 189, 189)">Step
														3</b><br>Receive daily rewards on your
													asset</span> <svg class="_svg-slide-illustration"
													preserveAspectRatio="xMinYMin meet" width="100%" height="100%"
													fill="none" viewBox="0 0 320 150">
													<g clip-path="url(#clip0_6064_49749)">
														<path fill="url(#paint0_linear_6064_49749)"
															d="M143 0H12A12 12 0 0 0 0 12v90a12 12 0 0 0 12 12h131a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12Z">
														</path><text xml:space="preserve" fill="#fff"
															font-family="Inter" font-size="16" font-weight="600"
															letter-spacing="-.02em" style="white-space: pre;">
															<tspan x="51.49" y="73.82">Bitcoin</tspan>
														</text><svg width="400" height="200" preserveAspectRatio="none">
															<rect fill="url(#6fmogm4q2ce)" clip-path="url(#kv5e6usp0b)"
																width="400" height="200" x="0" y="0"></rect>
															<defs>
																<clipPath id="kv5e6usp0b">
																	<rect width="108" height="20" x="23" y="82"
																		fill="#fff" fill-opacity=".16" rx="8"></rect>
																</clipPath>
																<linearGradient id="6fmogm4q2ce" x1="-100%" y1="50%"
																	x2="0%" y2="50%">
																	<stop stop-color="rgba(255, 255, 255, 0.16)"
																		offset="0%"></stop>
																	<stop stop-color="#3E4049" offset="50%"></stop>
																	<stop stop-color="rgba(255, 255, 255, 0.16)"
																		offset="100%"></stop>
																</linearGradient>
															</defs>
														</svg><text xml:space="preserve" fill="#fff" font-family="Inter"
															font-size="12" font-weight="600" letter-spacing="-.01em"
															style="white-space: pre;">
															<tspan x="29.28" y="96.36">6.5% per year</tspan>
														</text>
														<path fill="#fff" fill-rule="evenodd"
															d="M120.24 87.72c.3-.3.8-.3 1.12 0l3.08 2.92c.3.29.3.76 0 1.06a.83.83 0 0 1-1.12 0l-1.73-1.64v5.69c0 .41-.36.75-.8.75a.77.77 0 0 1-.78-.75v-5.69l-1.73 1.64a.83.83 0 0 1-1.12 0 .72.72 0 0 1 0-1.06l3.08-2.92Z"
															clip-rule="evenodd"></path>
														<g filter="url(#filter0_d_6064_49749)">
															<path fill="#FF800B"
																d="M62 30a16 16 0 1 1 32 0 16 16 0 1 1-32 0Z"></path>
															<path fill="#fff"
																d="M85.06 27.72c.31-2.13-1.3-3.27-3.52-4.04l.72-2.88-1.76-.44-.7 2.81c-.46-.12-.94-.22-1.4-.33l.7-2.83-1.76-.44-.72 2.89a58 58 0 0 1-1.12-.27l-2.42-.61-.46 1.88s1.3.3 1.27.31c.71.18.84.65.82 1.02l-.82 3.29.18.06-.18-.05-1.15 4.6c-.09.22-.3.55-.8.42.01.03-1.28-.32-1.28-.32l-.87 2.01 2.28.57 1.25.33-.72 2.91 1.75.44.72-2.89 1.4.37-.72 2.87 1.76.44.72-2.91c3 .56 5.25.33 6.2-2.37.76-2.18-.04-3.44-1.62-4.26 1.15-.27 2.02-1.02 2.25-2.58Zm-4.02 5.63c-.54 2.18-4.21 1-5.4.7l.96-3.86c1.2.3 5.01.88 4.44 3.16Zm.55-5.66c-.5 1.98-3.55.97-4.54.73l.87-3.5c1 .24 4.18.7 3.67 2.77Z">
															</path>
														</g>
														<path stroke="#fff" stroke-opacity=".08" stroke-width=".5"
															d="M143 .25H12A11.75 11.75 0 0 0 .25 12v90c0 6.49 5.26 11.75 11.75 11.75h131c6.49 0 11.75-5.26 11.75-11.75V12c0-6.49-5.26-11.75-11.75-11.75Z">
														</path>
														<path fill="url(#paint1_linear_6064_49749)"
															d="M308 0H177a12 12 0 0 0-12 12v90a12 12 0 0 0 12 12h131a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12Z">
														</path>
														<circle cx="243" cy="30" r="16" fill="#fff" fill-opacity=".16">
														</circle>
														<path fill="#fff" fill-opacity=".16"
															d="M271 66h-56a4 4 0 0 0 0 8h56a4 4 0 0 0 0-8Z"></path>
														<path fill="#fff" fill-opacity=".04"
															d="M288 82h-90a8 8 0 0 0-8 8v4a8 8 0 0 0 8 8h90a8 8 0 0 0 8-8v-4a8 8 0 0 0-8-8Z">
														</path>
														<path fill="#fff" fill-opacity=".12"
															d="M282 90h-78a2 2 0 1 0 0 4h78a2 2 0 1 0 0-4Z"></path>
														<path stroke="#fff" stroke-opacity=".08" stroke-width=".5"
															d="M308 .25H177A11.75 11.75 0 0 0 165.25 12v90c0 6.49 5.26 11.75 11.75 11.75h131c6.49 0 11.75-5.26 11.75-11.75V12c0-6.49-5.26-11.75-11.75-11.75Z">
														</path>
														<path fill="url(#paint2_linear_6064_49749)"
															d="M143 124H12a12 12 0 0 0-12 12v90a12 12 0 0 0 12 12h131a12 12 0 0 0 12-12v-90a12 12 0 0 0-12-12Z">
														</path>
														<circle cx="78" cy="154" r="16" fill="#fff" fill-opacity=".16">
														</circle>
														<path stroke="#fff" stroke-opacity=".08" stroke-width=".5"
															d="M143 124.25H12A11.75 11.75 0 0 0 .25 136v90c0 6.49 5.26 11.75 11.75 11.75h131c6.49 0 11.75-5.26 11.75-11.75v-90c0-6.49-5.26-11.75-11.75-11.75Z">
														</path>
														<path fill="url(#paint3_linear_6064_49749)"
															d="M308 124H177a12 12 0 0 0-12 12v90a12 12 0 0 0 12 12h131a12 12 0 0 0 12-12v-90a12 12 0 0 0-12-12Z">
														</path>
														<circle cx="243" cy="154" r="16" fill="#fff" fill-opacity=".16">
														</circle>
														<path stroke="#fff" stroke-opacity=".08" stroke-width=".5"
															d="M308 124.25H177A11.75 11.75 0 0 0 165.25 136v90c0 6.49 5.26 11.75 11.75 11.75h131c6.49 0 11.75-5.26 11.75-11.75v-90c0-6.49-5.26-11.75-11.75-11.75Z">
														</path>
													</g>
													<defs>
														<linearGradient id="paint0_linear_6064_49749" x1="0" x2="156.78"
															y1="0" y2="2.5" gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff" stop-opacity=".12"></stop>
															<stop offset="1" stop-color="#fff" stop-opacity=".06">
															</stop>
														</linearGradient>
														<linearGradient id="paint1_linear_6064_49749" x1="165"
															x2="249.31" y1="0" y2="52.61"
															gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff" stop-opacity=".08"></stop>
															<stop offset="1" stop-color="#fff" stop-opacity=".04">
															</stop>
														</linearGradient>
														<linearGradient id="paint2_linear_6064_49749" x1="0" x2="156.78"
															y1="124" y2="126.5" gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff" stop-opacity=".06"></stop>
															<stop offset="1" stop-color="#fff" stop-opacity=".05">
															</stop>
														</linearGradient>
														<linearGradient id="paint3_linear_6064_49749" x1="165"
															x2="321.78" y1="124" y2="126.5"
															gradientUnits="userSpaceOnUse">
															<stop stop-color="#fff" stop-opacity=".05"></stop>
															<stop offset="1" stop-color="#fff" stop-opacity=".02">
															</stop>
														</linearGradient>
														<clipPath id="clip0_6064_49749">
															<path fill="#fff" d="M0 0h320v150H0z"></path>
														</clipPath>
														<filter id="filter0_d_6064_49749" width="64" height="64" x="46"
															y="2" color-interpolation-filters="sRGB"
															filterUnits="userSpaceOnUse">
															<feFlood flood-opacity="0" result="BackgroundImageFix">
															</feFlood>
															<feColorMatrix in="SourceAlpha" result="hardAlpha"
																values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
															</feColorMatrix>
															<feOffset dy="4"></feOffset>
															<feGaussianBlur stdDeviation="8"></feGaussianBlur>
															<feComposite in2="hardAlpha" operator="out"></feComposite>
															<feColorMatrix
																values="0 0 0 0 0.968627 0 0 0 0 0.576471 0 0 0 0 0.101961 0 0 0 0.24 0">
															</feColorMatrix>
															<feBlend in2="BackgroundImageFix"
																result="effect1_dropShadow_6064_49749"></feBlend>
															<feBlend in="SourceGraphic"
																in2="effect1_dropShadow_6064_49749" result="shape">
															</feBlend>
														</filter>
													</defs>
												</svg></li>
										</ol>
									</div>

								</div> <!-- /.tt-col -->
								<!-- 
									<div class="tt-col-lg-1">
									</div> /.tt-col -->

								<div class="tt-col-lg-12">






									<input type="text" id="myInput" onkeyup="myFunction()"
										placeholder="Search for Coins.." title="Type in a name">


									<table id="myTable" class="container-table">
										<thead>
											<tr>
												<th>Coins Name</th>
												<th>APY</th>
												<th>Price </th>
												<th>24h %</th>
												<th>Last 24h</th>
												<th style="width: 10px;"></th>
											</tr>
										</thead>
										<tbody class="containerTable-body">
											<!--         <tr>
										<td class="containerTable-lblValue">`+ (i + 1) + `</td>
										<td class="containerTable-lblValue">Lost City</td>
										<td class="containerTable-lblValue">Action</td>
										<td class="containerTable-lblValue">
											<button class="tableValue-btnOption">Details</button>
											<button class="tableValue-btnOption">Edit</button>
											<button class="tableValue-btnOption">Delete</button>
										</td>
									</tr> -->
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/earnara1.png" style="width:25px ;margin: 0 9px -7px 0;
								  left: 0;" class=" " alt="Bitcoin"> EARNARA</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-down"></i>0.53% ($106.41)</td>
												<td>
													<canvas id="myChart" style="width:100%;max-width:100px"></canvas>
												</td>
												<td><button id="open-modal" class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/bitcoin.png" style="width:25px ;margin: 0 9px -7px 0;;
								  left: 0;" class=" " alt="Bitcoin"> BITCOIN</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-down"></i>0.53% ($106.41)</td>
												<td><canvas id="myChart1" style="width:100%;max-width:100px"></canvas>
												</td>
												<td><button id="open-modal2" class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/ethereum.png" style="width:25px ;margin: 0 9px -7px 0;
								  left: 0;" class=" " alt="Bitcoin"> ETHEREUM</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-down"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td><button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/bnb.png" style="width:25px ;margin: 0 9px -7px 0;
																  left: 0;" class=" " alt="Bitcoin"> BINANCE COIN</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-up text-success"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td>




													<button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button>





												</td>
											</tr>













											<!-- //////////////////////// -->

											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/usdt.png" style="width:25px ;margin: 0 9px -7px 0;
																  left: 0;" class=" " alt="Bitcoin">TETHER</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-up text-success"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td><button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button>

											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/dai_.png" style="width:25px ;margin: 0 9px -7px 0;
																  left: 0;" class=" " alt="Bitcoin">DAI</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-up text-success"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td><button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/LINK.png" style="width:25px ;margin: 0 9px -7px 0;
																  left: 0;" class=" " alt="Bitcoin"> CHAINLINK</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-up text-success"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td><button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/solana.png" style="width:25px ;margin: 0 9px -7px 0;
																  left: 0;" class=" " alt="Bitcoin"> SOLANA</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-up text-success"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td><button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/cake.png" style="width:25px ;margin: 0 9px -7px 0;
																  left: 0;" class=" " alt="Bitcoin"> PANCAKE</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-up text-success"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td><button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/usdc.png" style="width:25px ;margin: 0 9px -7px 0;
																  left: 0;" class=" " alt="Bitcoin"> USDC</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-up text-success"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td><button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/busd.png" style="width:25px ;margin: 0 9px -7px 0;
																  left: 0;" class=" " alt="Bitcoin"> Binance USD</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-up text-success"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td><button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>
											<tr class="containerTable-lblValue">

												<td> <img src="assets/img/tokens/tron.png" style="width:25px ;margin: 0 9px -7px 0;
																  left: 0;" class=" " alt="Bitcoin">TRON</td>
												<td>21.5%</td>
												<td>$21 545</td>
												<td><i class="fa fa-arrow-up text-success"></i>0.53% ($106.41)</td>
												<td>chart</td>
												<td><button class="tt-btn   tt-btn-primary btn-inv ">
														<div data-hover="Invest">Invest</div>

													</button></td>
											</tr>

										</tbody>
									</table>




									<br>
									<br>
									<br>
									<br>
									<br>






								</div> <!-- /.tt-col -->







							</div> <!-- /.tt-row -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->


					<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
					<!-- <div class="tt-section padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap">

								 
								<div class="tt-page-nav tt-pn-stroke">
									<a href="portfolio-grid-creative.html" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-arrow-right'></i>">
										<div class="tt-pn-title">Portfolio</div>
										<div class="tt-pn-hover-title">Portfolio</div>
									</a>  
									<div class="tt-pn-subtitle anim-fadeinup">Selected Works</div>
								</div>
								 

							</div>  
						</div> -->
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

								<a href="#" class="tt-btn tt-btn-link scroll-to-top">
									<span class="tt-btn-icon"><i class="fas fa-arrow-up"></i></span>
									<div data-hover="Back to Top">Back to Top</div>
								</a>

							</div> <!-- /.footer-col-inner -->
						</div>
						<!-- Begin footer column -->

						<!-- Begin footer column 
							========================= -->
						<div class="footer-col tt-align-center order-m-last">
							<div class="footer-col-inner">

								<div class="tt-copyright text-gray">
									<a href="../../../themetorium.net/index.html" target="_blank" rel="noopener"
										class="tt-btn tt-btn-link">
										<span class="tt-btn-icon"><i class="far fa-copyright"></i></span>
										© Copyright - <a href="" target="_blank" rel="noopener"
											class="tt-link">earnara.io</a>
									</a>
								</div>

							</div> <!-- /.footer-col-inner -->
						</div>

						<!-- Begin footer column -->

						<!-- Begin footer column 
							========================= -->
						<div class="footer-col tt-align-center-right">
							<div class="footer-col-inner">

								<div class="footer-social">
									<div class="footer-social-text"><span>Follow</span><i class="fas fa-share-alt"></i>
									</div>
									<div class="social-buttons">
										<ul>
											<li><a href="../../../web.facebook.com/themetoriumc9ef.html"
													class="magnetic-item" target="_blank" rel="noopener"><i
														class="fab fa-facebook-f"></i></a></li>
											<li><a href="../../../twitter.com/Themetorium.html" class="magnetic-item"
													target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
											</li>
											<li><a href="../../../www.youtube.com/index.html" class="magnetic-item"
													target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
											</li>
											<li><a href="../../../dribbble.com/Themetorium.html" class="magnetic-item"
													target="_blank" rel="noopener"><i class="fab fa-dribbble"></i></a>
											</li>
											<li><a href="../../../www.behance.net/Themetorium.html"
													class="magnetic-item" target="_blank" rel="noopener"><i
														class="fab fa-behance"></i></a></li>
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
	<script src="assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->

	<!-- Libs and Plugins JS -->
	<script src="assets/vendor/gsap/gsap.min.js"></script> <!-- GSAP JS (https://greensock.com/gsap/) -->
	<script src="assets/vendor/gsap/ScrollToPlugin.min.js"></script>
	<!-- GSAP ScrollToPlugin JS (https://greensock.com/scrolltoplugin/) -->
	<script src="assets/vendor/gsap/ScrollTrigger.min.js"></script>
	<!-- GSAP ScrollTrigger JS (https://greensock.com/scrolltrigger/) -->

	<script src="assets/vendor/smooth-scrollbar.js"></script>
	<!-- Smooth Scrollbar JS (https://github.com/idiotWu/smooth-scrollbar/) -->
	<script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script> <!-- Swiper JS (https://swiperjs.com/) -->
	<script src="assets/vendor/isotope/imagesloaded.pkgd.min.js"></script>
	<!-- imagesloaded JS (more info: https://imagesloaded.desandro.com/) -->
	<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
	<script src="assets/vendor/isotope/packery-mode.pkgd.min.js"></script>
	<!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
	<script src="assets/vendor/lightgallery/js/lightgallery-all.min.js"></script>
	<!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
	<script src="assets/vendor/jquery.mousewheel.min.js"></script>
	<!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->

	<!-- Template master JS -->
	<script src="assets/js/theme.js"></script>

	<script>
		function myFunction() {
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTable");
			tr = table.getElementsByTagName("tr");
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
	</script>

	<script>
		let body = document.querySelector(".containerTable-body");
		//   body.innerHTML = "";
		for (let i = 0; i < 5; i++) {
			//   body.innerHTML += `

			// 	  `;

		}

	</script>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<script>

		var_mine = 0;
		$.getJSON('https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=usd&days=7', function (data) {
			// JSON result in `data` variable
			// console.log(data.prices)
			data.prices.forEach(myFunction__);
		});

		const prices_btc = [];
		const times_btc = [];


		function myFunction__(item) {

			// console.log(item[0])
			// console.log(item[1])
			// console.log("-")
			// times_btc.push(var_mine);
			// var_mine++;
			times_btc.push(new Date(item[0]));
			//  prices_btc.push(item[1]);

			// var_mine++;
			// times_btc.push(item[0]);
			prices_btc.push(parseFloat(item[1]).toFixed(2));
		}

		// setInterval(function(){
		//     console.log(times_btc)
		// console.log(prices_btc)
		//     ;}, 5000 );

		// var canvas = document.getElementById('myChart_1');
		// var ctx = canvas.getContext('2d');
		// var gradient = ctx.createLinearGradient(0, 0, 0, 500);
		// gradient.addColorStop(0, 'rgba(255,255,255, 1) ');   
		// gradient.addColorStop(1, 'rgba(1,1,8,0)');


		var xValues = [];
		// myChart_1


		const months = [
			'Jan',
			'Feb',
			'Mar',
			'Apr',
			'May',
			'Jun',
			'Jul',
			'Aug',
			'Sep',
			'Oct',
			'Nov',
			'Dec'
		]


		function checkTime(i) {
			if (i < 10) { i = "0" + i };  // add zero in front of numbers < 10
			return i;
		}

		// CHART INITIALIZATION (example taken from https://www.chartjs.org/docs/latest/getting-started/)
		var ctx = document.getElementById('myChart_2').getContext('2d');


		var gradient = ctx.createLinearGradient(0, 0, 0, 200);
		gradient.addColorStop(0, 'rgba(15, 15, 15, 0.4)');
		gradient.addColorStop(1, 'rgba(255, 255, 255,0)');



		var myChart = new Chart(ctx, {
			// The type of chart we want to create
			type: 'line',

			// The data for our dataset
			data: {
				labels: [],
				datasets: [{
					// label: 'My First dataset',
					// backgroundColor: 'rgb(255, 99, 132)',
					borderColor: 'rgb(85, 85, 85,0.45)',
					data: [],
					pointRadius: 0,
					fill: true,
					backgroundColor: gradient,
					//   pointHoverRadius : 0,
				}]
			},

			// Configuration options go here
			options: {
				tooltips: {
					enabled: false,
					mode: 'index',
					intersect: false,
				},

				hover: {
					mode: 'nearest',
					intersect: false,
					onHover: function (e, item) {
						if (item.length) {
							const data = item[0]._chart.config.data.datasets[0].data[item[0]._index];
							const time__ = item[0]._chart.config.data.labels[item[0]._index];
							console.log(item, data);

							document.getElementById("price_value").innerHTML = months[time__.getMonth()] + " " + time__.getDate() + ", " + time__.getFullYear() + ", " + checkTime(time__.getHours()) + ":" + checkTime(time__.getMinutes());  // "Sep 8, 2022, 13:32"
							document.getElementById("price_value_").innerHTML = "$" + data;
							// alert(data)
						}
					}
				},
				scales: {
					yAxes: [{
						// scaleLineColor: "rgba(0,0,0,0)",
						ticks: {
							display: false
						},
						gridLines: {
							drawBorder: false,
							color: "rgba(0, 0, 0, 0)",
						}
					}],
					xAxes: [{

						ticks: {
							display: false
						},
						gridLines: {
							// drawBorder: false,
							display: false,
							color: "rgba(0, 0, 0, 0)",
						}
					}]
				},
				legend: { display: false }
			}
		});




		setTimeout(() => {
			changeData();
		}, 2000);
		// change data onclick
		const changeData = () => {
			// you can access (and change) currently stored data from chart.data.datasets[0].data
			//     console.log(times_btc)
			// console.log(prices_btc)

			myChart.data.datasets[0].data = prices_btc;
			myChart.data.labels = times_btc;
			// rerender the chart by calling update()
			myChart.update();
		};

		const randomArray = (size) => {
			const randomArray = [];
			for (let i = 0; i < size; i++) {
				randomArray.push(Math.random() * 45);
			}
			return randomArray;
		};









		new Chart("myChart", {
			type: "line",
			data: {
				labels: xValues,
				datasets: [{
					data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
					borderColor: "green",
					fill: false,
					pointRadius: 0,
					pointHoverRadius: 0,
				}]
			},
			options: {

				scales: {
					yAxes: [{
						ticks: {
							display: false
						}
					}],
					xAxes: [{
						ticks: {
							display: false
						}
					}]
				},
				legend: { display: false }
			}
		});

		new Chart("myChart1", {
			type: "line",
			data: {
				labels: xValues,
				datasets: [{
					data: [860, 1140, 1060, 1060, 1070, 110, 1330, 210, 780, 2478],
					borderColor: "gray",
					fill: false,
					pointRadius: 0,
					pointHoverRadius: 0,
				}]
			},
			options: {

				scales: {
					yAxes: [{
						ticks: {
							display: false
						}
					}],
					xAxes: [{
						ticks: {
							display: false
						}
					}]
				},
				legend: { display: false }
			}
		});















		/*=============== SHOW MODAL ===============*/
		const showModal = (openButton, modalContent) => {
			const openBtn = document.getElementById(openButton),
				modalContainer = document.getElementById(modalContent)

			if (openBtn && modalContainer) {
				openBtn.addEventListener('click', () => {
					modalContainer.classList.add('show-modal')
				})
			}
		}




		const showModal_deposit = (openButton, modalContent) => {
			// closeModal();
			const openBtn = document.getElementById(openButton),
				modalContainer = document.getElementById(modalContent)

			if (openBtn && modalContainer) {
				openBtn.addEventListener('click', () => {
					modalContainer.classList.add('show-modal')
				})
			}

		}
		showModal('open-modal', 'modal-container')
		showModal('open-modal2', 'modal-container2')

		showModal_deposit('open-modal-deposit', 'modal-Deposit')


		/*=============== CLOSE MODAL ===============*/
		const closeBtn = document.querySelectorAll('.close-modal')

		function closeModal() {
			const modalContainer = document.getElementById('modal-container')
			const modalContainer2 = document.getElementById('modal-container2')

			modalContainer.classList.remove('show-modal')
			modalContainer2.classList.remove('show-modal')


			const modalDeposit = document.getElementById('modal-Deposit')
			modalDeposit.classList.remove('show-modal')

		}

		closeBtn.forEach(c => c.addEventListener('click', closeModal))
	</script>



	<script>


		function Earnara_Tokens_Rewards() {

			var check_earnara = document.getElementById("slideThree");
			var check_earnara_multi = document.getElementById("slideThree1");

			// alert(check_earnara_multi.checked)

			if (check_earnara_multi.checked === true) {
				check_earnara.checked = true;
				alert("Multi Rewards Option Activated!")
			}

		}


		function MultiTokens_Rewards() {
			var x = document.getElementById("DIV_MultiToken");
			var check_earnara = document.getElementById("slideThree");



			//   alert(x.style.visibility)
			if (x.style.visibility === "hidden") {
				x.style.visibility = "visible";
				x.style.opacity = 1;
				check_earnara.checked = false
				x.style.position = "relative";
				x.style.height = "150px";
			} else {
				x.style.position = "absolute";


				x.style.visibility = "hidden";
				// x.style.transition = "visibility 0s, opacity 0.5s linear";
				x.style.opacity = 0;
			}
		}





		function validate_network() {
			var ddl = document.getElementById("meun_network");
			var selectedValue = ddl.options[ddl.selectedIndex].value;

			var div_network = document.getElementById("div_network");
			var small_modal1 = document.getElementById("small_modal1");
			var small_modal2 = document.getElementById("small_modal2");

			small_modal1
			var x = document.getElementById("DIV_MultiToken");
			//  alert(selectedValue)
			if (selectedValue != "") {
				div_network.style.display = "none";
				small_modal1.style.display = "block";
				small_modal2.style.display = "block";
			}
		}
















		var $cell = $('.card');

		//open and close card when clicked on card
		$cell.find('.js-expander').click(function () {

			var $thisCell = $(this).closest('.card');

			if ($thisCell.hasClass('is-collapsed')) {
				$cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');
				$thisCell.removeClass('is-collapsed').addClass('is-expanded');

				if ($cell.not($thisCell).hasClass('is-inactive')) {
					//do nothing
				} else {
					$cell.not($thisCell).addClass('is-inactive');
				}

			} else {
				$thisCell.removeClass('is-expanded').addClass('is-collapsed');
				$cell.not($thisCell).removeClass('is-inactive');
			}
		});

		//close card when click on cross
		$cell.find('.js-collapser').click(function () {

			var $thisCell = $(this).closest('.card');

			$thisCell.removeClass('is-expanded').addClass('is-collapsed');
			$cell.not($thisCell).removeClass('is-inactive');

		});
	</script>
</body>

</html>