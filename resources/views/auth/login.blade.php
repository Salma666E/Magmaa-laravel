<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="start/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="start/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="start/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="start/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="start/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="start/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="start/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="start/css/util.css">
	<link rel="stylesheet" type="text/css" href="start/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('start/images/book2.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form"  method="POST" action="{{ route('login') }}">
                        @csrf
					<div class="login100-form-avatar">
						<img src="start/images/read.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						اهلا بك
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
					<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
 
                    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                <!--    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color:white">
                                        {{ __('تذكرنى') }}
                                    </label>-->
                                </div>
                            </div>
                        </div>
					<div class="container-login100-form-btn p-t-10">
                    <button type="submit" class="btn btn-info">
                                    {{ __('تسجيل الدخول') }}
                                </button>
								<style>
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}
.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>
<div >
    <a href="#popup1" style="color:white">هل نسيت كلمه المرور؟</a>
</div>
<div id="popup1" class="overlay">
    <div class="popup">
        <h2><i>!!!مرحبا</i></h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
           نعتذر و لكن ارسل رساله للمسؤل على البريد الالكترونى التالى....... ليغيرها لك 
        </div>
    </div>
</div>

                              <!--  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}"  style="color:white">
                                        {{ __('نسيت كلمه المرور؟') }}
                                    </a>
                                @endif-->
					</div>
				</form>
			</div>
            
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="start/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="start/vendor/bootstrap/js/popper.js"></script>
	<script src="start/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="start/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="start/js/main.js"></script>
</body>
</html>

