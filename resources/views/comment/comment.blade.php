<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:20px;}

.comment-wrapper .panel-body {
    max-height:650px;
    overflow:auto;
}

.comment-wrapper .media-list .media img {
    width:64px;
    height:64px;
    border:2px solid #e5e7e8;
}

.comment-wrapper .media-list .media {
    border-bottom:1px dashed #efefef;
    margin-bottom:25px;
}


input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchImg.jpg');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 50%;
}

 </style>
 <style>
 /*

RESPONSTABLE 2.0 by jordyvanraaij
  Designed mobile first!

If you like this solution, you might also want to check out the 1.0 version:
  https://gist.github.com/jordyvanraaij/9069194

*/
.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #fff;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167f92;
}
.responstable tr {
  border: 1px solid #d9e4e6;
}
.responstable tr:nth-child(odd) {
  background-color: #eaf3f3;
}
.responstable th {
  display: none;
  border: 1px solid #fff;
  background-color: #167f92;
  color: #fff;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #d9e4e6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #d9e4e6;
  }
}
.responstable th,
.responstable td {
  text-align: left;
  margin: 0.5em 1em;
}
@media (min-width: 480px) {
  .responstable th,
  .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167f92;
}

 </style>
</head>
<body>
<h1>معنى الكلمه</h1>

<table class="responstable">
  
  <tr>
    
    <th data-th="Driver details"><span>First name</span></th>
    <th>الوصف</th>
    <th>معناها</th>
    <th>الكلمه</th>
  </tr>
  
  <tr>
   
    <td>Steve</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Policyholder</td>
  </tr>
  
  <tr>
   
    <td>Steffie</td>
    <td>Foo</td>
    <td>01/01/1978</td>
    <td>Spouse</td>
  </tr>
  
  <tr>
    
    <td>Stan</td>
    <td>Foo</td>
    <td>01/01/1994</td>
    <td>Son</td>
  </tr>
  
  <tr>
    
    <td>Stella</td>
    <td>Foo</td>
    <td>01/01/1992</td>
    <td>Daughter</td>
  </tr>
  
</table>
<!-- ------------------------------------------comment--------------------------------- -->
<div width = 50%>
<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card card-default">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Comment panel
                </div>
                <div class="panel-body">
                <form action="{{url('comment/comment'.auth()->user()->id)}}"  method="POST">
                @csrf
               
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
    </div>
@foreach($comments as $Comment)

                    <div class="clearfix"></div>
                    <hr>
                    <ul class="media-list">
                        <li class="media">
                            <a href="edit" class="pull-left"><!--user information-->
                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                  <!-- <i class="nc-icon nc-calendar-60"></i> :{{$Comment->created_at}}-->
                                    <small class="text-muted">{{$Comment->created_at}}</small>
                                    <br>
                                    @if(auth()->user()->id==$Comment->user->id)
                             <a href="#">edit</a>  
                             
                             @endif    
                                </span>

                                <strong class="text-success">{{$Comment->user_id}}</strong>
                                <p>
                                   {{$Comment->comment}}
                                </p>
                            </div>
                            
                        </li>

@endforeach
                        <!-- <li class="media">
                            <a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">30 min ago</small>
                                </span>
                                <strong class="text-success">@LaurenceCorreil</strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor <a href="#">#ipsumdolor </a>adipiscing elit.
                                </p>
                            </div>
                        </li>



                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">30 min ago</small>
                                </span>
                                <strong class="text-success">@JohnNida</strong>
                                <p>
                                    Lorem ipsum dolor <a href="#">#sitamet</a> sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>