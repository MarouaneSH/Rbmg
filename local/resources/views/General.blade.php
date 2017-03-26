@extends('Admin')

@section('style')
<link rel="stylesheet" href="{{asset('css/general.css')}}">
@endsection
@section('content')

<div class="card">
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
        <form action="{{route('changeGeneral')}}" method="POST" enctype='multipart/form-data'>
        {{csrf_field()}}
            <div class="row form-group">
                <div class="col-md-3">
                    <h4>Page Titre</h4>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="titre" value="{{$general[0]->titre}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <h4>Logo</h4>
                </div>
                <div class="col-md-6">
                    <img src="{{asset($general[0]->logo)}}" alt="" width="120px" accept="image/*" >
                    <input type="file" name="logo">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <h4>Email contact</h4>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="email" value="{{$general[0]->email}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <h4>Facebook</h4>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="facebook" value="{{$general[0]->facebook}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <h4>Instagram</h4>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="instagram" value="{{$general[0]->instagram}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <h4>Linkedin</h4>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="linkedin" value="{{$general[0]->linkedin}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <h4>Twitter</h4>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="twitter" value="{{$general[0]->twitter}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <h4>Google+</h4>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="GooglePlus" value="{{$general[0]->google}}">
                   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <h4>Lien video presentation</h4>
                </div>
                <div class="col-md-6">
                    <input s type="text" class="form-control" name="youtube" value="{{$general[0]->youtube}}" style="margin-bottom:8px;">
                   <code >Le lien de video youtube doit etre comme celui ci <strong>http://www.youtube.com/embed/VIDEO_ID</strong></code>
                </div>
            </div>
             <div class="row form-group">
                <div class="col-md-3">
                    <h4>Zopim Code Widget</h4>
                </div>
                <div class="col-md-6">
                    <textarea name="zopim" id="" cols="30" rows="8" class="form-control">{{$general[0]->zopim}}</textarea>
                    <button class="btn btn-primary pull-right" style="margin-top:20px">Enregistrer</button>
                </div>
            </div>
        </form>
</div>

@endsection