<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Lukstron Development</title>
	<link rel="icon" href="logo.png">
	
	<link href="css/font.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css" />
	
	<!-- JQuery -->
	<script src="js/jquery.min.js"></script>
	
	<!-- FormValidation -->
	<link rel="stylesheet" href="tparty/formvalidation/css/formValidation.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/login.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <section id="logo" style="padding: 30px 0 25px 0;">
	<a href="#"><img src="logo.png" alt="" width="100" height="100"/></a>
	<div style="width:100%;"><center><h2><strong>Lukstron Software Development</strong></h2></center></div>
	<div style="width:100%;"><center><h3><strong style="color:blue;">Login Panel Form</strong></h3></center></div>
    </section>
	
    <section class="container" style="margin-top:50px;">
	<section class="col-md-4 col-md-offset-4 row">
            <div class="alert alert-warning fade in" role="alert"  id="login-error" style="display:none;">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		<strong>Perhatian!</strong> Mohon Cek Kembali Username atau Password Anda.
            </div>
            <form method="post" id="loginForm" action="cek.php" role="login">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Enter your Username" required class="form-control" />
		</div>
		<div class="form-group">
                    <input type="password" name="password" placeholder="Enter password" required class="form-control" />
		</div>
		<div class="form-group">
                    <input type="checkbox" name="remember" value="1" /> Remember me
		</div>
		<button type="submit" name="go" class="btn btn-block btn-primary">Login Now</button>
		<section>
                    <!--<a href="#" style="color:green;">Forgot your password ?</a>-->
		</section>
            </form>
	</section>
    </section>
    <script type="text/javascript">
	$(document).ready(function() {
            $('#loginForm')
            .on('success.form.fv', function(e) {
                e.preventDefault();
                var $form = $(e.target),
		fv    = $form.data('formValidation');
		$.ajax({
                    url: $form.attr('action'),
                    type: 'POST',
					dataType: "json",
                    data: $form.serialize(),
                    success: function(html) {
                        if(html['cek']=='false'){
								$('#login-error').show();
								 setTimeout( function show(){
									  $('#login-error').hide();
								  }, 5000 );
							}
							if(html['cek']=='true'){
								window.location='panel.php';
							}
                    }
		});
            })
            .formValidation({
                message: 'This value is not valid',
		icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
                    username: {
			validators: {
                            notEmpty: {
                                message: 'The value is required'
                            },
                            stringLength: {
				max: 50,
				message: 'The must be less than 50 characters'
                            }
			}
                    },
                    password: {
                        validators: {
                            notEmpty: {
				message: 'The value is required'
                            },
                            stringLength: {
				max: 50,
				message: 'The must be less than 50 characters'
                            }
			}
                    },
		}
            });
	});
    </script>
    <!-- formvalidation -->
    <script type="text/javascript" src="tparty/formvalidation/js/formValidation.js"></script>
    <script type="text/javascript" src="tparty/formvalidation/js/framework/bootstrap.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>	