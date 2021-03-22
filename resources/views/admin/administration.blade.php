<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administration</title>
	<link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('assets/plugin/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/query.css')}}">
</head>

<body>

    @include('layouts.header')

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="nav nav-pills flex-column" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-draw-tab" data-toggle="pill" href="#pills-draw" role="tab" aria-controls="pills-draw" aria-selected="true">Tirage au sort</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-stats-tab" data-toggle="pill" href="#pills-stats" role="tab" aria-controls="pills-stats" aria-selected="false">Statistiques du jeu-concours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('admin/export')}}">Extraction de données</a>
                            </li>
                            <li class="nav-item mt-5">
                                <a class="nav-link active" href="{{route('logout')}}">Déconnexion</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content p-4 border" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-draw" role="tabpanel" aria-labelledby="pills-draw-tab">
                                <div class="d-flex justify-content-around align-items-center pb-3 border-bottom">
                                    <form action="{{route('admin.draw')}}" method="post">
                                    @csrf
                                        
                                        <p class="mb-0 font-small">Lancer le tirage au sort final</p>
                                        <button type="submit" class="btn btn-warning">Tirage aléatoire</button>
                                        
                                    </form>
                                </div>
                                <div class="py-2 text-center">
                                    <span></span>
                                </div>
                                <div class="py-3 text-center">
                                    <h6 class="font-small">Gagnant</h6>
                                </div>
                                <div class="py-2">
                                    <form action="">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-4 col-form-label font-small">Nom d'utilisateur</label>
                                            <div class="col-sm-6">
                                                <input readonly type="text" id="name" class="form-control" name="name" @if($ticket && $ticket->user->name) value="{{$ticket->user->name}}" @endif>
                                            </div>
                                            
                                            <label for="email" class="col-sm-4 col-form-label font-small">Email</label>
                                            <div class="col-sm-6">
                                                <input readonly type="text" id="email" class="form-control" name="email" @if($ticket && $ticket->user->email) value="{{$ticket->user->email}}" @endif>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-stats" role="tabpanel" aria-labelledby="pills-stats-tab">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Nom</th>
											<th scope="col">Prénom</th>
                                            
                                            <th scope="col">Gain</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($win_results as $result)
                                        <tr>
                                            <th>{{$result->id}}</th>
                                            <td>{{$result->email}}</td>
                                            <td>{{$result->name}}</td>
                                            <td>{{$result->lastname}}</td>
                                            <td>{{$result->ticket_count}}</td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Est
                                quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex.
                                Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim
                                exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit
                                aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia
                                elit do ipsum ullamco Lorem. Ullamco ut ad minim do mollit labore ipsum laboris ipsum commodo sunt
                                tempor enim incididunt. Commodo quis sunt dolore aliquip aute tempor irure magna enim minim
                                reprehenderit. Ullamco consectetur culpa veniam sint cillum aliqua incididunt velit ullamco sunt
                                ullamco quis quis commodo voluptate. Mollit nulla nostrud adipisicing aliqua cupidatat aliqua pariatur
                                mollit voluptate voluptate consequat non.</div>
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