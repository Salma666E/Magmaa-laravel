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
    <title>Insert Arabic Words</title>

    <!-- Icons font CSS-->
    <link href="{{asset('Insert/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('Insert/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('Insert/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('Insert/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('Insert/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                <p align="right">
                    <a class="btn btn-sm"  style="background-color:black" href="../AdminViews/ArabicWordShow"> عرض الكلمات </a>
                  </p>
                    <h2 class="title">ادخل الكلمه</h2>
                    

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
      <form action="{{url('arabicword/display' )}} "method="post" >  
      {{csrf_field()}}
          <div class="input-group">
      <label for="id"></label>
        <input hidden  type="text" class="input--style-2"  id="meeting_id" name="meeting_id"  value="{{$meetings}}">
</div>
 <div class="input-group">
        <label for="dep_id">الكلمه بالعربى </label>
        <input type="text" class="input--style-2" id="arabic_word" name="arabic_word"  value="{{old('arabic_word')}}">

</div>   
<div class="input-group">
        <label for="dep_id">المعنى</label>
        <input type="text" class="input--style-2" id="terms" name="terms"  value="{{old('terms')}}">
</div>
<div class="input-group">
        <label for="fname">وصف</label>
        <input type="text" class="input--style-2"id="definition" name="definition" value="{{old('definition')}}" >
</div>
<div class="input-group">
<label for="commission"></label>
        <input hidden  type="text" class="input--style-2"  id="commission" name="commission"  value="العربيه">
        <input class="btn btn-green"   style="background-color:black"type="submit" value="التالى"> </inpute>
     </div>
      </form>
   
			</div>
            </div>
        </div>
    </div>
  

    <!-- Jquery JS-->
    <script src="{{public_path('Insert/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{public_path('Insert/vendor/select2/select2.min.js')}}"></script>
    <script src="{{public_path('Insert/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{public_path('Insert/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{public_path('Insert/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->