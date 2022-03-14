@extends('layouts.theme')

@section('header_script')

@endsection

@section('content')

<!-- contact -->
<div class="contact w3-agileits">
		<!-- Address -->
		<div class="container">
			<div class="w3agile_footer_grid">

                @if ($guard < 1)
                <div class="contact-left wthree">
					<div class="timings-w3ls">
						<h5>สำหรับพนักงานรักษาความปลอดภัยเท่านั้น</h5>
					</div>
				</div>
                @else
			    <div class="w3agile_footer_grid_left">
					<div class="w3agile_footer_grid_left1">
						<img id="pictureUrl">
					</div>
					<h4 id="displayName"></h4>
				</div>

				<div class="w3agile_footer_grid_left">
                    {{-- <form method="get" action="{{ url("/") }}/home" name="loginform" id="loginform"> --}}
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



@endsection

@section('liff_script')

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

@endsection
