<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Genetal Meeting</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('Gmeeting/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		
		<!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('Gmeeting/css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>

	<body>
 
		<div class="wrapper" >
			<div class="inner">
      <form action="{{url('meeting/generalmeetingdisplay' )}} "method="post" >  
      {{csrf_field()}}
        <a href="/AdminHome" class="btn btn-danger float-left"> الرئيسيه<a>
					<h3>المحضر</h3>
						<div class="form-wrapper">
							<label for="">رقم الجلسه</label>
							<input type="text" class="form-control" id="" name="session_num" value="{{old('session_num')}}">
						</div>
					
					<div class="form-wrapper">
						<label for="">رقم المقرر </label>
						<input type="text" class="form-control"  id="course_num" name="course_num"  value="{{old('course_num')}}">
					</div>
					<div class="form-wrapper">
						<label for="">التاريخ</label>
            <input class="form-control" type="date" name="date">
					</div>
					<!-- <div class="form-wrapper">
          <div class="value">
        <select name="commission_id" class="mdb-select md-form colorful-select dropdown-primary" >
       
       @foreach($commissions as $Commissions)
      <option value="{{$Commissions->id}}" id="{{$Commissions->id}}" name="{{$Commissions->id}}">{{$Commissions->name}}</option>
                                       
        @endforeach
                                        
       </select>
        </div>
        <label for="fname">رقم اللجنه</label>
        </div> -->
        <a href="generalmeetingdisplay" class="btn btn-danger float-right"> عرض المحاضر<a>
          <input class="btn btn-danger float-right"  type="submit" value=" تسجيل الحضور">
					</div>
        <!-- submit to meeting/Absence--->
       
         </input>
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
			</div>
		</div>
		
	</body>
</html>

