<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Simath - login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body class="sign-in">
	

	<div class="wrapper">		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						
						<div class="col-lg-6" style="margin:auto">
							<div class="login-sec">
											
								<div class="sign_in_sec current" id="tab-1">
									<h3>تسجيل الدخول</h3>
									<form action="{{ url('/post/login') }}" method="POST">
                                        @csrf
                                        <div class="wrong-infos" style="margin-bottom:15px; color:rgb(248, 36, 36); text-decoration:underline; border:1px solid gray; padding:5px;display:none">  
											خطاء في كلمة السر او البريد الالكتروني
										</div>
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="email" placeholder="البريد الالكتروني">
													<i class="fas fa-envelope"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password"  name="password" placeholder="كلمة المرور">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
					
													<a href="forget-password.php" title="">نسيت كلمة المرور ؟</a>
												</div>
											</div>
											<!--
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">	
													<a href="sign-in.php" title="">تسجيل مستخدم جديد</a>
												</div>
											</div>
											-->
											<div class="col-lg-12 no-pdd">
												<button type="submit" name="login_user" value="submit">تسجيل الدخول</button>
											</div>
										</div>
									</form>
									
								</div><!--sign_in_sec end-->
										
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>