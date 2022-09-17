<?php

$usercookie='';
$passwordcookie='';
$set_remember='';
if(isset($_COOKIE['usercookie']) && isset($_COOKIE['passwordcookie'])){
	$usercookie = $_COOKIE['usercookie'];
	$passwordcookie = $_COOKIE['passwordcookie'];
	$set_remember = "checked='checked'";
}


?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Crypto & Forex Trade, Robocfx, Investment.">
    <meta name="keywords" content="Crypto Trade, Robo CFX, Investment">
    <meta name="author" content="ROBOCFX">
    <title>Login</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="../images/robo.svg">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
	
    
	<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
	
	<meta property="og:title" content="Robo CFX Login" />
	<meta property="og:type" content="Robo CFX Login" />
	<meta property="og:description" content="Robo CFX robotic auto trade in Crypto & Forex without any previous experience & less risk of losing their purchase.">
	<meta property="og:url" content="https://robocfx.com/member/login.php" />
	<meta property="og:image" content="https://robocfx.com/images/robo.svg" />
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@Robo CFX">

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <div class="auth-wrapper auth-cover">
            <div class="auth-inner row m-0">
              <!-- Brand logo--><a class="brand-logo" href=".././"><img src="../images/robo.png" style="width:300px; height:100px;" class="transition" alt="Robo CFX"></a>
              <!-- /Brand logo-->
              <!-- Left Text-->
              <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/pages/login-v2.svg" alt="Login V2"/></div>
              </div>
              <!-- /Left Text-->
              <!-- Login-->
              <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                  <h2 class="card-title fw-bold mb-1">Welcome to Robo CFX! 👋</h2>
                  <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                  <form class="auth-login-form mt-2" id="loginUser" method="POST">
					<div class="alert alert-success px-2"><p><?php if(isset($_SESSION['LecoMember'])){
						echo $_SESSION['LecoMember'];
					}else{
						echo $_SESSION['LecoMember'] = "You are logged out. Please login again.";
					} ?></p></div>
                    <div class="mb-1">
                      <label class="form-label" for="login-email">User ID:</label>
                      <input class="form-control" type="text" name="user_id" id="user_id" placeholder="User ID" value="<?php echo $usercookie; ?>" aria-describedby="login-email" autofocus="" tabindex="1"/>
                    </div>
                    <div class="mb-1">
                      <div class="d-flex justify-content-between">
                        <label class="form-label" for="login-password">Password</label><a href="javascript:void()" id="ForgotPass"><small>Forgot Password?</small></a>
                      </div>
                      <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" name="password" id="password" type="password" value="<?php echo $passwordcookie; ?>" placeholder="············" aria-describedby="login-password" tabindex="2"/><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                      </div>
                    </div>
                    <div class="mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember" tabindex="3" <?php echo $set_remember; ?>/>
                        <label class="form-check-label" for="remember-me"> Remember Me</label>
                      </div>
                    </div>
					<div class="text-center" id="submit"></div>
                    <button class="btn btn-primary w-100" type="submit" name="submit" tabindex="4"  value="1">Sign in</button>
					<h3 class="text-center" id="msg"></h3>
                  </form>
                  <p class="text-center mt-2"><span>New on our platform?</span><a href="register.php"><span>&nbsp;Create an account</span></a></p>
                  <div class="divider my-2">
                    <div class="divider-text">or</div>
                  </div>
                  <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="#"><i data-feather="twitter"></i></a><a class="btn btn-google" href="#"><i data-feather="mail"></i></a><a class="btn btn-github" href="#"><i data-feather="github"></i></a></div>
                </div>
              </div>
              <!-- /Login-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->

	<script src="js/jquery.min.js"></script>
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/auth-login.js"></script>
	<script src="js/main.js"></script>
    <!-- END: Page JS-->
   
	<script>
		$("#ForgotPass").on("click", function(e){
			e.preventDefault();
			$('.alert').hide();
			//$("#user_id").css("border",'');
			//$("#submit").html("");
			
			let user_id=$("#user_id").val();
			
			if(user_id!=''){
					$.ajax({
						method:"POST",
						url:'../php_files/forgot_pass.php',
						data:{userdf:user_id},
						success:function(response){
						$('.alert').hide();
						console.log(response);
						var res = response;
						if(res.hasOwnProperty('success')){
							$('#loginUser').append('<div class="alert alert-success">'+res.success+'</div>');
						}else if(res.hasOwnProperty('error')){
							$('#loginUser').append('<div class="alert alert-danger">'+res.error+'</div>');
						}
						}
						});
					}else{
						$("#user_id").css("border",'2px solid red');
						$("#submit").html("<h3 class='alert alert-warning'>Submit Your User ID</h3>");
					}
				});
    
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/auth-login-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 18:43:44 GMT -->
</html>