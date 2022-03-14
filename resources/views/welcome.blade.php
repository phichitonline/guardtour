@php
	session_start();
	session_destroy();
@endphp

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
<!-- <script>
	document.write('<link rel="stylesheet" href="css/style.css?cache=' + new Date().getTime() + '">')
	document.write('<link rel="stylesheet" href="css/style11.css?cache=' + new Date().getTime() + '">')
</script> -->
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
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
			<a href="{{ url('/') }}">รปภ. GuardTour</a>
			</div>
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
            <div class="clearfix"><br> </div>
            <form method="get" action="{{ url("/") }}/home" name="loginform" id="loginform">
                <input class="form-control" type="hidden" id="userId" name="userId">
                <input class="form-control" type="hidden" id="decodedIDToken2" name="decodedIDToken2">
                <p class="text-center text-danger">กรุณารอสักครู่...</p>
            </form>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //Address -->
</div>

<script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>

<script>

    //document.loginform.submit();

    async function main() {
        liff.ready.then(() => {
            // document.getElementById("isLoggedIn").append(liff.isLoggedIn())
            if (liff.isLoggedIn()) {
                getUserProfile()
            } else {
                liff.login()
            }
        })
        await liff.init({ liffId: "1654103357-Z1PN7mPB" })
    }
    main()

    function submitform() {
        setTimeout(function () {
            document.forms["loginform"].submit();
        }, 100);
    }

    async function getUserProfile() {
        const profile = await liff.getProfile()
        document.getElementById("pictureUrl").src = profile.pictureUrl
        document.getElementById("displayName").append(profile.displayName)
        document.getElementById("userId").append(profile.userId)
        $('#displayName').val(profile.displayName);
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
