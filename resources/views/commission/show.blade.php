<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>regesteration</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{ asset('regesteration/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">

                    <h2 class="title">تسجيل اللجنه</h2>
                    
                </div>
                <div class="card-body">
                <a class="btn btn-primary btn-sm float-right"  style="background-color:maroon" href="/commission/showdata"> عرض اللجان </a>
                <div class="col-md-12">

      <form action="{{url('/commission/showdata' )}} "method="post" enctype="multipart/form-data">  
      {{csrf_field()}}
      
        <div class="form-row">
                      <div class="value">
        <label for="fname">الاسم</label>
        </div>
        <input type="text"class="input--style-6" id="name" name="name" value="{{old('name')}}" >
        </div>
        <div class="form-row">
                      <div class="value">
        <label for="dep_id">الوصف</label>
        </div>
        <input type="text" class="input--style-6" id="description" name="description"  value="{{old('description')}}">
        </div>
        <div class="form-row">
                      <div class="value">
        <label for="dep_id">سنه الانشاء</label>
        </div>
        <input type="text" class="input--style-6" id="year" name="year"  value="{{old('year')}}">
       </div>
        
        <input class="btn btn-green"  style="background-color:maroon" type="submit" value="ادخل"> </input>
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
