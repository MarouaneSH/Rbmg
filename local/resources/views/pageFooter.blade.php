@extends('Admin')

@section('style')
<link rel="stylesheet" href="{{asset('css/general.css')}}">
@endsection
@section('content')
<div class="card">
<h3>Bas de page</h3>
@if(Session::has('success'))
        <div class="alert alert-success">
            Tous les modifications ont été effectuées
        </div>
@endif
@if(count($errors)>0)
<div class="alert alert-danger">Tous les champs sont obligatoire </div>

@endif
<form action="{{route('footerEdit')}}" method="POST">
        {{csrf_field()}}
        <h4>Description</h4>
        <textarea name="text"  class="form-control" id="" cols="30" rows="4">{{$general[0]->footer}}</textarea>
        <h4>Script Google Map</h4>
        <textarea style="margin-bottom:8px" name="googlemap"  class="form-control" id="" cols="30" rows="6">{{$general[0]->googlemap}}</textarea>
        <button class="btn btn-primary pull-right" style="margin-top:8px" type="submit">Enregistrer</button>
        <code >En savoir comment creer une map <a href="https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en" target="_blank">support.google.com/</a></code>
        <div class="clearfix"></div>
</form>
</div>
@endsection