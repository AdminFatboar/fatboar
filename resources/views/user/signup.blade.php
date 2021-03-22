<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fatboar | Inscription</title>
	<meta name="description" content="Inscrivez-vous afin de participer au jeu-concours de Fatboar et d'avoir la chance de remporter un Range Rover">
	<link rel="icon" href="public/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/plugin/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/mdb.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/query.css">
</head>

<body>

    @include('layouts.header')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 mx-auto">


                <div class="p-3 my-md-5 text-center login-signup-bg rounded">

                    


                        <div class="row">

                            <div class="col-md-9 mx-auto">

                                <div class="card">

                                    <div class="card-body">

                                        <form class="text-center" method="POST" action="{{ route('register') }}">
                                            
                                            @csrf
                                            <h3 class="font-weight-bold my-4 pb-2 text-center">S’inscrire</h3>

                                            <input name="name" type="text" class="@error('name') is-invalid @enderror form-control mb-4" placeholder="Nom d'utilisateur">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <input name="email" type="text" class="@error('email') is-invalid @enderror form-control mb-4" placeholder="Email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <input name="password" type="password" class="@error('password') is-invalid @enderror form-control mb-4" placeholder="Mot de passe">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <input id="password-confirm" type="password" class="form-control mb-4" placeholder="Confirmer le mot de passe" name="password_confirmation" required autocomplete="new-password">


                                            @if (Route::has('password.request'))
                                            <small id="passwordHelpBlock" class="form-text text-right blue-text">
                                                <a href="{{ route('password.request') }}">Mot de passe oublié ? </a>
                                            </small>
                                            @endif

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-outline-orange btn-rounded my-3 waves-effect">S’inscrire</button>
                                            </div>

                                            <h4>Ou</h4>

                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</button>
                                                <button type="button" class="btn btn-gplus"><i class="fab fa-google-plus-g pr-1"></i> Google +</button>
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

    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>