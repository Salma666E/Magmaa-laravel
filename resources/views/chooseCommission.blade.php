<html>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Cookie|Raleway:300,700,400);
*{
	box-sizing: border-box;
	font-size: 1em;
	margin: 0;
	padding: 0;
}
body{
	background-image: url('Wall.jpg') center no-repeat;
	background-size: cover;
	color: #333;
	font-size: 18px;
	font-family: 'Raleway', sans-serif;
}
.container{
	border-radius: 0.5em;
	box-shadow: 0 0 1em 0 rgba(51,51,51,0.25);
	display: block;
	max-width: 480px;
	overflow: hidden;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	padding: 2em;
	position: absolute;
		top: 50%;
		left: 50%;
		z-index: 1;
	width: 98%;
}
.container:before{
	background: url('Wall.jpg') center no-repeat;
	background-size: cover;
	content: '';
	-webkit-filter: blur(10px);
	filter: blur(10px);
	height: 100vh;
	position: absolute;
		top: 50%;
		left: 50%;
		z-index: -1;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	width: 100vw;
}
.container:after{
	background: rgba(255,255,255,0.6);
	content: '';
	display: block;
	height: 100%;
	position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
	width: 100%;
}
form button.submit{
	background: rgba(255,255,255,0.25);
	border: 1px solid #333;
	line-height: 1em;
	padding: 0.5em 0.5em;
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}

.btn-bubble {
  color: white;
  background-color: #77b11c;
  background-repeat: no-repeat;
}
.btn-bubble:hover, .btn-bubble:focus {
  -webkit-animation: bubbles 1s forwards ease-out;
          animation: bubbles 1s forwards ease-out;
  background: radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 50% 120% / 0.83em 0.83em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 61% 86% / 1.2em 1.2em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 67% 88% / 0.66em 0.66em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) -10% 127% / 0.83em 0.83em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 33% 134% / 0.67em 0.67em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 11% 140% / 1.06em 1.06em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 18% 81% / 0.99em 0.99em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 81% 113% / 1.1em 1.1em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 101% 123% / 0.73em 0.73em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 71% 149% / 0.77em 0.77em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 57% 150% / 0.5em 0.5em;
  background-color: #77b11c;
  background-repeat: no-repeat;
}

@-webkit-keyframes bubbles {
  100% {
    background-position: 41% -17%, 62% -364%, 73% -97%, -15% -68%, 29% 44%, 2% -226%, 26% -339%, 89% -287%, 107% -354%, 62% -396%, 49% -399%;
    box-shadow: inset 0 -6.5em 0 #0072c4;
  }
}

@keyframes bubbles {
  100% {
    background-position: 41% -17%, 62% -364%, 73% -97%, -15% -68%, 29% 44%, 2% -226%, 26% -339%, 89% -287%, 107% -354%, 62% -396%, 49% -399%;
    box-shadow: inset 0 -6.5em 0 #0072c4;
  }
}
body {
	background: url('Wall.jpg') center no-repeat;
	background-size: cover;
  display: -webkit-box;
  display: flex;
  min-height: 100vh;
  -webkit-box-pack: center;
          justify-content: center;
  align-content: center;
  -webkit-box-align: center;
          align-items: center;
}

.btn {
  display: inline-block;
  text-decoration: none;
  padding: 1em 2em;
}

form button.loading{
	background: #333;
	color: #fff;
	outline: none;
}
form button.success{
	background: #27ae60;
	border-color: #27ae60; 
	color: #fff;
}
@-webkit-keyframes spin{
	from{ transform: rotate(0deg); }
	to{ transform: rotate(360deg); }
}
@keyframes spin{
	from{ transform: rotate(0deg); }
	to{ transform: rotate(360deg); }
}
form button span.loading-spinner{
	-webkit-animation: spin 0.5s linear infinite;
	animation: spin 0.5s linear infinite;
	border: 2px solid #fff;
	border-top-color: transparent;
	border-radius: 50%;
	display: inline-block;
	height: 1em;
	width: 1em;
}

