@extends('layouts.theme')

@section('header_script')

@endsection

@section('content')

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
					<div class="w3agile_footer_grid_left1" id="btnScanCode" onclick="scanCode()">
						<span class="fa fa-camera" aria-hidden="true"></span>
					</div>
					<h4>สแกนจุดตรวจ</h4>

                        <form id="myform" action="{{route('timetour.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="userId" id="userId">
    						<input type="text" name="scanCode" id="scanCode" required>
    						<input type="text" name="gps_stamp" id="locationpoint" required>
    						<input type="submit" value=" ยืนยัน ">
    					</form>
    					<div class="clearfix">
                            <br>
                            <button type="button" class="btn btn-primary" onclick="getLocation()">อ่านพิกัด</button>
                            <br><br>
                        </div>

				</div>
				<div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<span class="fa fa-solid fa-list" aria-hidden="true"></span>
					</div>
					<h4>ตรวจสอบเวลา</h4>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //Address -->
	</div>



@endsection

@section('liff_script')

<script>

async function getUserProfile() {
		const profile = await liff.getProfile()
		document.getElementById("pictureUrl").src = profile.pictureUrl
// 		document.getElementById("statusMessage").append(profile.statusMessage)
		document.getElementById("displayName").append(profile.displayName)
        document.getElementById("userId").append(profile.userId)
// 		document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
// 		$('#displayName').val(profile.displayName);
        $('#userId').val(profile.userId);
// 		$('#displayEmail').val(liff.getDecodedIDToken().email);

	  }
</script>

<script>
    var x = document.getElementById("locationPoint");

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
        x.value = position.coords.latitude + "," + position.coords.longitude;
    }

</script>

@endsection
