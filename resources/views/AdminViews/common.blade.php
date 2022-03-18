<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css">
<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
<style>
/*By DjelalEddine@gmail.com*/
body{
background-image:url('../BG2.jpg');
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
#user .avatar {
    width:60px;
	}
#user .avatar > img{
	width:50px;
	height:50px;
	border-radius:10%;
	}
/*Card*/
#user .panel-thumb{
margin:5px auto;
text-align:center;	
	}
#user .panel-thumb .avatar-card {
text-align:center;
height:200px;
margin:auto;
overflow:hidden;
}	
#user .panel-thumb .avatar-card > img{
	max-width:200px;
	max-height:200px;
	}

/* table*/
#user .panel-table{
  animation-duration:3s;
}

#user .panel-table .panel-body .table{
  margin:0px;
}
#user .panel-table .panel-body {
  padding:0px;
}
#user .panel-table .panel-body .table-bordered > thead > tr > th{
  text-align:center;
}
#user .panel-table .panel-footer {
  height:60px;
  padding:0px;
}
</style>
</head>
<body>
@yield('content')
<!-- <div class="panel-footer text-center">
   		<ul class="pagination">
	 	  <li ><a>«</a></li>
		   <li class="active"><a href="#">1</a></li>
           <li ><a href="#">2</a></li>
           <li ><a href="#">3</a></li>
		   <li ><a>»</a></li>
         </ul>
   </div> -->
  </div><!--END panel-table-->
</div>
</div>
</div>
<script>
function filter($state){
var x   = document.getElementsByClassName($state);
var btn = document.getElementById($state);

if (btn.className == "btn"){
    btn.className = btn.dataset.class;
	for (i = 0; i < x.length; i++) {x[i].className = " animated fadeInLeft "+$state;}
	}
	else{ 
	for (i = 0; i < x.length; i++) {x[i].className = " animated fadeOutRight "+$state;}
	 btn.className = "btn";
	}

}
</script>
</body>

</html>
