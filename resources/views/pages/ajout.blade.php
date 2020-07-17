@extends('layout.dashboard')

@section('dashboard-content')
<form action="{{url('Etudiant')}}" method="POST" enctype="multipart/form-data" class="shadow p-3 m-3">
    @csrf
    @if(session('reponse'))
        <div class="form-group">
            <p class="alert alert-info" role="alert">{{session('reponse')}}
            <button class="close" type="button" data-toggle="alert"><span>&times;</span></button>
            </p>
        </div>
    @endif
    <div class="form-group">
        <label>Matricule</label>
        <input type="text" name="matricule" class="form-control">
    </div>
    <div class="row">
    <div class="form-group col-md-6">
        <label>Nom</label>
        <input type="text" name="nom" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label>Prenom</label>
        <input type="text" name="prenom" class="form-control">
    </div>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="row">
    <div class="form-group col-md-6">
        <label>Niveau</label>
        <input type="text" name="niveau" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label>Cycle</label>
        <input type="text" name="cycle" class="form-control">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-6">
        <label>Annee academique</label>
        <input type="text" name="annee_ac" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label>Photo</label>
        <input type="file" name="photo" class="form-control">
    </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Enregistrer</button>
    </div>
</form>
@endsection
