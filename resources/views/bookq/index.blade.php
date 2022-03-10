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
									
				<li>สำหรับเจ้าหน้าที่</li>
				</ul>
		</div>
	</div>
</div>		
<!-- //breadcrumbs -->

<!-- blog -->
<div class="blog">
    <!-- container -->
    <div class="container">
    
        <div class="col-md-4 blog-top-right-grid">
            <div class="Categories move-w3ls">
                <h3>เมนู</h3>
                <ul class="marked-list offs1">
                    <li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">รายชื่อจองออนไลน์รอยืนยัน</a></li>
                    <li><span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">รายการผู้รับบริการรายวัน</a></li>                          
                </ul>
            </div>
        </div>
        <div class="col-md-8 blog-top-left-grid">
            <div class="left-blog left-single">
                <div class="blog-left">
                    <div class="single-left-left">
                        <p>รายชื่อ <a>ผู้รับบริการจองออนไลน์</a></p>
                        {{-- <img src="images/b1.jpg" alt="" /> --}}
                    </div>
                </div>
                <!---728x90--->
                <div class="response">

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th>วันที่ - เวลาจองบริการ</th>
                            <th>ชื่อ - นามสกุล</th>
                            <th>HN</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($booklist as $data)
                            <tr>
                                <td>{{ $data->que_date }} {{ $data->que_time }}</td>
                                <td>{{ $data->pname }}</td>
                                <td>{{ $data->hn }}</td>
                                <td>{{ $data->tel }}</td>
                                <td><button class="btn btn-sm btn-success">ยืนยัน</button></td>
                            </tr>
                            @endforeach

                        </tbody>
                      </table>


                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //container -->
</div>
<!-- //blog -->

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


async function getUserProfile() {
		const profile = await liff.getProfile()
		document.getElementById("pictureUrl").src = profile.pictureUrl
		// document.getElementById("statusMessage").append(profile.statusMessage)
		document.getElementById("displayName").append(profile.displayName)
		document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
		$('#displayName').val(profile.displayName);
		$('#displayEmail').val(liff.getDecodedIDToken().email);

	  }
</script>

@endsection