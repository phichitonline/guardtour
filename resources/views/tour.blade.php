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
					<div class="w3agile_footer_grid_left1">
						<span class="fa fa-camera" aria-hidden="true"></span>
					</div>
					<h4>สแกนจุดตรวจ</h4>

                        <form id="myform" action="{{route('timetour.store')}}" method="POST">
                            @csrf
                            <input type="text" name="userId" id="userId">
    						<input type="text" name="scanCode" id="scanCode">
    						<input type="text" name="gps_stamp" id="gps_stamp" value="testxxxx">
    						<input type="submit" value=" ยืนยัน ">
    					</form>
    					<div class="clearfix"><br> </div>

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
// 		$('#displayEmail').val(liff.getDecodedIDToken().email);

	  }
</script>

@endsection
