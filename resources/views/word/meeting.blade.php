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

                    <h2 class="title">تسجيل المحضر</h2>
                    
                </div>
                <div class="card-body">
                <a class="btn btn-primary float-right"  style="background-color:maroon" href="/AdminHome">الرئيسيه </a>
                <a class="btn btn-primary btn-sm float-right "  style="background-color:maroon" href="/meeting/display"> عرض المحاضر </a>
                <div class="col-md-12">

      <form action="{{url('meeting/display'  )}} "method="post">  
      {{csrf_field()}}
      <div class="form-row">
       
                      <div class="value">
        <input type="text"class="input--style-6" id="" name="session_num" value="{{old('session_num')}}" >
        </div>
        <label for="fname">رقم الجلسه</label>
        </div>

<!--
        <div class="form-row">
                      <div class="value">
        <input type="text" class="input--style-6" id="id" name="id"  value="{{old('id')}}" >
        </div>
        <label for="id">رقم id</label>
        </div>
-->


        <div class="form-row">
                      <div class="value">
        <input type="text" class="input--style-6" id="course_num" name="course_num"  value="{{old('course_num')}}" >
        </div>
        <label for="dep_id">رقم المقرر</label>
        </div>
        <div class="form-row">
        <div class="value">
            <input class="input--style-6" type="date" name="date">
            </div>
            <label for="date">التاريخ</div>
                        </div>
                      <div class="form-row">
                      <div class="value">
      <!--  <input type="text"class="input--style-6" id="commission_id" name="commission_id"  value="{{old('commision_id')}}">
        </div>
        <label for="fname">رقم اللجنه</label>
        </div>-->
       
                                            
                                            
        <select name="commission_id" class="mdb-select md-form colorful-select dropdown-primary" >
       
         @foreach($commissions as $Commissions)
        <option value="{{$Commissions->id}}" id="{{$Commissions->id}}" name="{{$Commissions->id}}">{{$Commissions->name}}</option>
                                         
          @endforeach
                                          
         </select>
            </div>
             <label for="fname">رقم اللجنه</label>
        </div>
        
        <input class="btn btn-green"  style="background-color:maroon" type="submit" value=" التالى">
        <!-- submit to word/wordform--->
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