form label{
	border-bottom: 1px solid #333;
	display: block;
	font-size: 1.25em;
	margin-bottom: 0.5em;
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}
form label.col-one-half{
	float: left;
	width: 50%;
}
form label.col-one-half:nth-of-type(even){
	border-left: 1px solid #333;
	padding-left: 0.25em;
}
form label input{
	background: none;
	border: none;
	line-height: 1em;
	font-weight: 300;
	padding: 0.125em 0.25em;
	width: 100%;
}
form label input:focus{
	outline: none;
}
form label input:-webkit-autofill{
	background-color: transparent !important;
}
form label span.label-text{
	display: block;
	font-size: 0.5em;
	font-weight: bold;
	padding-left: 0.5em;
	text-transform: uppercase;
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}
form label.checkbox{
	border-bottom: 0;
	text-align: center;
}
form label.checkbox input{
	display: none;
}
form label.checkbox span{
	font-size: 0.5em;
}
form label.checkbox span:before{
	content: '\e157';
	display: inline-block;
	font-family: 'Glyphicons Halflings';
	font-size: 1.125em;
	padding-right: 0.25em;
	position: relative;
		top: 1px;
}
form label.checkbox input:checked + span:before{content: '\e067';}
form label.invalid{border-color: #c0392b !important;}
form label.invalid span.label-text{color: #c0392b;}
form label.password{position: relative;}
form label.password button.toggle-visibility{
	background: none;
	border: none;
	cursor: pointer;
	font-size: 0.75em;
	line-height: 1em;
	position: absolute;
		top: 50%;
		right: 0.5em;
	text-align: center;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}
form label.password button.toggle-visibility:hover,
form label.password button.toggle-visibility:focus,
form label.password button.toggle-visibility:active{
	color: #000;
	outline: none;
}
form label.password button.toggle-visibility span{vertical-align: middle;}

h1{
	font-size: 3em;
	margin: 0 0 0.5em 0;
	text-align: center;
	font-family: 'Cookie', cursive;
}
h1 img{
	height: auto;
	margin: 0 auto;
	max-width: 240px;
	width: 100%;
}
html{
	font-size: 18px;
	height: 100%;
}

.text-center{
	text-align: center;
}
</style>


<script>

(function($) {
	$.fn.extend({
		donetyping: function(callback, timeout) {
			timeout = timeout || 500;
			var timeoutReference,
				doneTyping = function(el) {
					if (!timeoutReference) return;
					timeoutReference = null;
					callback.call(el);
				};
			return this.each(function(i, el) {
				var $el = $(el);
				$el.is(":input") &&
					$el
						.on("keyup keypress", function(e) {
							if (e.type == "keyup" && e.keyCode != 8) return;
							if (timeoutReference) clearTimeout(timeoutReference);
							timeoutReference = setTimeout(function() {
								doneTyping(el);
							}, timeout);
						})
						.on("blur", function() {
							doneTyping(el);
						});
			});
		}
	});
})(jQuery);

formValidation = {
	init: function() {
		this.$form = $(".registration-form");
		this.$firstName = this.$form.find('input[name="firstName"]');
		this.$lastName = this.$form.find('input[name="lastName"]');
		this.$email = this.$form.find('input[name="email"]');
		this.$password = this.$form.find('input[name="password"]');
		this.$passwordToggle = this.$form.find("button.toggle-visibility");
		this.$submitButton = this.$form.find("button.submit");

		this.validatedFields = {
			firstName: false,
			lastName: false,
			email: false,
			password: false
		};

		this.bindEvents();
	},
	bindEvents: function() {
		this.$firstName.donetyping(this.validateFirstNameHandler.bind(this));
		this.$lastName.donetyping(this.validateLastNameHandler.bind(this));
		this.$email.donetyping(this.validateEmailHandler.bind(this));
		this.$password.donetyping(this.validatePasswordHandler.bind(this));
		this.$passwordToggle.mousedown(
			this.togglePasswordVisibilityHandler.bind(this)
		);
		this.$passwordToggle.click(function(e) {
			e.preventDefault();
		});
		this.$form.submit(this.submitFormHandler.bind(this));
	},
	validateFirstNameHandler: function() {
		this.validatedFields.firstName = this.validateText(this.$firstName);
	},
	validateLastNameHandler: function() {
		this.validatedFields.lastName = this.validateText(this.$lastName);
	},
	validateEmailHandler: function() {
		this.validatedFields.email =
			this.validateText(this.$email) && this.validateEmail(this.$email);
	},
	validatePasswordHandler: function() {
		this.validatedFields.password =
			this.validateText(this.$password) && this.validatePassword(this.$password);
	},
	togglePasswordVisibilityHandler: function() {
		var html = '<input type="text" value="' + this.$password.val() + '">';
		var $passwordParent = this.$password.parent();
		var saved$password = this.$password.detach();
		$passwordParent.append(html);
		this.$passwordToggle
			.find("span")
			.removeClass("glyphicon-eye-close")
			.addClass("glyphicon-eye-open");
		this.$passwordToggle.one(
			"mouseup mouseleave",
			function() {
				$passwordParent.find("input").remove();
				$passwordParent.append(saved$password);
				this.$passwordToggle
					.find("span")
					.removeClass("glyphicon-eye-open")
					.addClass("glyphicon-eye-close");
			}.bind(this)
		);
	},
	submitFormHandler: function(e) {
		e.preventDefault();
		this.validateFirstNameHandler();
		this.validateLastNameHandler();
		this.validateEmailHandler();
		this.validatePasswordHandler();
		if (
			this.validatedFields.firstName &&
			this.validatedFields.lastName &&
			this.validatedFields.email &&
			this.validatedFields.password
		) {
			// Simulate Ajax loading
			this.$submitButton
				.addClass("loading")
				.html('<span class="loading-spinner"></span>');
			setTimeout(
				function() {
					this.$submitButton
						.removeClass("loading")
						.addClass("success")
						.html("Welcome, " + this.$firstName.val());
				}.bind(this),
				1500
			);
		} else {
			this.$submitButton.text("Please Fix the Errors");
			setTimeout(
				function() {
					if (this.$submitButton.text() == "Please Fix the Errors") {
						this.$submitButton.text("Sign Me Up");
					}
				}.bind(this),
				3000
			);
		}
	},

	validateText: function($input) {
		$input.parent().removeClass("invalid");
		$input
			.parent()
			.find("span.label-text small.error")
			.remove();
		if ($input.val() != "") {
			return true;
		} else {
			$input.parent().addClass("invalid");
			$input
				.parent()
				.find("span.label-text")
				.append(' <small class="error">(Field is empty)</small>');
			return false;
		}
	},
	validateEmail: function($input) {
		var regEx = /\S+@\S+\.\S+/;
		$input.parent().removeClass("invalid");
		$input
			.parent()
			.find("span.label-text small.error")
			.remove();
		if (regEx.test($input.val())) {
			return true;
		} else {
			$input.parent().addClass("invalid");
			$input
				.parent()
				.find("span.label-text")
				.append(' <small class="error">(Email is invalid)</small>');
			return false;
		}
	},
	validatePassword: function($input) {
		$input.parent().removeClass("invalid");
		$input
			.parent()
			.find("span.label-text small.error")
			.remove();
		if ($input.val().length >= 8) {
			return true;
		} else {
			$input.parent().addClass("invalid");
			$input
				.parent()
				.find("span.label-text")
				.append(
					' <small class="error">(Your password must longer than 7 characters)</small>'
				);
			return false;
		}
	}
}.init();

</script>
</head>
<body>

<div class="container">
	<header>
		<h1>
			<a href="#">
				<img src="Arabia.png">
			</a>
		</h1>
	</header>
	<h1 class="text-center">اختر لجنه</h1>
	<form class="registration-form">
	<div>
	<a href="arabicword/Ameeting" class="btn btn-bubble">لجنه عربيه</a>
    <a href="word/meeting" class="btn btn-bubble">لجنه علميه</a>
	<a href="meeting/generalmeetingform" class="btn btn-bubble float-center">لجميع اللجان</a>
	
    </div>
	</form>
</div>
  
</body>
</html>