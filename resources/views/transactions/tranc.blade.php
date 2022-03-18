<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transaction Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('Users_transaction/css/nunito-font.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('Users_transaction/css/style.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image:url({{asset('Users_transaction/images/try.jpg')}}">
		
			
				
				<form class="form-detail" action="{{url('transact')}}" method="POST">
			{{csrf_field()}} 
                <a href="{{url('userAdminShow')}}" class="btn btn-danger">عرض الموظفين</a>
                <a href="/transactions/Showtranc" class="btn btn-danger float-right">عرض تنقلات الموظفين</a>
				<h2>تنقلات الموظفين</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" id="username[]"  class="input-text" placeholder="اسم الموظف" name="username[]" required >
					</div>
					<div class="form-row">
						<input type="text"  id="job" class="input-text" placeholder=" الوظيفه"  name="job">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="date" id="transactions" class="input-text" name="transactions" >
					</div>
					<div class="form-row">
					<select name="commission_id" class="custom-select" style="background-color:gray;color:white ">
                                @foreach($commissions as $Commission)
                                     <option value="{{$Commission->id}} ">  {{$Commission->name}}</option>
                                     @endforeach
                    </select>
					</div>	
				</div>
				
				<div class="form-row-last">
				<input  class="register"  type="submit" value="ارسال"> </input>
				</div>
			</form>
			</div> 
			</div>
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
	
</body>
</html>