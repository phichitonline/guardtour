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

@yield('header_script')

</head>
<body class="bg">
	<!--<div class="overlay overlay-simplegenie">-->
	<!--		<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>-->
	<!--		<nav>-->
	<!--			<ul>-->
	<!--				<li><a href="{{ url('/') }}">Home</a></li>-->

	<!--			</ul>-->
	<!--		</nav>-->
	<!--	</div>-->
		<section class="header-w3ls">
			<!--<button id="trigger-overlay" type="button"><i class="fa fa-home" aria-hidden="true"></i></button>-->
			<button id="trigger-overlay" type="button"><i class="fa fa-home" aria-hidden="true"></i></button>
			<div class="bottons-agileits-w3layouts">
			<!--<a class="page-scroll" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a>.-->
			<!--<a class="page-scroll" href="#modalRegister" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ลงทะเบียน</a>-->
			<a class="page-scroll" href="#" id="btnLogOut" onclick="logOut()"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
			<a href="{{ url('/') }}">รปภ. GuardTour</a>

			</div>
		<h1 id="btnCloseApp"><a href="{{ url('/') }}">GuardTour</a></h1>
		<div class="clearfix"> </div>
		</section>
<!-- //menu -->


<!-- content -->
@yield('content')
<!-- //content -->


<!-- footer -->
	<div class="footer">
		<div class="agileinfo_footer_bottom">
			<div class="container">
				<div class="col-md-3 agileinfo_footer_bottom_grid">

					<!--<form action="#" method="post">-->
					<!--	<input type="text" name="scanCode" placeholder="รหัส" required="" id="scanCode" value="">-->
					<!--	<input type="submit" value=" ยืนยัน ">-->
					<!--</form>-->
					</div>

				</div>
			</div>
		</div>
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
		<!-- <a href="#" id="btnClose" onclick="closed()" class="social-icon-w3-agile rss"> -->
		<a href="#" id="btnClose" onclick="closed()" class="social-icon-w3-agile rss">
			<i class="fa fa-close" aria-hidden="true"></i>
			{{-- <i class="fa fa-sign-out" aria-hidden="true"></i> --}}
		</a>
		<div class="clearfix"></div>
	</div>
</div>
<!--//social-icons-->

<!-- LIFF Script -->

	<!-- <p id="os"><b>OS:</b> </p> -->
	<!-- <p id="language"><b>Language:</b> </p> -->
	<!-- <p id="version"><b>Version:</b> </p> -->
	<!-- <p id="isInClient"><b>isInClient:</b> </p> -->
	<!-- <p id="accessToken"><b>AccessToken:</b> </p> -->
	<!-- <img id="pictureUrl">
	<p id="userId"><b>userId:</b> </p>
	<p id="displayName"><b>displayName:</b> </p>
	<p id="statusMessage"><b>statusMessage:</b> </p>
	<p id="decodedIDToken"><b>email:</b> </p> -->
	<!-- <p id="type"><b>type:</b> </p> -->
	<!-- <p id="viewType"><b>viewType:</b> </p> -->
	<!-- <p id="utouId"><b>utouId:</b> </p> -->
	<!-- <p id="roomId"><b>roomId:</b> </p> -->
	<!-- <p id="groupId"><b>groupId:</b> </p> -->
	<!-- <p id="friendship"><b>isFriendship:</b> </p> -->
	<!-- <p id="scanCode"><b>Code:</b> </p> -->
	<!-- <p id="isLoggedIn"><b>isLoggedIn:</b> </p> -->
	<!-- <p id="universalLink1"><b>Universal Link:</b> </p> -->
	<!-- <p id="universalLink2"><b>Universal Link with Query params:</b> </p> -->
	<!-- <p><a href="path/?param=9">Link to Path</a></p> -->

	<!-- <button id="btnMsg" onclick="sendMsg()">Send Message</button> -->
	<!-- <button id="btnShare" onclick="shareMsg()">Share Target Picker</button> -->
	<!-- <button onclick="openWindow()">Open Window</button> -->
	<!-- <button id="btnScanCode" onclick="scanCode()">Scan Code</button> -->
	<!-- <button id="btnLogOut" onclick="logOut()">Log Out</button> -->
	<!-- <button id="btnClose" onclick="closed()">Close</button> -->

    <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>

    @yield('liff_script')

	<script>
	  function createUniversalLink() {
	  }

	  function closed() {
		liff.closeWindow()
	  }

      function logOut() {
        liff.logout()
        window.location.reload()
      }

      async function scanCode() {
        const result = await liff.scanCode()
        // document.getElementById("scanCode").append(result.value)
		$('#scanCode').val(result.value);
		$('#scanCode1').val(result.value);
      }

      function openWindow() {
        liff.openWindow({
          url: "https://www.tphcp.go.th",
          external: true
        })
      }

	  async function getFriendship() {
		const friend = await liff.getFriendship()
		// document.getElementById("friendship").append(friend.friendFlag)
		if (!friend.friendFlag) {
		  if (confirm("คุณยังไม่ได้เพิ่ม Bot เป็นเพื่อน จะเพิ่มเลยไหม?")) {
			window.location = "https://line.me/R/ti/p/%40357twjwh"
		  }
		}
	  }

	  function getContext() {
		if (liff.getContext() != null) {
		//   document.getElementById("type").append(liff.getContext().type)
		//   document.getElementById("viewType").append(liff.getContext().viewType)
		//   document.getElementById("utouId").append(liff.getContext().utouId)
		//   document.getElementById("roomId").append(liff.getContext().roomId)
		//   document.getElementById("groupId").append(liff.getContext().groupId)
		}
	  }

	//   async function getUserProfile() {
	// 	const profile = await liff.getProfile()
	// 	document.getElementById("pictureUrl").src = profile.pictureUrl
	// 	document.getElementById("statusMessage").append(profile.statusMessage)
	// 	document.getElementById("displayName").append(profile.displayName)
	// 	document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
	// 	$('#displayName').val(profile.displayName);
	// 	$('#displayEmail').val(liff.getDecodedIDToken().email);

	//   }

	  function getEnvironment() {
		// document.getElementById("os").append(liff.getOS())
		// document.getElementById("language").append(liff.getLanguage())
		// document.getElementById("version").append(liff.getVersion())
		// document.getElementById("accessToken").append(liff.getAccessToken())
		// document.getElementById("isInClient").append(liff.isInClient())
		if (liff.isInClient()) {
		  document.getElementById("btnLogOut").style.display = "none"
		  document.getElementById("btnCloseApp").style.display = "none"
		} else {
		  document.getElementById("btnClose").style.display = "none"
		  document.getElementById("btnClose2").style.display = "none"
		  document.getElementById("btnScanCode").style.display = "none"
		//   document.getElementById("btnMsg").style.display = "none"
		}
	  }

	  async function main() {
		liff.ready.then(() => {
		//   document.getElementById("isLoggedIn").append(liff.isLoggedIn())
		  if (liff.isLoggedIn()) {
			getEnvironment()
			getUserProfile()
			getContext()
			getFriendship()
			createUniversalLink()
		  } else {
			liff.login()
		  }
		})
		  await liff.init({ liffId: "1654103357-Z1PN7mPB" })
	  }
	  main()
	</script>

<!-- //LIFF Script -->


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
