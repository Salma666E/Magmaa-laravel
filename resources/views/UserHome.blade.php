<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pop HTML5 Template</title>
<!--
-->
    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                               <!-- Templatemo style -->

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
</head>

<body>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
    <div class="col-sm-12 col-md-9  col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-9 mb-4 tm-site-header-col">
                                <div class="tm-site-header">
                            <h1 class="mb-4">مرحبا بك</h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
                            <!-- <a class="btn btn-success" href="../login"> تسجيل دخول/خروج   </a>     -->
                        </div>        
          
                   </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">بحث</span>
                                            <div class="product__bg"></div>        
                                        </div>   
                                       
                                
                                        <div class="product__description">
                                 <form action="{{url('/word/showword')}} "method="post" enctype="multipart/form-data">  
                                       {{csrf_field()}}
                              <div class="container">
                                             <input type="text" placeholder="بحث..."   name="arabic_word" >
                               <div class="search"></div>
                                            
                                      </div> 
                                   <div>
                                    <input   class="btn btn-secondray" type="submit" value="بحث"> </input>
                                    <select name="id" class="btn btn-danger" >
                  
                                                @foreach($commissions as $Commissions)
                                               <option value="{{$Commissions->id}}" id="id" name="id">{{$Commissions->name}}</option>
                                
                                                   @endforeach        
                                   </select>
                                            
                                 </div>

                           </form>              
                                           
                                     
                                           
                                    </div> 
                                             
                                 </div>
                            </div>
                     
                              
                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">عن اللجان</span>
                                            <div class="product__bg"></div>            
                                        </div>                                     
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">عن اللجان</h2>        
                                                    </div>
                                                </div>
                                                <div class="row tm-reverse-sm">
                                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                        <p class="mb-4">قد انشات لجنه اللغه العربيه عام ... على يد الاستاذ... و هى اول اللجان اللتى انشءت فى المجمع</p>
                                                        <a href="commission/show data for user" class="btn tm-btn-gray">قرائه المزيد</a>        
                                                    </div>                                                
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                        <img src="img/team.jpg" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">تاريخ المجمع</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title"></h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <p>مجمع اللغة العربية تأسس في القاهرة في 14 من شعبان عام 1351هـ الموافق 13 من ديسمبر سنة 1932م في عهد الملك فؤاد الأول</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="p-sm-4 p-2 tm-img-container">
                                                            <div class="tm-img-slider" id="tmImgSlider">
                                                              <img src="img/gallery-img-01-tn.jpg" alt="Image" class="tm-slider-img">
                                                              <img src="img/gallery-img-02-tn.jpg" alt="Image" class="tm-slider-img">
                                                              <img src="img/gallery-img-03-tn.jpg" alt="Image" class="tm-slider-img">
                                                              <img src="img/gallery-img-04-tn.jpg" alt="Image" class="tm-slider-img">
                                                              <img src="img/gallery-img-05-tn.jpg" alt="Image" class="tm-slider-img">
                                                              <img src="img/gallery-img-06-tn.jpg" alt="Image" class="tm-slider-img">
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">النشاطات</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title"></h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <p>مجمع اللغة العربية تأسس في القاهرة في 14 من شعبان عام 1351هـ الموافق 13 من ديسمبر سنة 1932م في عهد الملك فؤاد الأول</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <a href="PostDisplay" class="btn tm-btn-gray">قرائه المزيد</a> 
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                </div>

                               

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">تواصل معنا</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                              
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">تواصل معنا</h2>        
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>نرحب بك و رايك يهمنا جدا ... نرجو ان نكون قدمنا الاجابه التى كنت تبحث عنها </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                    <form action="{{url('/edit')}} "method="post" class="contact-form">
                                                           
                                                           {{csrf_field()}}
                                                           <div class="row">
                                                               <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                 <input type="email" id="contact_email" name="email" class="form-control" placeholder="الايميل"  required/>
                                                               </div>
                                                               <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                 <input type="text" id="contact_name" name="name" class="form-control" placeholder="الاسم"  required/>
                                                               </div>

                                                              
                                                           </div>                                                        
                                                           <div class="form-group">
                                                             <textarea id="contact_message" name="message" class="form-control" rows="9" placeholder="الرساله" required></textarea>
                                                           </div>
                                                           <button type="submit" class="btn btn-primary tm-btn-submit">ارسال</button>
                                                       </form>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>           
                                    </div>
                                </div>
                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="material-icons directions_run fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">تسجيل الخروج/الدخول</span>
                                            <div class="product__bg"></div>             
                                        </div>                                                                 
                                        <div class="product__description">
                                           <a href="/login" class="btn btn-primary">اضغط هنا</a>
                                        </div>       
                                    </div>
                                </div>


                               

                            </div> 
                        </div>                       
                    </div>
                </div>                
            </div>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->    
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="js/anime.min.js"></script>                     <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>  
    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>  
</body>
</html>