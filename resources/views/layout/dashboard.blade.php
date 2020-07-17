@extends('layout.app')
@section('sidebare')
<aside class="col-md-1 p-0 main">
    <ul class="p-0">
        <li class="list-unstyled text-center"><a href="{{url('')}}" title="Accueil" class="fa fa-home m-3"></a></li>
        <li class="list-unstyled text-center"><a href="{{url('Etudiant')}}" title="Liste" class="fa fa-hdd-o m-3"></a></li>
        <li class="list-unstyled text-center"><a href="{{url('Etudiant/create')}}" title="Ajouter" class="fa fa-plus-circle m-3"></a></li>
        <li class="list-unstyled text-center"><a href="{{url('#')}}" title="Quitter" class="fa fa-sign-out m-3"></a></li>
    </ul>
</aside>
@endsection
@section('contenue')
@yield('dashboard-content')
@endsection
