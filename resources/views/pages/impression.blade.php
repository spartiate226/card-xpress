@extends('layout.dashboard')

@section('dashboard-content')
    <div class="mt-2 p-1 border-bottom" id="impress"><button class="btn btn-primary">Lancer l'impression</button></div>
    <div class="row justify-content-center" id="page">
        <section class="col-md-4 m-3 d-flex flex-column justify-content-center">
            <div class="w-100 border">
                <b class="text-success border-bottom border-success mb-2 mr-5">Carte d'etudiant</b>
                <div class="d-flex p-2 justify-content-between">
                    <img class=" m-2" src="{{$etud->photo}}" style="flex-grow: 1;">
                    <ul class=" p-0 m-4" style="flex-grow: 2;">
                        <li class="list-unstyled"><b>Nom:</b> {{$etud->nom}}</li>
                        <li class="list-unstyled"><b>Prenom:</b> {{$etud->prenom}}</li>
                        <li class="list-unstyled"><b>Cycle:</b> {{$etud->cycle}}</li>
                        <li class="list-unstyled"><b>Niveau:</b> {{$etud->niveau}}</li>
                        <li class="list-unstyled"><b>Annee:</b> {{$etud->annee_ac}}</li>
                    </ul>
                    <div class=" d-flex p-0 flex-column justify-content-center">
                        <h2>{{$etud->matricule}}</h2>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>

            var before=$("body").html();

            document.getElementById('impress').addEventListener('click',function () {
                //alert(before);
                window.print();
            });

            window.onbeforeprint=function () {
               $("body").html($('#page').html());
            };
            window.onbeforeprint=function () {
                $("body").html(before);
            };
    </script>
@endsection
