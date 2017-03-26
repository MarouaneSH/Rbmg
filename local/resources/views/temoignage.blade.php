@extends('Admin')

@section('style')
<link rel="stylesheet" href="{{asset('css/general.css')}}">
<style>
.AddTemoigne{
    position:fixed;
    background:#0074A2;
    width:70%;
    max-width:800px;
    top:20%;
    padding:20px;
    color:white;
    left:0;
    right:0;
    margin:auto;
    display:none;

    
}
    
    </style>
@endsection
@section('content')

<div class="card">
<h3>Chiffres Cles</h3>
<div class="row">
 @if(Session::has('success'))
        <div class="alert alert-success">
            Tous les modifications ont été effectuées
        </div>
        @endif
 @if(count($errors)>0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach           
          </div>
        @endif
<form action="{{route('saveChiffre')}}" method="POST">
        {{csrf_field()}}
        <div class="col-md-3">
        <h5>Partenaires <input type="text" class="form-control" value="{{$general[0]->partners}}" name="partners"></h5>
        </div>
        <div class="col-md-3">
        <h5>Entreprises crées <input type="text" class="form-control" value="{{$general[0]->entreprise}}" name="entreprise"></h5>
        </div>
        <div class="col-md-3">
        <h5>Projets en cours <input type="text" class="form-control" value="{{$general[0]->projet}}" name="projet"></h5>
        </div>
        <div class="col-md-3">
        <h5>Evènements à venir <input type="text" class="form-control" value="{{$general[0]->evenment}}" name="evenment"></h5>
        </div>
        <button type="submit" class="btn btn-primary pull-right" style="margin-right:10px">Enregistrer</button>
    </form>
</div>
</div>
<div class="card" style="margin-top:10px">
<button id="Add"  class="btn btn-primary" >Ajouter un nouveau temoignage</button>
<h3>Temoignage</h3>
<div class="row">

 @if(Session::has('successTemgoinage'))
        <div class="alert alert-success">
            Tous les modifications ont été effectuées
        </div>
 @endif
  @if(Session::has('error'))
    <div class="alert alert-danger">Tous Les Champs Sont Obligatoire</div>
  @endif

    @foreach($temoignages as $temoignage)
      <form action="{{route('saveTemoignage')}}" method="POST">
            {{csrf_field()}}
            <div class="col-md-6" style="margin:20px 0">
                <h4>Nom</h4>
                <input type="text" class="form-control" name="Nom" value="{{$temoignage->Nom}}">
                <h4>Text</h4>
                <textarea  type="text" class="form-control" name="text" rows="6">{{$temoignage->text}}</textarea>
                
           

                <input type="hidden" value="{{$temoignage->id}}" name="id">
                <button type="submit" name="edit" value="1" class="btn btn-primary pull-right"style="margin:5px">Enregistrer</button>
                <button type="submit" name="delete" value="1" class="btn btn-danger pull-right"style="margin:5px">Supprimer</button>
            </div>
        </form>
    @endforeach
    
     
      
    <div class="AddTemoigne">
     <i class="fa fa-times exit" aria-hidden="true"></i>
        <form action="{{route('addTemoignage')}}" method="POST">
       
            {{csrf_field()}}
            <h3>Nom</h3>
            <input type="text" class="form-control" name="Nom">
            <h3>Text</h3>
            <textarea name="text"  class="form-control" id="" cols="30" rows="5"></textarea>
            <center>
            <button type="submit" class="btn btn-primary" style="margin-top:10px">Ajouter</button>
            </center>
        </form>
   </div>
</div>
</div>

@endsection

@section('script')
<script>
$("#Add").click(function(){
    $(".AddTemoigne").fadeIn();
})
</script>

@endsection