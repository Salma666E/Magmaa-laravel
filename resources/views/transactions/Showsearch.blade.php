<!DOCTYPE html>
<html lang="en">
<head>
	<title>show words</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('DisplayWords/images/icons/favicon.ico')}}">
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
                             المده
							</div>
                            <div class="cell">
								الوظيفه 
							</div>
                            <div class="cell">
								رقم اللجنه 
							</div>
							<div class="cell">
								رقم الموظف
							</div>
							
						</div>
					@foreach($users as $user)
  
                        <div class="row">
							<div class="cell" data-title="Full Name">
							{{$user->pivot->transactions}}
							

                            </div>
                            <div class="cell" data-title="Age">
							{{$user->pivot->job}}

							</div>
                            <div class="cell" data-title="Age">
							@foreach($commissions  as $c)
                                  @if( $c->id==$user->pivot->commission_id)
                                  {{$c->name}}
                                  @endif
                            @endforeach
							
							</div>
                            <div class="cell" data-title="Age">
							@foreach($empl  as $us)
                                    @if($us->id == $user->pivot->user_id)
                        
                                   {{$us->name}}
                                    @endif
                            @endforeach
							
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


