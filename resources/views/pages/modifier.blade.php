@extends('layout.dashboard')

@section('dashboard-content')
<form action="{{route('Etudiant.update',[$etud->id])}}" method="POST"  class="shadow p-3 m-3">
    @csrf
    @method('PUT')
    @if(session('reponse'))
        <div class="form-group">
            <p class="alert alert-info" role="alert">{{session('reponse')}}
            <button class="close" type="button" data-toggle="alert"><span>&times;</span></button>
            </p>
        </div>
    @endif
    <div class="form-group">
        <label>Matricule</label>
        <input type="text" name="matricule" value="{{$etud->matricule}}" class="form-control">
    </div>
    <div class="row">
    <div class="form-group col-md-6">
        <label>Nom</label>
        <input type="text" name="nom" value="{{$etud->nom}}" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label>Prenom</label>
        <input type="text" name="prenom" value="{{$etud->prenom}}" class="form-control">
    </div>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{$etud->email}}" class="form-control">
    </div>
    <div class="row">
    <div class="form-group col-md-6">
        <label>Niveau</label>
        <input type="text" name="niveau" value="{{$etud->niveau}}" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label>Cycle</label>
        <input type="text" name="cycle" value="{{$etud->cycle}}" class="form-control">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-6">
        <label>Annee academique</label>
        <input type="text" name="annee_ac" value="{{$etud->annee_ac}}" class="form-control">
    </div>
    
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Mettre a jour</button>
    </div>
</form>
@endsection
