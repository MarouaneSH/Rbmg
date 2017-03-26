@extends('Admin')

@section('style')

@endsection
@section('content')
<div class="card" >
<h3> Evenments</h3>
<div class="notes" style="font-size:13px">
<h5>Remarques</h5>
<h6>- Une Date peuvent avoir plusieur evenements</h6>
<h6>- Vous pouvez ajouter plusieurs dates des evenements</h6>
<h6>- Vous pouvez ajouter plusieurs evenements a une date </h6>
<h6>- Une Date doivent avoir au minimum un seul événement</h6>
</div>
<h4 style="color:red;">cette pages n'est pas encore finis </h4>
<button class="btn btn-primary" id="AddNewDate">Ajouter une nouvelle date des evenements</button>
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
</div>
<div class="card event-new" style="display:none;margin-top:10px;border-left:solid 5px #00BFA5">

    <div class="row">
        <div class="col-md-12">
         <button class="btn btn-danger pull-right cancel">Annuler</button>
          <form action="{{route('editEvent')}}" method="post">
            {{csrf_field()}} 
           
            <div class="clearfix"></div>
            <h4>Date des evenements</h4>
            
            <input type="text" class="form-control date" widht="200px" name="date" value="">              
                <h5>Ajouter un evenement a cette date , vous pouvez ajouter plusieur evenements aprés l'enegistrement</h5>
              <div class="col-md-4 card event-card" style="border:solid 1px rgba(128, 128, 128, 0.58);border-left:solid 5px #714343;">
                             
                                     
                                    <input type="hidden" value="" name="id">
                                    <h5>Nom</h5>
                                    <input type="text" class="form-control" name="nom" value="">
                                    <h5>Heur</h5>
                                    <input type="text" class="form-control" name="heur" value="">
                                    <h5>Adress</h5>
                                    <input type="text" class="form-control" name="adress" value="">
                                    <h5>Date</h5>
                                    <input type="text" class="form-control" name="date_name" value="" style="margin-bottom:5px">
                                    <code >Exemple :15 Avril</code>
                                    <h5>Icon</h5>
                                     <div class="col-md-6">
                                     <img src="{{asset('img/event-float1 (1).png')}}" width="40px" alt="">
                                    
                                       <input type="radio"  value="img/event-float1 (1).png" name="icon" >
                                     
                                     </div>
                                     <div class="col-md-6">
                                     <img src="{{asset('img/event-float1 (2).png')}}" width="40px" alt="">
                                      <input type="radio" value="img/event-float1 (2).png" name="icon"  >
                                     </div>
                                     <button class="btn btn-primary pull-right" name="btn" value="addDateEvent" style="margin-top:10px">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

 @foreach($events as $event)
<div class="card" style="margin-top:10px">

    <div class="row">
        <div class="col-md-12">
               
            <h4>DATE</h4>
            <form action="{{route('editEvent')}}" method="post">
            <input type="text" class="form-control date" widht="200px" name="date" value="{{$event->date}}">              
              {{csrf_field()}}
                  <input type="hidden" value="{{$event->id}}" name="event_id">
                  <button class="btn btn-primary pull-right" name="btn" value="editdate" style="margin-top:20px">Modifier la date des evenement</button>
                  <div class="clearfix"></div>
                  
              </form>
            <h5>Liste des evenments</h5>
            @foreach($event->Event_name as $eventName)
            
             
                        <div class="col-md-4 card event-card" style="border:solid 1px rgba(128, 128, 128, 0.58);border-left:solid 5px #714343;">
                             <form action="{{route('editEvent')}}" method="post">
                                     {{csrf_field()}}
                                    <input type="hidden" value="{{$eventName->id}}" name="id">
                                    <h5>Nom</h5>
                                    <input type="text" class="form-control" name="nom" value="{{$eventName->titre}}">
                                    <h5>Heur</h5>
                                    <input type="text" class="form-control" name="heur" value="{{$eventName->heur}}">
                                    <h5>Adress</h5>
                                    <input type="text" class="form-control" name="adress" value="{{$eventName->adress}}">
                                    <h5>Date</h5>
                                    <input type="text" class="form-control" name="date_name" value="{{$eventName->date_name}}" style="margin-bottom:5px">
                                    <code >Exemple :15 Avril</code>
                                    <h5>Icon</h5>
                                     <div class="col-md-6">
                                     <img src="{{asset('img/event-float1 (1).png')}}" width="40px" alt="">
                                    
                                       <input type="radio"  value="img/event-float1 (1).png" name="icon"  @if($eventName->icon == "img/event-float1 (1).png") checked="checked" @endif>
                                     
                                     </div>
                                     <div class="col-md-6">
                                     <img src="{{asset('img/event-float1 (2).png')}}" width="40px" alt="">
                                      <input type="radio" value="img/event-float1 (2).png" name="icon"  @if($eventName->icon == "img/event-float1 (2).png") checked="checked" @endif >
                                     </div>
                                     <button class="btn btn-primary pull-right" name="btn" value="editevent" style="margin-top:10px">Enregistrer</button>
                             </form>
                
                 </div>
                
           
            @endforeach
             <div class="addNewEvent col-md-4" style="text-align:center;">
                <input type="hidden" value="{{$event->id}}" class="ideventAdd">
                <i class="fa fa-plus-circle add" aria-hidden="true" style="font-size:20px;cursor:pointer;margin-top:15%"></i>
                <h6>Ajoute un nouvel evenment</h6>
             </div>
        </div>
       
      
    </div>
</div>
   @endforeach


@endsection
@section('script')

<script>
$('.date').datepicker({
    format: 'yyyy-mm-dd',
});

$(".add").click(function(){
    var dateID =  $(this).parent().children(".ideventAdd").val();
    $(this).parent(".addNewEvent").before(`
         <form action="{{route('editEvent')}}" method="post">
              {{csrf_field()}}
                          <input type="hidden" value="`+dateID+`" name="id_event">
                        <div class="col-md-4 card event-card" style="border:solid 1px rgba(128, 128, 128, 0.58);border-left:solid 5px #714343;">
                        
                                   
                                    <h5>Nom</h5>
                                    <input type="text" class="form-control" name="nom" value="">
                                    <h5>Heur</h5>
                                    <input type="text" class="form-control" name="heur" value="">
                                    <h5>Adress</h5>
                                    <input type="text" class="form-control" name="adress" value="">
                                    <h5>Date</h5>
                                    <input type="text" class="form-control" name="date_name" value="" style="margin-bottom:5px">
                                    <code >Exemple :15 Avril</code>
                                    <h5>Icon</h5>
                                    <div class="col-md-6">
                                     <img src="{{asset('img/event-float1 (1).png')}}" width="40px" alt="">
                                    
                                       <input type="radio"  value="img/event-float1 (1).png" name="icon">
                                     
                                     </div>
                                     <div class="col-md-6">
                                     <img src="{{asset('img/event-float1 (2).png')}}" width="40px" alt="">
                                      <input type="radio" value="img/event-float1 (2).png" name="icon" >
                                     </div>
                                     <button class="btn btn-primary pull-right" name="btn" value="ajoutevent">Enregistrer</button>
                 </div>
                
            </form>
    
    `);
})
$("#AddNewDate").click(function(){
    $(".event-new").slideDown();
})
$(".cancel").click(function(e){
    
    $(".event-new").slideUp();
})
</script>
@endsection