@extends('layout.dashboard')

@section('dashboard-content')
    <div class="border-bottom p-2">
        <a href="{{url('email')}}" class="btn btn-primary">Envoyer un mail a tous</a>
    </div>

    @if(session('reponse'))
        <div class="form-group">
            <p class="alert alert-info" role="alert">{{session('reponse')}}
                <button class="close" type="button" data-toggle="alert"><span>&times;</span></button>
            </p>
        </div>
    @endif
    <table class="table  table-hover table-bordered table-striped mt-5">
        <thead>
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Niveau</th>
            <th>Cycle</th>
            <th>Annee academique</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($etudiants as $etudiant)
        <tr>
            <td> {{$etudiant->matricule}}</td>
            <td> {{$etudiant->nom}}</td>
            <td> {{$etudiant->prenom}}</td>
            <td> {{$etudiant->email}}</td>
            <td> {{$etudiant->niveau}}</td>
            <td> {{$etudiant->cycle}}</td>
            <td> {{$etudiant->annee_ac}}</td>
            <td>
                <div>
                    <form class="d-inline" action="Etudiant/{{$etudiant->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="badge badge-danger badge-pill">Supprimer</button>
                    </form>
                    <a  class="d-inline badge badge-success badge-pill" href="{{url('Etudiant/'.$etudiant->id.'/edit')}}">Modifier</a>
                </div>
                <div class="mt-2">
                    <a  class="d-inline badge badge-primary badge-pill" href="{{url('Etudiant/'.$etudiant->id.'/edit')}}">Impression</a>
                    <a  class="d-inline badge badge-secondary badge-pill" href="{{url('email?etudiant='.$etudiant->id)}}">Mail</a>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Niveau</th>
            <th>Cycle</th>
            <th>Annee academique</th>
            <th>Options</th>
        </tr>
        </tfoot>
    </table>
    <div class="d-flex justify-content-center">
        {{$etudiants->links()}}
    </div>
@endsection
