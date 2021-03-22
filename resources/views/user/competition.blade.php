<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Participez au Jeu-concours de l'enseigne Fatboar</title>
    <meta name="description" content="Jeu-concours de Fatboar. Inscrivez-vous sur le site Fatboar, gagnez des prix et participez au tirage au sort final afin d'avoir la chance de remporter un Range Rover">
    <link rel="icon" href="public/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/plugin/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/mdb.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/query.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-16NSEP7JT4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-16NSEP7JT4');
    </script>
</head>

<body>

    @include('layouts.header')

    <!-- carousel d'images -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">

                <div id="carousel-example-1z" class="carousel slide carousel-fade competition-slider" data-ride="carousel">

                    <!--3 Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--Premier slide-->
                        <div class="carousel-item active">
                            <img class="d-block w-100 img-fluid" src="{{ URL::to('/assets/images/jeu-concours.png')}}" alt="Image jeu-concours fatboar avec un burger et un range rover">
                        </div>

                        <!--Deuxième slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid" src="{{ URL::to('/assets/images/burger-double.jpg')}}" alt="Deux burgers côte à côte spécialité Fatboar">
                        </div>

                        <!--Troisième slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid" src="{{ URL::to('/assets/images/burger3.jpg')}}" alt="Deux burgers avec des frites spécialité Fatboar">
                        </div>

                    </div>

                    <!--Bouton nav-slide -->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>

                </div>

            </div>
        </div>
    </div>

    <!-- Contenu page-principale -->
    <div class="container-fluid py-5">

        <div class="row justify-content-center">

            <div class="col-lg-10 col-md-10">

                <div class="row">

                    <div class="col-md-6">

                        <div class="p-3 bg-faq-head mb-3 rounded">
                            <h1 class="mb-0">FAQ Jeu-concours | Fatboar</h1>
                        </div>

                        <div class="accordion md-accordion faq" id="accordionEx" role="tablist" aria-multiselectable="true">

                            <div class="card">

                                <div class="card-header" role="tab" id="headingOne1">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                        <h5 class="mb-0">
                                            Comment jouer au jeu-concours fatboar? <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                    <div class="card-body">
                                        Pour participer au jeu-concours de Fatboar, c’est très simple. Il vous suffit de vous connecter
                                        ou de vous enregistrer en renseignant votre nom, prénom et votre email. Vous avez le choix de passer
                                        directement par Facebook ou Gmail. Une fois inscrit, vous pouvez participer au jeu-concours
                                        si et seulement si votre ticket de caisse dépasse le montant de 18€. Ainsi vous pourrez
                                        valider votre numéro à 10 chiffres afin de récupérer votre récompense et de prétendre au
                                        tirage au sort final.
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <div class="card-header" role="tab" id="headingTwo2">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                        <h5 class="mb-0">
                                            Quelles sont les récompenses du jeu-concours ? <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                    <div class="card-body">
                                        100% des tickets d’une valeur supérieure ou égale à 18€ sont gagnants. Voici la répartition
                                        des gains : 60% des tickets offrent une entrée ou un dessert au choix. 20% des tickets
                                        offrent un burger au choix. 10% des tickets offrent un menu du jour. 6% des tickets offrent
                                        un menu au choix. 4% des tickets offrent 70% de réduction.
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <div class="card-header" role="tab" id="headingThree3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                        <h5 class="mb-0">
                                            Quand est-ce que le jeu-concours de Fatboar termine ? <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                                    <div class="card-body">
                                        Le jeu-concours débute à partir du 29 mars 2021 et se terminera le 30 Mai 2021. Après la
                                        date butoir, vous ne pourrez plus prétendre à l’obtention de vos gains, si ces derniers n’ont
                                        pas été réclamés.
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <div class="card-header" role="tab" id="headingFour4">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                                        <h5 class="mb-0">
                                            Qui peut participer au jeu-concours de Fatboar ? <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4" data-parent="#accordionEx">
                                    <div class="card-body">
                                        Tout le monde peut participer à condition d’avoir un ticket d’un montant supérieur ou égal à
                                        18€
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <div class="card-header" role="tab" id="headingFive5">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                        <h5 class="mb-0">
                                            Qu’est-ce que le tirage au sort final ? <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5" data-parent="#accordionEx">
                                    <div class="card-body">
                                        Lors de la fin du jeu-concours le 30 Mai 2021, un tirage au sort final se déroulera avec un
                                        huissier de justice, Maître Arnaud Rick. Ce tirage au sort permettra à tous les participants du
                                        jeu-concours, ayant participé de pouvoir prétendre à l’obtention d’un Ranger Rover. Pour le
                                        tirage au sort du véhicule, le nombre de participations d’un client n'augmente pas ses
                                        chances de gagner le véhicule.
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="p-3 bg-faq-head mb-3 rounded">
                            <h2 class="mb-0">Inscription au jeu-concours </h2>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if(Session::has('message'))
                        <p class="alert alert-danger">Ticket invalide, veuillez rééssayer.</p>
                        @endif

                        <div class="p-3 border">
                            <p class="font-small">Grâce à votre numéro à 10 chiffres vous pouvez prétendre à un lot distribué aléatoirement.
                                Veuillez vous référer à la FAQ pour connaitre toutes les récompenses.</p>
                            <div class="py-3">
                                <p class="mb-0 font-weight-bold font-small">Numéro à 10 chiffres </p>
                                <form action="{{route('competition')}}" method="POST" class="my-2">
                                    @csrf
                                    <div class="input-group">
                                        <input name="ticket" type="text" minlength="10" maxlength="10" class="form-control" placeholder="Ex : 7223935685" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-md btn-dark rounded-right m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2">Valider</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class="font-small">Une fois votre numéro entré, un employé devra valider votre gain pour que vous puissiez y
                                prétendre. Pour pouvoir réclamer votre lot, un QR code vous est attribué pour chaque
                                participation. Attention, si vous essayez de rentrer plusieurs faux numéros, vous serez radié de la
                                participation du jeu-concours. Il y aura également une suppression de tous vos lots, comme mentionné dans
                                les CGU. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>

</body>

</html>