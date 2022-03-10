@extends('layouts.theme')

@section('header_script')

@endsection

@section('content')

<!-- banner -->
<div class="inner-banner-agileits-w3layouts">
</div>
<!-- //banner -->
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="{{ url('/') }}">Home</a><span>«</span></li>

				<li>Contact</li>
				</ul>
		</div>
	</div>
</div>		
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="contact w3-agileits">
		<div class="container">
			<h4 class="tittle-w3layouts">ติดต่อเรา</h4>
			<div class="contact-w3lsrow">
				<div class="contact-right">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="ชื่อ-นามสกุล" required="" id="displayName" value="">
						<input type="text" name="Email" placeholder="อีเมล์" required="" id="displayEmail2" value="">
						<input type="text" name="Subject" placeholder="หัวข้อ" required="" autofocus>
						<textarea name="Message" placeholder="ข้อความ" required=""></textarea>
						<input type="submit" value="SEND">
					</form>
					<div><br></div>
				</div>
				<div class="contact-left wthree">
					{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe> --}}
					<div class="timings-w3ls">
						<h5>บริการของเรา</h5>
						<ul>
							<li>อุบัติเหตุและฉุกเฉิน <span>ตลอด 24 ชั่วโมง</span></li>
							<li>ตรวจรักษาโรคทั่วไป <span>วันจันทร์-ศุกร์</span></li>
							<li>รับฝากครรภ์ <span>วันอังคารและพฤหัสบดี</span></li>
							<li>ฉีดวัคซีน <span>วันศุกร์</span></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</div>
	<!-- //contact --> 

@endsection

@section('liff_script')
  
<script>

async function getUserProfile() {
  const profile = await liff.getProfile()
//   document.getElementById("pictureUrl").src = profile.pictureUrl
//   document.getElementById("statusMessage").append(profile.statusMessage)
//   document.getElementById("displayName").append(profile.displayName)
  $('#displayName').val(profile.displayName);
//   document.getElementById("profilename").value = append(profile.displayName);
//   document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
  $('#displayEmail').val(liff.getDecodedIDToken().email);
  $('#displayEmail2').val(liff.getDecodedIDToken().email);
  // document.getElementById("userId").append(profile.userId)
}

</script>

@endsection