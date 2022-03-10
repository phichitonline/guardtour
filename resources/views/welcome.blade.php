@extends('layouts.theme')

@section('header_script')

@endsection

@section('content')

<!-- banner -->
	<div class="banner-silder">
			<div class="callbacks_container">

				<ul class="rslides callbacks callbacks1" id="slider4">

					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h3>แพทย์เฉพาะทางสาขาหลัก</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>บริการอุบัติเหตุและฉุกเฉิน</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>ใส่ใจดูแลอย่างมีคุณภาพ</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top3">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>เชี่ยวชาญด้านการแพทย์</h3>
								</div>
							</div>
						</div>
					</li>

				</ul>

			</div>
			<div class="clearfix"> </div>
      </div>
<!-- //banner -->

<!-- breadcrumbs -->
{{-- <div class="w3l_agileits_breadcrumbs">
	<div class="container">
		 <div class="w3l_agileits_breadcrumbs_inner">
			 <ul>
				 <li><a href="{{ url('/') }}">Home</a><span>«</span></li>
				 <li><img id="pictureUrl" width="50"></li>
				 <li><h5 id="displayName"> </h5></li>
				 (<li><h5 id="statusMessage"> </h5></li>)
				 </ul>
		 </div>
	 </div>
 </div>		 --}}
 <!-- //breadcrumbs -->

<!-- banner-bottom -->
<div class="w3l_agileits_breadcrumbs">
<div class="container">
	<div class="bnr-btm-grids-agileits">
		<div class="media-left response-text-left">
			<img class="media-object" id="pictureUrl">
		</div>
		<div class="bnr-btm-info">
			<h3 id="displayName"> </h3>
			<p id="decodedIDToken"> </p>
			{{-- <p id="statusMessage"> </p> --}}
		</div>
		<div class="clearfix"> </div>
	</div>
{{--
	<div class="bnr-btm-grids-agileits">
		<div class="bnr-btm-icon">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</div>
		<div class="bnr-btm-info">
			<h3>E-mail</h3>
			<p id="decodedIDToken"> </p>
		</div>
		<div class="clearfix"> </div>
	</div>

	<div class="bnr-btm-grids-agileits">
		<div class="bnr-btm-icon">
			<i class="fa fa-mobile" aria-hidden="true"></i>
		</div>
		<div class="bnr-btm-info">
			<h3>โทรศัพท์</h3>
			<p>061-9921666</p>
		</div>
		<div class="clearfix"> </div>
	</div> --}}

	<div class="clearfix"></div>
</div>
</div>
<!-- //banner-bottom -->



<!-- contact -->
<div class="contact w3-agileits">
		<!-- Address -->
		<div class="container">
			<div class="w3agile_footer_grid">
				<div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<h4>โปรแกรมพัสดุครุภัณฑ์</h4>
				</div>
				<div class="w3agile_footer_grid_left" onclick="openWindowRMCOnline()">
					<div class="w3agile_footer_grid_left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<h4>ศูนย์เครื่องมือแพทย์</h4>
				</div>
				<div class="w3agile_footer_grid_left" onclick="openWindowRoomsys()">
					<div class="w3agile_footer_grid_left1">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<h4>ตารางห้องประชุม</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //Address -->
	</div>

@endsection

@section('liff_script')

<script>

function openWindowRoomsys() {
        liff.openWindow({
          url: "https://tphcp.go.th/roomsys_app.php",
          external: true
        })
      }

function openWindowRMCOnline() {
        liff.openWindow({
          url: "https://api.tphcp.go.th/rmconline",
          external: true
        })
      }


// async function getUserProfile() {
// 		const profile = await liff.getProfile()
// 		document.getElementById("pictureUrl").src = profile.pictureUrl
// 		// document.getElementById("statusMessage").append(profile.statusMessage)
// 		document.getElementById("displayName").append(profile.displayName)
// 		document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
// 		$('#displayName').val(profile.displayName);
// 		$('#displayEmail').val(liff.getDecodedIDToken().email);

// 	  }
</script>

@endsection
