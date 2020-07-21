@extends('layout.dashboard')

@section('dashboard-content')
    <form action="{{url('email')}}" method="POST" class="shadow p-3 m-3">
        @csrf
        @if(session('reponse'))
            <div class="form-group">
                <p class="alert alert-info" role="alert">{{session('reponse')}}
                    <button class="close" type="button" data-toggle="alert"><span>&times;</span></button>
                </p>
            </div>
        @endif
        <input type="text" hidden name="id" value="{{$id}}" class="form-control">
        <div class="form-group">
            <label>Objet</label>
            <input type="text" name="objet" class="form-control">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea type="text" rows="10" name="message" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Envoyer</button>
        </div>
    </form>
@endsection

