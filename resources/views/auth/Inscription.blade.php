@if (Auth::User()->role==1)
    


@extends('layout.dashboard')

@section('dashboard-content')
    <div class="row">
        <div class="col-md-3">

        </div>
        <form class="col-md-5 shadow m-3 p-5" action="{{url('register')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Nom utilisateur">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="prenom" placeholder="Prenom">
            </div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role">
                    <option value="0">Caissier(iere)</option>
                    <option value="1">Administrateur</option>
                </select>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmer Mot de passe">
            </div>
            <button class="btn btn-info">connecter</button>
        </form>
    </div>
@endsection



@endif


