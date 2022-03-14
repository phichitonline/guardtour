<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>
<title>CPH-GuardTour</title>
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="โรงพยาบาลสมเด็จพระยุพราชตะพานหิน" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="{{ asset('app-assets/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<!-- menu style sheet -->
<link href="{{ asset('app-assets/css/style11.css') }}" rel="stylesheet">
<link href="{{ asset('app-assets/css/style.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" />  -->
<link rel="stylesheet" href="{{ asset('app-assets/css/font-awesome/4.7.0/css/font-awesome.min.css') }}" />
<!-- //font-awesome icons -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->

<style>
	.footerfixmenu {
	   position: fixed;
	   left: 0;
	   bottom: 0;
	   width: 100%;
	   /* height: 50px; */
	   background-color: red;
	   color: white;
	   text-align: center;
	}


img {
  border-radius: 50%;
}
</style>

</head>
<body class="bg">

		<section class="header-w3ls">
			<button id="trigger-overlay" type="button"><i class="fa fa-home" aria-hidden="true"></i></button>
			<div class="bottons-agileits-w3layouts">
			<a class="page-scroll" href="#" id="btnLogOut" onclick="logOut()"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
			<a href="{{ url('/') }}">รปภ. GuardTour</a>
			</div>
		<h1 id="btnCloseApp"><a href="{{ url('/') }}">GuardTour</a></h1>
		<div class="clearfix"> </div>
		</section>
<!-- //menu -->

<!-- contact -->
<div class="contact w3-agileits">
		<!-- Address -->
		<div class="container">
			<div class="w3agile_footer_grid">

			    <div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<img id="pictureUrl">
					</div>
					<h4 id="displayName"></h4>
				</div>

				<div class="w3agile_footer_grid_left">
                    <form action="{{route('tour')}}" method="GET" name="loginform" id="loginform">
                        @csrf
                        <input type="hidden" name="userId" id="userId">
                        <input type="submit" value=" ยืนยัน ">
                    </form>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //Address -->
	</div>


<!-- footer -->
<div class="footer">
    <div class="agileinfo_footer_bottom1">
        <div class="container">
            <p>© 2022 รพร.ตะพานหิน | By <a href="https://line.me/ti/p/Xu3TXschDY">Dr.GHOST</a></p>
            <div class="clearfix"><br><br> </div>
        </div>
    </div>

</div>
<!-- //footer -->

<!--social-icons-->
<div class="footerfixmenu" id="btnClose"> <!-- ซ่อนแทบเมนูด้านล่างหากไม่ได้ใช้งานบนอุปกรณ์ mobile -->
<div class="social-agileinfo">
    <a href="{{ url('/') }}"  class="social-icon-w3-agile facebook">
        <i class="fa fa-home" aria-hidden="true"></i>
    </a>
    <a href="#" id="btnScanCode" onclick="scanCode()" class="social-icon-w3-agile google-plus">
        <i class="fa fa-camera" aria-hidden="true"></i>
    </a>
    <a href="/timelis" class="social-icon-w3-agile twitter">
        <i class="fa fa-solid fa-list" aria-hidden="true"></i>
    </a>
    <a href="#" id="btnClose" onclick="closed()" class="social-icon-w3-agile rss">
        <i class="fa fa-close" aria-hidden="true"></i>
    </a>
    <div class="clearfix"></div>
</div>
</div>
<!--//social-icons-->

<script>
function submitform() {
        setTimeout(function () {
            document.forms["loginform"].submit();
        }, 1000);
}

async function getUserProfile() {
		const profile = await liff.getProfile()
		document.getElementById("pictureUrl").src = profile.pictureUrl
		document.getElementById("displayName").append(profile.displayName)
        document.getElementById("userId").append(profile.userId)
        $('#userId').val(profile.userId);
        await submitform();
	  }
</script>


<!-- js -->
<script type="text/javascript" src="{{ asset('app-assets/js/jquery-2.2.3.min.js') }}"></script>
<!-- //js -->
<script src="{{ asset('app-assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts.js') }}"></script>

<!--responsiveslides js-->
<script src="{{ asset('app-assets/js/responsiveslides.min.js') }}"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });

						});
			</script>
			<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 3
							  $("#slider3").responsiveSlides({
								auto: true,
								pager:false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });

							});
						  </script>

<!--//responsiveslides js-->
<script src="{{ asset('app-assets/js/SmoothScroll.min.js') }}"></script>
<!--menu script-->
<script type="text/javascript" src="{{ asset('app-assets/js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('app-assets/js/classie.js') }}"></script>
<script src="{{ asset('app-assets/js/demo1.js') }}"></script>
<!--//menu script-->
<!-- banner -->
<script type='text/javascript' src="{{ asset('app-assets/js/jquery.easing.1.3.js') }}"></script>
<!-- //banner -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--js for bootstrap working-->
	<script src="{{ asset('app-assets/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->


</body>
</html>