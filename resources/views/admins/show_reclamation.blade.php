@extends('layouts.app_admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2> Show Reclamation numero {{$reclamation->id}}:</h2>
            <p><strong>Nom de reclamation : </strong>{{$reclamation->name}}</p>
            <p><strong>Type : </strong>{{$reclamation->type}}</p>
            <p><strong>Etat : </strong>{{$reclamation->etat}}</p>
            <p><strong>Description : </strong>{{$reclamation->description}}</p>
            @if($reclamation->image)
            <strong>File :</strong>
            <img src="<?php echo asset("images/reclamations/$reclamation->image") ?>" width="200px" />
            @endif
            </br>
            </br>
            </br>
            <a class="btn btn-secondary" href="{{route('liste_reclamations')}}">Retourner</a>
            <a class="btn btn-success" href="{{route('accepte_reclamation',$reclamation->id)}}">Accepter</a>
            <a class="btn btn-danger" href="{{route('refuse_reclamation_form',$reclamation->id)}}">Refuser</a>
        </div>
    </div>
</div>
@endsection