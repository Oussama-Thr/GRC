@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2> Show Reclamation numero {{$reclamation->id}}:</h2>
            <p><strong>Nom de reclamation : </strong>{{$reclamation->name}}</p>
            <p><strong>Type : </strong>{{$reclamation->type}}</p>
            <p><strong>Etat : </strong>{{$reclamation->etat}}</p>
            <p><strong>Description : </strong>{{$reclamation->description}}</p>
            @if($reclamation->image) <strong>Fichier : </strong>
            <img src="<?php echo asset("images/reclamations/$reclamation->image") ?>" width="200px" />
            @endif
            <hr>
            @if($reclamation->solution)
            <p><strong>Solution : </strong>{{$reclamation->solution}}</p>
            <a class="btn btn-success" href="{{route('accepte_solution_reclamation',$reclamation->id)}}">Accepter</a>
            @endif
            @if($reclamation->raison_du_refus)
            <p><strong>Raison du refus : </strong>{{$reclamation->raison_du_refus}}</p>
            @endif
            <a class="btn btn-secondary" href="{{route('gestion_reclamation')}}">Retourner</a>
        </div>
    </div>
</div>
@endsection