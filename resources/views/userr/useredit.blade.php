
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
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <a class="btn btn-primary float-right"  style="background-color:maroon" href="{{url('userAdminShow')}}"> عرض الموظفين </a>
                </div>
                <div class="card-body">

                <div class="col-md-12">
                    <form action="{{url('/edit'.$users->id )}}"  method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
                    
                        <div class="form-row">
                            
                            <div class="value">
                                <input class="input--style-6" type="text" name="name"  value="{{$users->name}}">
                            </div>
                            <div class="name">الاسم بالكامل</div>
                        </div>
                        <div class="form-row">
                            
                        <div class="value">
                                <input class="input--style-6"  name="dob"  value="{{$users->dob}}">
                            </div>
                            <div class="name">تاريخ الميلاد</div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <input class="input--style-6" type="text" name="address"  value="{{$users->address}}">
                            </div>
                            <div class="name">العنوان</div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <input class="input--style-6" type="text" name="phone"  value="{{$users->phone}}">
                            </div>
                            <div class="name">رقم المحمول </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <select name="job" id="job" class="custom-select"  value="{{$users->job}}">
                                     <option value="محرر"> محرر </option>
                                     <option value="رئيس لجنه" >رئيس لجنه</option>
                                    <option value="عضو">عضو</option>
                                </select>
                            </div>
                            <div class="name">الوظيفه </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                           
                                <select name="commision_id" class="custom-select">
                                @foreach($commissions as $Commission)
                                     <option value="{{$Commission->id}} ">  {{$Commission->name}}</option>
                                     @endforeach
                                </select>
                              
                            </div>
                            <div class="name">اللجنه </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email"   value="{{$users->email}}"placeholder="example@email.com">
                                </div>
                            </div>
                            <div class="name">البريد الالكترونى</div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="password" name="password"  value="{{$users->password}}" >
                                </div>
                            </div>
                            <div class="name">الرقم السرى</div>
                        </div>
                        
                        <div   class="form-row">
                            
                            <div    class="cvv">
                            <input type="file" name="cv"   value="{{$users->cv}}">
                             <input name="cv"   value="{{$users->cv}}">
                            </div>
                            <div class="cv">cv </div>
                        </div>

                           <div   hidden class="form-row">
                            <div class="value">
                             <div class="name"  > النوع </div>
                             <input  id="gender" name="gender" value="{{$users->gender}}">
                                <!-- <label for="male">ذكر</label>
                              <input type="radio" id="female" name="gender" value="female">
                                 <label for="female">انثى</label> -->
                              
                                
                            </div>
                            </div>
                            
                           
                            
                            
                            
                        
                       
                    <input class="btn btn-green"  style="background-color:maroon" type="submit" value="ارسال"> </input>
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
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{public_path('regesteration/vendor/jquery/jquery.min.js')}}"></script>


    <!-- Main JS-->
    <script src="{{public_path('regesteration/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
               
                    
                   
           
     