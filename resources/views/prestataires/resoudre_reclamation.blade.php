@extends('layouts.app_prest')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Solver la reclamation</h2>

            <p><strong>ID : </strong>{{$reclamation->id}}</p>
            <p><strong>Nom de reclamation : </strong>{{$reclamation->name}}</p>
            <p><strong>Type : </strong>{{$reclamation->type}}</p>
            <p><strong>Description : </strong>{{$reclamation->description}}</p>
            @if($reclamation->image)
            <label><strong>Image :</strong></label>
            <img src="<?php echo asset("images/reclamations/$reclamation->image") ?>" width="200px" />
            @endif

            <form class="form-card fc" method="POST" action="{{route('reclamation_resolue',$reclamation->id)}}" >
                @csrf
                <label for="etat" class="text-bold col-form-label text-md-end"><strong>Etat</strong></label>
                <select class="form-select" name="etat" required>
                    <option class="form-control" >traitée</option>
                    <option class="form-control" >en cours</option>
                </select>

                <label for="solution" class="text-bold col-form-label text-md-end"><strong>Solution:</strong></label>
                <textarea class="form-control my-3" rows="8" maxlength="1000" placeholder="Remarque" name="solution" required></textarea>


                <button class="btn btn-info" type="submit" value="save">Envoyer</button>
                <a class="btn btn-secondary" href="{{route('reclamation_details',$reclamation->id)}}">Annuler</a>
            </form>

        </div>
    </div>
</div>
@endsection