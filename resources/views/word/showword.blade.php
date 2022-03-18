
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
								التعريف
							</div>
							<div class="cell">
								الكلمه بالعربيه
							</div>
							<div class="cell">
								الكلمه بالانجليزيه
							</div>
						</div>
                        @foreach( $words as $Word)
                        <div class="row">
							<div class="cell" >
                            {{$Word->definition}}
                            </div>
                            <div class="cell" >
                            {{$Word->arabic_word}}
							</div>
                            <div class="cell">
                            {{$Word->english_word}}
							</div>
                            </div>
        @endforeach


        </div>
			</div>
		

<hr>
	<div width = 50%>
<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card card-default">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <!--Comment -->
                </div>
                <div class="panel-body">
               @if(auth()->user() and auth()->user()->role=='0')
                <form action="{{url('word/word2')}}"  method="POST">
                {{csrf_field()}}
                <input hidden  name="user_id" value="{{auth()->user()->id}}"></input>
               <input hidden value="{{$Word->id}}" name="id"></input>
                    <textarea class="form-control" placeholder="write a comment..." rows="3" name="comment"></textarea>
                    <br>
                    <button type="submit" class="btn btn-info pull-right">Post</button>
                </form>    
                @if($errors->any())   
          <div class="alert alert-danger">
            <ul class="list-group">
            @foreach($errors->all() as $err)
                  <li class="list-group-item">
                  {{$err}}
                  </li>
                @endforeach
            </ul>
          </div>
        @endif
        @endif
    </div>

                    <div class="clearfix"></div>
                    <hr>
                    <ul class="media-list">
                        <li class="media">
                           <!-- <a href="edit" class="pull-left">user information-->
                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                           <!-- </a>-->
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                  <!-- <i class="nc-icon nc-calendar-60"></i> :{{$Comment->created_at}}-->
                                    <small class="text-muted">{{$Comment->created_at}}</small>
                                    <br>
                                    @if( auth()->user()and auth()->user()->id==$Comment->user->id)
                                    <a  href="" onclick="$(this).next('div').slideToggle(1000);return false;">edit</a>
                <div >
                        <form   action="{{url('/word/word/')}}"  method="POST">
                             @csrf
               <input hidden  name="name" value="{{$Comment->id}}"></input>
               <input hidden value="{{$Word->id}}" name="id"></input>
                             <textarea class="form-control" placeholder="write a comment..." rows="3" name="comment"> {{$Comment->comment}}</textarea>
                                <br>
                               <button type="submit" class="btn btn-info pull-right">edit</button>
                          </form>    

                          <form action="{{url ('/comment/deleteco' .$Comment->id )}}">

               <input class="btn btn-info pull-right" type="submit" value="delete"> </button>

                  </form>   
                 </div>
                             
                              
                             @endif    
                                </span>
                                @foreach($users as $user)
@if($user->id==$Comment->user_id)
                                <strong class="text-success">{{$user->name}}</strong>
                                @endif
                                @endforeach
                                
                                <p>
                                   {{$Comment->comment}}
                                </p>
                            </div>
                            
                        </li>

@endforeach
                        <li class="media">
                           <!-- <a href="#" class="pull-left">
                             <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle"> 
                            </a> -->
                            <div class="media-body">
                                <!-- <span class="text-muted pull-right">
                                    <small class="text-muted">30 min ago</small>
                                </span>
                                <strong class="text-success">@LaurenceCorreil</strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor <a href="#">#ipsumdolor </a>adipiscing elit.
                                </p> -->
                            </div>
                        </li>



                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">............</small>
                                </span>
                                <strong class="text-success">@ِAdmin</strong>
                                <p>
                                    Lorem ipsum dolor <a href="#">#sitamet</a> sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
</div>



	</div>
	</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	

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









