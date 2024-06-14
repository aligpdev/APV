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
	<title>KAKUDAA - Admin</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="admin/assets/images/favicon.png"/>
	<link href="admin/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="admin/assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="admin/assets/css/style.css" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="authincation h-100">
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
									<div class="text-center mb-3">
										<a href="{{route('TABLEAU')}}">
										    <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
										    <rect width="57" height="57" rx="14" fill="#FFD482"/>
										    <path d="M33.8661 45.3198L34.016 45.5H34.2504H42H43.0867L42.3797 44.6747L29.6972 29.8694L42.0311 15.3234L42.7292 14.5H41.6497H34.2504H34.015L33.8651 14.6814L23.6296 27.0631V15V14.5H23.1296H17H16.5V15V45V45.5H17H23.1296H23.6296V45V33.016L33.8661 45.3198Z" fill="#2D3134" stroke="#2D3134"/>
										    <path d="M49.609 37.1129L49.6065 37.1153L45.8935 40.7348L46.7704 45.847L46.7705 45.8478C46.8764 46.468 46.622 47.0949 46.113 47.4658L49.609 37.1129ZM49.609 37.1129C50.0552 36.6749 50.222 36.0196 50.0254 35.4164L49.0746 35.7263L50.0254 35.4164C49.8302 34.8175 49.3123 34.3807 48.6885 34.2897L48.6878 34.2896L43.5562 33.5445L41.2613 28.8938C41.2613 28.8938 41.2612 28.8938 41.2612 28.8938C40.9426 28.248 40.2969 28 39.7756 28C39.2543 28 38.6085 28.248 38.2899 28.8938L35.995 33.5445L30.8633 34.2896L30.8626 34.2897C30.2377 34.3808 29.721 34.8192 29.526 35.4156C29.3292 36.0177 29.4952 36.6758 29.9435 37.1142L29.9447 37.1154L33.6583 40.7342L32.7814 45.8463L32.7813 45.8471M49.609 37.1129L32.7813 45.8471M32.7813 45.8471C32.6755 46.4673 32.9299 47.0942 33.4388 47.4652M32.7813 45.8471L33.4388 47.4652M33.4388 47.4652C33.9498 47.8383 34.6282 47.8867 35.1863 47.5918C35.1868 47.5915 35.1873 47.5913 35.1878 47.591L39.7756 45.1795L44.3657 47.5925L33.4385 47.4649C33.4386 47.465 33.4387 47.4651 33.4388 47.4652ZM45.1374 47.7835C45.4783 47.7835 45.822 47.6782 46.1129 47.4659L44.3668 47.5931C44.6093 47.7208 44.8745 47.7835 45.1374 47.7835Z" fill="url(#paint0_linear_33_278)" stroke="#FFD482" stroke-width="2"/>
										    <defs>
										    <linearGradient id="paint0_linear_33_278" x1="39.7756" y1="29" x2="39.7756" y2="46.7835" gradientUnits="userSpaceOnUse">
										    <stop offset="2" stop-color="#FF9D43"/>
										    <stop offset="1" stop-color="#F66F4D"/>
										    </linearGradient>
										    </defs>
										    </svg>
                                            <img src="admin/assets/images/KKD_N.png" alt="">
									    </a>
									</div>
                                    <h4 class="text-center mb-4">Créer un compte</h4>
                                    <form action="{{ route('NEWUSER') }}" method="POST" class="form-horizontal">
                                        @method('POST')
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Nom</strong></label>
                                            <input type="text" class="form-control" id="nom" name="nom" required>
                                            <span class="text-danger">@error('nom'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Prénom</strong></label>
                                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                                            <span class="text-danger">@error('prenom'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Téléphone</strong></label>
                                            <input type="tel" class="form-control" id="telephone" name="telephone" required>
                                            <span class="text-danger">@error('telephone'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Mot de passe</strong></label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="mb-0 mb-sm-3">Vous avez déjà un compte? <a class="text-primary" href="{{route('page-login')}}">Se connecter</a></p>
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
<script src="admin/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="admin/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="admin/assets/js/custom.min.js"></script>
<script src="admin/assets/js/deznav-init.js"></script>
<script src="admin/assets/js/demo.js"></script>
<script src="admin/assets/js/styleSwitcher.js"></script>
</body>

</html>