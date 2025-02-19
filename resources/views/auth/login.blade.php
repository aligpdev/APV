<!DOCTYPE html>
<html lang="fr" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="robots" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="eshop Hotel Admin Dashboard"/>
	<meta property="og:title" content="eshop Hotel Admin Dashboard"/>
	<meta property="og:description" content="eshop Hotel Admin Dashboard"/>
	<meta property="og:image" content="social-image.png"/>
	<meta name="format-detection" content="telephone=no">
	<!-- PAGE TITLE HERE -->
	<title>KAKUDAA - Connexion</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="admin/assets/images/favicon.png"/>
	<link href="admin/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="admin/assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="admin/assets/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="admin/assets/css/style.css" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="authincation h-100" style="font-family: Arial, sans-serif; background-color: #ffd482;">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                <div class="results">
                                    @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif

                                    @if(session::get('echec'))
                                    <div class="alert alert-danger">
                                        {{ session::get('echec') }}
                                    </div>
                                    @endif
                                </div>
                                    <div class="text-center mb-3 d-flex justify-content-center align-items-center">
                                        <a href="{{route('TABLEAU')}}" class="d-flex align-items-center" style="text-transform: uppercase; font-weight: bold; color: black; font-size: 24px;">
                                            <img src="admin/assets/images/logo.png" alt="Logo" style="height: 40px; margin-right: 10px;">
                                            KAKUDAA
                                        </a>
                                    </div>
                                    <h4 class="text-center mb-4">Connexion à mon compte</h4>
                                    <form action="{{route('AUTHLOGIN')}}" method="post" class="form-valide-with-icon needs-validation" novalidate>
                                        @method('POST')
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1 text-label form-label" for="email">Email</label>
                                            <div class="input-group">
												<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="saississez votre email" required>
												<div class="invalid-feedback">
                                                    Email requis.
												  </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1 text-label form-label" for="password">Mot de passe *</label>
                                            <div class="input-group transparent-append">
												<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="saississez votre mot de passe" required>
												<span class="input-group-text show-pass"> 
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
                                                <div class="invalid-feedback">
                                                    Mot de passe requis.
												</div>
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-0">
                                                    <input type="checkbox" class="form-check-input" id="save_password">
                                                    <label class="form-check-label" for="save_password">Se souvenir de moi</label>
                                                </div>
                                            </div>
                                            <!-- <div class="mb-3 mt-1">
                                                <a href="{{route('FORGOT')}}">Mot de passe oublié?</a>
                                            </div> -->
                                        </div>
                                        <div style="text-center">
                                            <button class="btn-block" type="submit" style="background-color: #5cb85c; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                                                Se connecter
                                            </button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="mb-0 mb-sm-3">Vous n'avez pas de compte? <a class="text-primary" href="{{ route('page-register') }}">S'inscrire maintenant</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="admin/assets/vendor/global/global.min.js"></script>
    <script src="admin/assets/js/custom.min.js"></script>
    <script src="admin/assets/js/deznav-init.js"></script>
	<script src="admin/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="admin/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="admin/assets/js/demo.js"></script>
	<script src="admin/assets/js/styleSwitcher.js"></script>
	<script src="admin/assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
		(function () {
		  'use strict'

		  // Fetch all the forms we want to apply custom Bootstrap validation styles to
		  var forms = document.querySelectorAll('.needs-validation')

		  // Loop over them and prevent submission
		  Array.prototype.slice.call(forms)
			.forEach(function (form) {
			  form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				  event.preventDefault()
				  event.stopPropagation()
				}

				form.classList.add('was-validated')
			  }, false)
			})
		})()
	</script>
</body>

</html>