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
			
			<a href="/UserHome" class="btn btn-primary btn-bg float-right mb-2" aria-controls="list" role="tab" data-toggle="tab"><i class="fa fa-list-alt"></i>الرئيسيه</a>
					<div class="table">

						<div class="row header">
							<div class="cell">
								الوصف
							</div>
							<div class="cell">
							تاريخ الانشاء
							</div>
							<div class="cell">
								اسم اللجنه
							</div>
							
						</div>
         @foreach($commissions as $Commissions)
                        <div class="row">
							<div class="cell" data-title="Full Name">
                            {{$Commissions->description}}
                            </div>
						<div class="cell" >
						   {{$Commissions->year}}
						</div>
                            <div class="cell" data-title="Age">

                            {{$Commissions->name}}
							
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

<!-- done
@foreach( $commissions as $Commissions)
<p>{{$Commissions->name}}</p>
{{$Commissions->description}}
<form action="{{url ('/commission/deleteco' .$Commissions->id )}}">

<input class="btn btn-block btn-success"  style="margin-top:10px" type="submit" value="delete"> </button>

</form>

@endforeach
 -->

