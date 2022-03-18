<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>

<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center  float-right">
  <!-- Avatar image in top left corner -->
  <img src="person.jpeg" style="width:100%">
  <a href="UserHome" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-x" style='font-size:20px'></i>
    <p>الصفحه الرئيسيه</p>  
  </a>
  <a href="userr/userform" class="w3-bar-item w3-button w3-padding-large w3-hover-black"> 
    <i class="fa fa-user w3-xx" style='font-size:20px'></i>
    <p>تسجيل/عرض موظفين</p>
  </a>
  <a href="commission/show" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xx" style='font-size:20px'></i>
    <p>تسجيل/عرض لجنه</p>
  </a>
  <a href="chooseCommission" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
    <i class="fa fa-envelope w3-xx" style='font-size:20px'></i>
    <p>تسجيل المحاضر</p>
  </a>
  <a href="posts/postform" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
    <i class="fa fa-envelope w3-xx" style='font-size:20px' ></i>
    <p> اعلانات</p>
  </a>
  <a href="../transactions/tranc" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
  <i class='fas fa-biking' style='font-size:20px'></i>
    <p> تنقلات الموظفين</p>
  </a>
 
  <a class="w3-bar-item w3-button w3-padding-large w3-hover-black" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
     <span class="fa fa-sign-out "  style='font-size:20px'></span> <br>
                                        {{ __('خروج') }}
                                    </a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
</form>
</nav>

<!-- Page Content -->
<div class="w3-padding-large" id="main" >
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home"  > 
   <h1 class="w3-jumbo"><span class="w3-hide-small">   اهلا بك {{auth()->user()->name}}  
    </span>
    </h1>
    <img src="img/2.jpg" class="w3-image"width="1500" height="1500" > 
   <!-- <img src="BG.jpg" class="w3-image"width="900" height="900" > -->
  </header>
  </div>

</body>
</html>
