@extends('layouts.theme')

@section('header_script')

@endsection

@section('content')

<!-- contact -->
<div class="contact w3-agileits">
		<!-- Address -->
		<div class="container">
			<div class="w3agile_footer_grid">

                <div class="contact-left wthree">
					<div class="timings-w3ls">
						<h5>สำหรับพนักงานรักษาความปลอดภัยเท่านั้น</h5>
					</div>
				</div>

                @if ($guard == 1)
			    <div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<img id="pictureUrl">
					</div>
					<h4 id="displayName"></h4>
				</div>

                @if (Session::has('timetour-saved'))
                <div class="contact-left wthree">
					<div class="timings-w3ls">
						<h5>{{ Session('timetour-saved') }}</h5>
					</div>
				</div>
                @endif

				<div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1" id="btnScanCode" onclick="scanCode()">
						<span class="fa fa-camera" aria-hidden="true"></span>
					</div>

					{{-- <h4>สแกนจุดตรวจ</h4> --}}<br><br>
                    <form id="myform" action="{{route('timetour.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="userId" id="userId">
                        <small class="text-danger">{{ $errors->first('scanCode') }}</small>
                        <input type="text" class="text-center" name="scanCode1" id="scanCode1" value="{{ old('scanCode') }}" placeholder="สแกนจุดตรวจ" disabled>
                </div>
                <div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1" id="btnScanCode" onclick="getLocation()">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>

					{{-- <h4>อ่านพิกัด GPS</h4> --}}<br><br>
                                <input type="hidden" name="scanCode" id="scanCode" value="{{ old('scanCode') }}" required>
                                <small class="text-danger">{{ $errors->first('gps_stamp') }}</small>
                                <input type="text" class="text-center" name="gps_stamp1" id="locationPoint1" value="{{ old('gps_stamp') }}" placeholder="อ่านพิกัด GPS" disabled>
                                <input type="hidden" name="gps_stamp" id="locationPoint" value="{{ old('gps_stamp') }}" required>
                                <input type="submit" value=" ยืนยัน ">
                            </form>
                            <div class="clearfix">
                                <br>
                            </div>

				</div>
				<div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<span class="fa fa-solid fa-list" aria-hidden="true"></span>
					</div>
					<h4>ตรวจสอบเวลา</h4>
				</div>
                @endif

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
    var x1 = document.getElementById("locationPoint1");

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
        x.value = position.coords.latitude + "," + position.coords.longitude;
        x1.value = position.coords.latitude + "," + position.coords.longitude;
    }

</script>

@endsection
