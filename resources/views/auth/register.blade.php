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
    <title>KAKUDAA - Inscription</title>
    <link rel="shortcut icon" type="image/png" href="admin/assets/images/favicon.png"/>
    <link href="admin/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="admin/assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
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

                                    <h4 class="text-center mb-4" style="text-transform: italic;">Créer un compte chez nous!</h4>
                                    <form action="{{ route('NEWUSER') }}" method="POST" class="form-horizontal">
                                        @method('POST')
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="mb-1"><strong>Nom</strong></label>
                                                <input type="text" class="form-control-sm form-control" id="nom" name="nom" required>
                                                <span class="text-danger">@error('nom'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-1"><strong>Prénom</strong></label>
                                                <input type="text" class="form-control-sm form-control" id="prenom" name="prenom" required>
                                                <span class="text-danger">@error('prenom'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="mb-1"><strong>Téléphone</strong></label>
                                                <input type="tel" class="form-control-sm form-control" id="telephone" name="telephone" required>
                                                <span class="text-danger">@error('telephone'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-1"><strong>Email</strong></label>
                                                <input type="email" class="form-control-sm form-control" id="email" name="email" required>
                                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="mb-1"><strong>Mot de passe</strong></label>
                                                <input type="password" class="form-control-sm form-control" id="password" name="password" required>
                                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-1"><strong>Type de compte</strong></label>
                                                <select id="role" name="role" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box;">
                                                    <option value="USER">Acheteur</option>
                                                    <option value="VENDEUR">Vendeur</option>
                                                    <!-- <option value="ADMIN">Administrateur</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div style="text-align: center;">
                                            <button type="submit" style="background-color: #5cb85c; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                                                S'inscrire
                                            </button>
                                        </div>
                                        <div style="text-align: center; margin-top: 15px;">
                                            <a href="{{ route('page-login') }}" style="color: #5cb85c; text-decoration: none;">Déjà un compte? Connectez-vous</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="admin/assets/vendor/global/global.min.js"></script>
    <script src="admin/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="admin/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="admin/assets/js/custom.min.js"></script>
    <script src="admin/assets/js/deznav-init.js"></script>
    <script src="admin/assets/js/demo.js"></script>
    <script src="admin/assets/js/styleSwitcher.js"></script>
</body>
</html>
