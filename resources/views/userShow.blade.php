<!DOCTYPE html>
<html lang="en">
<head>
	<title>show words</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('DisplayWords/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('DisplayWords/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('DisplayWords/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('DisplayWords/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('DisplayWords/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('DisplayWords/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('DisplayWords/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('DisplayWords/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
                        <div class="cell">
                            ID
							</div>
							<div class="cell">
                            الاسم بالكامل 
							</div>
							<div class="cell">
                            تاريخ الميلاد
							</div>
							<div class="cell">
                            العنوان 
							</div>
                            <div class="cell">
                            رقم المحمول 
							</div>
                            <div class="cell">
                            البريد الالكترونى 
							</div>
                            <div class="cell">
                           cv
							</div>
						</div>
         @foreach( $users as $User)
                        <div class="row">
							<div class="cell" data-title="Full Name">{{$User->id}} </div>
                            <div class="cell" data-title="Age">
                            {{$User->name}}
							</div>
							<div class="cell" data-title="Job Title">
                            {{$User->dob}}
							</div>
                            <div class="cell" data-title="Job Title">
                            {{$User->address}}
							</div>
                            <div class="cell" data-title="Job Title">
                            {{$User->phone}}
							</div>
                            <div class="cell" data-title="Job Title">
                            {{$User->email}}
							</div>
                            <div class="cell" data-title="Job Title">
							<!--<embed src="{{'upload/'.$User->cv}}" width="100" height="100" ></p>-->
							<p><a href="{{url('cv'.$User->id)}}"> cv</a></p>
							</div>
                            </div>
        @endforeach


        </div>
			</div>
		</div>
	</div>
    <!--===============================================================================================-->	
	<script src="{{public_path('DisplayWords/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{public_path('DisplayWords/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{public_path('DisplayWords/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{public_path('DisplayWords/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{public_path('DisplayWords/js/main.js')}}"></script>

</body>
</html>






