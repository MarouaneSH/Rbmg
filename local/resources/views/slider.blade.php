@extends('Admin')

@section('style')

@endsection
@section('content')
<div class="row slider">
    @if(count($errors)>0)
        <div class="aler alert-danger" style="margin-top:10%;padding:20px">
        <li>sqdsdq</li>
    </div>
    @endif
    
    <div class="card col-md-5">
        <h3>Slider 1 </h3>
        @if(Session::has('success1'))
            <div class="alert alert-success">
                 Tous les modifications ont été effectuées
            </div>
        @endif
        <form action="{{route('saveSlider')}}" method="POST" enctype='multipart/form-data'>
            {{csrf_field()}}
            <input type="hidden" name="slider" value="1">
            <div class="row form-group">
                <div class="col-md-3">
                    Image
                </div>
                <div class="col-md-9">
                    <img src="{{asset($slider[0]->image)}}" id="img-slider1" alt="" class="img-responsive" style="margin-bottom:10px" accept="image/*">
                    <input type="file" name="image" id="uplouadImg"  class="filestyle"  onchange="PreviewImage();" data-input="false" data-icon="false" data-buttonText="Choisissez une image">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    Titre
                </div>
                 <div class="col-md-9">
                    <textarea name="header" id="" class="form-control" rows="3">{{$slider[0]->titre}}</textarea>
                    <h6>Si vous voulez sauter la ligne utiliser le mot 
                        <span>&lt;br&gt;</span> , <code>exemple : LE HUB <span>&lt;br&gt;</span> Toulouse </code>
                        
                    </h6>
                 </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    Paragraph
                </div>
                 <div class="col-md-9">
                    <textarea name="paragraph" id="" class="form-control" rows="5">{{$slider[0]->paragraph}}</textarea>
                    <h6> -Si vous voulez sauter la ligne utiliser le mot 
                        <span>&lt;br&gt;</span> , <code>exemple : LE HUB <span>&lt;br&gt;</span> Toulouse </code>  
                    </h6>
                    <h6> -Si vous voulez mettre une phrase en couleur utiliser le mot 
                        <span>&lt;span&gt;</span> phrases <span>&lt;/span&gt;</span> , <code>exemple : LE HUB <span>&lt;span&gt; Toulouse &lt;/span&gt;</span>  </code>  
                    </h6>
                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                 </div>
            </div>
        </form>
    </div>
    <div class="card col-md-5 col-md-offset-1">
        <h3>Slider 2 </h3>
        @if(Session::has('success2'))
            <div class="alert alert-success">
                 Tous les modifications ont été effectuées
            </div>
        @endif
        <form action="{{route('saveSlider')}}" method="POST" enctype='multipart/form-data'>
            {{csrf_field()}}
            <input type="hidden" name="slider" value="2">
            <div class="row form-group">
                <div class="col-md-3">
                    Image
                </div>
                <div class="col-md-9">
                    <img src="{{asset($slider[1]->image)}}" id="img-slider2" alt="" class="img-responsive" style="margin-bottom:10px" accept="image/*">
                    <input type="file" id="uplouadImg2" name="image" class="filestyle"  onchange="PreviewImage2();" data-input="false" data-icon="false" data-buttonText="Choisissez une image">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    Titre
                </div>
                 <div class="col-md-9">
                    <textarea name="header" id="" class="form-control" rows="3">{{$slider[1]->titre}}</textarea>
                    <h6>Si vous voulez sauter la ligne utiliser le mot 
                        <span>&lt;br&gt;</span> , <code>exemple : LE HUB <span>&lt;br&gt;</span> Toulouse </code>
                        
                    </h6>
                 </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    Paragraph
                </div>
                 <div class="col-md-9">
                    <textarea name="paragraph" id="" class="form-control" rows="5">{{$slider[1]->paragraph}}</textarea>
                    <h6> -Si vous voulez sauter la ligne utiliser le mot 
                        <span>&lt;br&gt;</span> , <code>exemple : LE HUB <span>&lt;br&gt;</span> Toulouse </code>  
                    </h6>
                    <h6> -Si vous voulez mettre une phrase en couleur utiliser le mot 
                        <span>&lt;span&gt;</span> phrases <span>&lt;/span&gt;</span> , <code>exemple : LE HUB <span>&lt;span&gt; Toulouse &lt;/span&gt;</span>  </code>  
                    </h6>
                    
                 </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    Mot 1
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="mot1" value="{{$slider[1]->sub1}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    Mot 2
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="mot2" value="{{$slider[1]->sub2}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    Mot 3
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="mot3" value="{{$slider[1]->sub3}}">
                    <button class="btn btn-primary" style="margin-top:10px" type="submit">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
   
</div>
@endsection

@section('script')
<script src="{{asset('js/bootstrap-filestyle.min.js')}}"></script>
<script>
      function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uplouadImg").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("img-slider1").src = oFREvent.target.result;
        };
    };

    function PreviewImage2() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uplouadImg2").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("img-slider2").src = oFREvent.target.result;
        };
    };
</script>
@endsection