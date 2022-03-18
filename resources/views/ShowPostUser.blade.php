<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Educational Theory
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>مجمع اللعة العربية</title>
<meta http-equiv="Content-Type" content="2/text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="2/layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="2/layout/scripts/jquery.min.js"></script>
<!-- Featured Slider  -->
<script type="text/javascript" src="2/layout/scripts/jquery-s3slider.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#featured_slide_").s3Slider({
		timeOut:10000
	});
});
</script>
<!-- / Featured Slider -->
</head>
<body id="top">
<div class="wrapper row1">
  <div id="topnav">
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="2/index.html">مجمع اللغة العربية</a></h1>
      <p></p>
    </div>
    <div class="fl_right">
     
     
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper row3">

  <div id="featured_slide_">
  @foreach( $posts as $Post)
    <ul id="featured_slide_Content">
      
   
      <li class="featured_slide_Image">
     
      <a href="#"><img src="{{'upload/'.$Post->image}}"></a>
     
        <div class="introtext">
        <h2> اخر الاخبار</h2>
          <p> 

          
          
			 
            <p>{!!$Post->activity!!}<p>
           
        
        </div>
      
      </li>
     
     
      <li class="clear featured_slide_Image"><!-- Important - Leave This Empty --></li>
       @endforeach
    </ul>
  
  </div>
 
  <div id="hpage_featured_info" class="clear">
    <ul>
      <li><a href="UserHome"><img src="2/uploads/gallery_img-04.jpg" alt="" /> <strong>الرجوع</strong></a></li>
      <li><a href="#"> <strong>@if(auth()->user())
      {{auth()->user()->name}} مرحبا بك
       @endif </strong></a></li>

    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

    <!-- ####################################################################################################### --> 
  </div>
</div>
</body>
</html>