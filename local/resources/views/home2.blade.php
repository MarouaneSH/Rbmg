<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$general[0]->titre}}</title>
    <link rel="stylesheet" type="" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
   
    <!--Remove-->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two:400i" rel="stylesheet">


    <?php echo $general[0]->zopim ?>
  
</head>
<body>

 <div class="preload">
    <img src="{{asset('img/ring.gif')}}" alt="">
 </div>
<nav class="navbar navbar-inverse always-open">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="{{asset($general[0]->logo)}}" alt="Le Hub Toulouse" class="img-responsive" style="margin-top:-10px;height: 100px;    width: 350px;"></a>
        <button type="button" class="navbar-toggle" 
                data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="#QuiSommeNous">Qui sommes-nous ?</a></li>
            <li><a href="#OffreEtTarifs">Offres et Tarifs</a></li>
            <li><a href="#Partenaires">Partenaires</a></li>
            <li><a href="#Actualites">Actualités</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>
    </div>
</nav>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item">
        <div class="background-shadow"></div>
        <img src="{{asset($slider[0]->image)}}" data-color="lightblue" alt="First Image">
        <div class="carousel-caption">
            <h3><?php echo $slider[0]->titre; ?></h3>
            <p>
              <?php echo $slider[0]->paragraph; ?>
            </p>
        </div>
    </div>
    <div class="item">
          <div class="background-shadow"></div>
        <img src="{{asset($slider[1]->image)}}" data-color="firebrick" alt="Second Image">
        <div class="carousel-caption">
            <h3><?php echo $slider[1]->titre; ?></h3>
            <h4 id="head1" class="head"><?php echo $slider[1]->sub1; ?></h4>
            <h4 id="head2" class="head"><?php echo $slider[1]->sub2; ?></h4>
            <h4 id="head3" class="head"><?php echo $slider[1]->sub3; ?></h4>
            <p class="carousel-mobile">
              <?php echo $slider[1]->paragraph; ?>
            </p>
        </div>
    </div>
  </div>

  
  <!--<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>

<div class="chiffre-cle">
  
  <div class="backround-white"></div>
  <div class="chiffre-header">
      <h3>LES CHIFFRES CLES</h3>
  </div>
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-xs-12">
             <div class="circle">
                 <h1 id="count1">35</h1>
             </div>
             <div class="chiffre-desc">
                 Partenaires
             </div>
         </div>
         <div class="col-md-3 col-xs-12">
              <div class="circle">
                 <h1 id="count2">1 123</h1>
             </div>
             <div class="chiffre-desc">
                 Entreprises <br>
                 crées
             </div>
         </div>
         <div class="col-md-3 col-xs-12">
              <div class="circle">
                 <h1 id="count3">22</h1>
             </div>
             <div class="chiffre-desc">
                 Projets en <br>
                 cours
             </div>
         </div>
         <div class="col-md-3 col-xs-12">
              <div class="circle">
                 <h1 id="count4">14</h1>
             </div>
             <div class="chiffre-desc">
                 Evènements à <br>
                 venir
             </div>
         </div>
      </div>
      <div class="row">
         @foreach($temoignages as $temoignage)
          <div class="col-md-6 col-sm-12">
              <div class="temoignage" style=" margin-right: 20px;">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  <p>
                      {{$temoignage->text}};
                  </p>
                  <h5>{{$temoignage->Nom}}</h5>
              </div>
          </div>
         
    
          @endforeach
          
          <!--<div class="col-md-6 col-sm-12">
              <div class="temoignage" style=" margin-left: 20px;">
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  <p>
                      L’espace de coworking m’a permis de rencontrer

                        des dizaines de partenaires professionnels avec

                        lesquels je travaille aujourd’hui et qui n’hésite plus

                        à me recommander.
                  </p>
                  <h5 >Marie, Consultante.</h5>
              </div>
          </div>-->
      </div>
   </div>
</div>
<div class="aboutus">
      <div class="backround-white" style="background:rgba(255, 255, 255, 0.38)"></div>
    <div class="col-md-6" style="padding: 50px 20px;padding: 0 100px;">
        
        <iframe width="100%" height="315" style="margin-top:20%" src="{{$general[0]->youtube}}" frameborder="0" allowfullscreen></iframe>

    </div>
    <div class="col-md-6 aboutus-desc">
       <h4>UNE HISTOIRE</h4>
       <p>Porté par l’Agence Conseil des PME, RBMG

            Consulting et en partenariat avec des acteurs

            locaux de l’accompagnement à la création

            d’entreprise, Le Hub contribue au dynamisme

            entrepreneurial local.</p>
        <h4>UNE MISSION</h4>
        <p>
            Notre mission est simple : <span> accélérer les projets

            présents au sein du HUB </span> en mettant à leur

            disposition compétences, outils et infrastructures

            indispensables au succès et à la croissance d’une

            entreprise.
        </p>
        <h4>UN SUIVI</h4>
        <p>
            

            Mise en relation entre professionnels, conseils

            professionnels, accompagnement à la création,

            études de pré-lancement,... autant de services mis

            à disposition des entreprises dans le seul but de

            développer leurs projets.
        </p>
    </div>
</div>
<div class="offre-tarifs">
   
      <div class="container">
          <div class="row tarifs-title" >
              <hr>
           <h3>VOUS SOUHAITEZ</h3>
         </div>
         <div class="row">
             <div class="col-md-3">
                 <div class="disable-img"></div>
                 <div class="img-service">
                 <img src="{{asset('img/1-black.png')}}" alt="" class="img-responsive" width="200px">
                 
                  </div>
                 <h3>
                    Développer votre

                    projet et bénéficier

                    de conseils</h3>
                
             </div>
             <div class="col-md-3">
                  <div class="disable-img"></div>
                <div class="img-service" > 
                 <img src="{{asset('img/2-black.png')}}" alt="" class="img-responsive" width="160px">
                 </div>
                 <h3>Choisissez votre espace</h3>
             

             </div>
             <div class="col-md-3">
                  <div class="disable-img"></div>
                <div class="img-service" style="padding-top: 30px;">
                 <img src="{{asset('img/3-black.png')}}" alt="" class="img-responsive" width="200px">
                 </div>
                 <h3>Domicilier et/ou

                    recevoir votre

                    courrier</h3>
                </div>
             
             <div class="col-md-3">
                  <div class="disable-img"></div>
                 <div class="img-service " style="padding-top: 30px;">
                   <img src="{{asset('img/4-black.png')}}" alt="" class="img-responsive">
                   </div>
                    <h3 class="bug-mobile">Louer/Réserver

                    une salle de

                    réunion</h3>
                  </div>      
         </div>
         <div class="offre-example">
                <div class="row development">
                    <div class="row">
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-1.png')}}" alt="">
                            <p>Evènements <br> communautaires</p>
                        </div>
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-2.png')}}" alt="">
                            <p>Evènements <br> communautaires</p>
                        </div>
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-3.png')}}" alt="">
                            <p>Evènements <br> communautaires</p>
                        </div>
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-4.png')}}" alt="">
                            <p>Evènements<br> communautaires</p>
                        </div>
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-5.png')}}" alt="">
                            <p>Evènements <br>communautaires</p>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-6.png')}}" alt="">
                            <p>Business Plan, <br> Etude de Marché</p>
                        </div>
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-7.png')}}" alt="">
                            <p>Conseils <br> stratégiques</p>
                        </div>
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-8.png')}}" alt="">
                            <p>Accès 24h/24</p>
                        </div>
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-9.png')}}" alt="">
                            <p>Offres partenaires</p>
                        </div>
                        <div class="col-md-15 col-xs-15">
                            <img src="{{asset('img/1-10.png')}}" alt="">
                            <p>Thé, Café,<br>Imprimante, Fibre</p>
                        </div>
                    </div>

                </div>
                <div class="row espace">
                    <div class="col-md-3 col-xs-4 "style="margin-left:10%">
                        <img src="{{asset('img/2-1.png')}}" alt="" class="responsive">
                        <h4>Bureau Fermé</h4>
                        <p>
                            Un bureau cloisonné pour
                            plus de confidentialité
                        </p>
                        <h2>
                            De 400 à 700€ HT
                        </h2>
                    </div>
                     <div class="col-md-3 col-xs-4">
                        <img src="{{asset('img/2-2.png')}}" alt="" class="responsive">
                        <h4>Bureau Fermé</h4>
                        <p>
                           Prenez place dans l’espace
                            de coworking !
                        </p>
                        <h2>
                            190€ HT / mois <br>
                            <span>20€ 1⁄2 journée</span> <br>
                            <span>30€ la journée</span>
                        </h2>
                    </div>
                     <div class="col-md-3 col-xs-4">
                        <img src="{{asset('img/2-3.png')}}" alt="" class="responsive">
                        <h4 >Services Inclus</h4>
                        <p>
                           Thé, café, Wifi, déjeuner

                            communautaire, table et

                            chaise, imprimante /

                            scanner, et bonne humeur !
                        </p>
                        
                    </div>

                </div>
                <div class="courrier">
                        <div class="col-md-4 col-xs-4">
                            <img src="{{asset('img/3-1.png')}}" alt="" class="responsive">
                            <h4 style="margin-top: 22px;">Services Inclus</h4>
                            <p>
                                Récupération et bon soin de votre courrier

                                en attendant que vous veniez le chercher,

                                envoi de mail quand le courrier semble

                                important, communication de votre

                                présence dans nos locaux aux impôts!
                            </p>
                        
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <img src="{{asset('img/3-2.png')}}" alt="" class="responsive">
                            <h4>En supplément</h4>
                            <p>
                            Expédition du courrier

                                (maximum une fois par

                                semaine).
                            </p>
                          
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <img src="{{asset('img/3-3.png')}}" style="margin-top: 20px;" alt="" class="responsive">
                            <h4 style="margin-top: 35px;">Prix</h4>
                            <p>
                            39€ HT par mois.
                            </p>
                            
                    </div>
                </div>
                  <div class="courrier reunion">
                        <div class="col-md-4 col-xs-4">
                            <img src="{{asset('img/4-1.png')}}" alt="" class="responsive" style="    width: 200px;    margin-bottom: 8px;">
                            <h4 style="margin-top: 22px;">Services Inclus</h4>
                            <p>
                                Chaque salle de réunion dispose de sièges

                                    confortables, d’un vidéoprojecteur, d’un

                                    accès internet, de thé et de café.
                            </p>
                        
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <img src="{{asset('img/3-2.png')}}" alt="" class="responsive">
                            <h4>Capacité</h4>
                            <p>
                            8 personnes.
                            </p>
                          
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <img src="{{asset('img/3-3.png')}}" style="margin-top: 20px;" alt="" class="responsive">
                            <h4 style="margin-top: 35px;">Prix</h4>
                            <p>
                             20€ HT/heure
                            </p>
                            
                    </div>
                </div>
            </div>
      </div>  
</div>

<div class="partners">
         <div class="container">
                <h2>Mais aussi...</h2>
                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <img src="{{asset('img/logo1.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <img src="{{asset('img/logo2.png')}}" class="img-responsive" >
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <img src="{{asset('img/logo3.png')}}" class="img-responsive" style=" width: 300px;margin-top: 20px">
    
                    </div>
                    <div class="col-md-4col-xs-12 ">
                        <img src="{{asset('img/logo4.jpg')}}" class="img-responsive" style=" width: 100%;max-width: 260px;">
                    </div>
                </div>
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-15 col-xs-12">
                        <img src="{{asset('img/logo5.png')}}" alt="" class="img-responsive" style="width: 180px;  margin-top: 5px;">
  
  
                    </div>
                    <div class="col-md-15 col-xs-12">
                        <img src="{{asset('img/logo9.png')}}" class="img-responsive" >
                    </div>
                    <div class="col-md-15 col-xs-12">
                        <img src="{{asset('img/logo6.jpg')}}" class="img-responsive" style=" width: 100px;">
    
                    </div>
                    <div class="col-md-15 col-xs-12">
                        <img src="{{asset('img/logo7.gif')}}" class="img-responsive" >
                    </div>
                    <div class="col-md-15 col-xs-12">
                        <img src="{{asset('img/logo8.jpg')}}" class="img-responsive" style="width:80px;">
                    </div>
                </div>
         </div>
     </div>
     <div class="actualites">
         <div class="container">
            <div class="col-md-6" style="padding: 0 50px;">
                <input type="text" id="date" style="width:100%;margin-top:50px;opacity:0"> 
            </div>
            <div class="col-md-6 events">
                <h3>Events à venir...</h3>
                <div class="row event-day" >
                 
                @foreach($events->last()->Event_name as $event)
                   
             
                    <div class="col-md-6" style="margin-bottom:60px">
                        <div class="single-event">
                            <img src="{{asset($event->icon)}}" alt="" class="img-event">
                            <h4>{{$event->titre}}</h4>
                            
                            <div class="row">   
                                <div class="col-md-4 col-xs-12">
                                     <img src="{{asset('img/calendar.png')}}" alt="">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                     <p>{{$event->date_name}}</p>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-md-4 col-xs-12">
                                     <img src="{{asset('img/clock.png')}}" alt="">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                     <p>{{$event->heur}}</p>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-md-4 col-xs-12">
                                     <img src="{{asset('img/location.png')}}" alt="">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                     <p>{{$event->adress}}</p>
                                </div>
                            </div>
                            
                        </div>
                   
                    </div>
                       @endforeach
                    <!--<div class="col-md-6 fix-mobile">
                        <div class="single-event">
                            <img src="{{asset('img/event-float1 (2).png')}}" alt=""  class="img-event">
                            <h4>Petit Dej’ Entrepreneurs <br> <br></h4>
                            <div class="row">   
                                <div class="col-md-4 col-sm-4">
                                     <img src="{{asset('img/calendar.png')}}" alt="">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                     <p>15 Avril</p>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-md-4 col-sm-4">
                                     <img src="{{asset('img/clock.png')}}" alt="">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                     <p>19h – 20h30</p>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-md-4 col-sm-4">
                                     <img src="{{asset('img/location.png')}}" alt="">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                     <p>13 Port Saint-Etienne,31100 Toulous</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    
                </div>
            </div>
        </div>
     </div>
     <div class="contact">
         <div class="contact-shadow"></div>
         <div class="container">
                
             <div class="col-md-6 map" style="overflow:hidden">
                   <?php echo $general[0]->googlemap ?>
                    <span id="googlemap">  </span>
                    
                 <h5 style="    font-size: 16px;color: white;">
                     <?php echo $general[0]->footer ?>
                     
                 </h5>
                 <h5 style="    color: white; margin: 20px 0;">
                     Suivez-nous !
                     
                 </h5>
                 <p class="social">
                     <a href="{{$general[0]->facebook}}"><img src="{{asset('img/social1.png')}}" alt=""></a>
                     <a href="{{$general[0]->linkedin}}"><img src="{{asset('img/social2.png')}}" alt=""></a>
                     <a href="{{$general[0]->instagram}}"><img src="{{asset('img/social3.png')}}" alt=""></a>
                     <a href="{{$general[0]->google}}"><img src="{{asset('img/social4.png')}}" alt=""></a>
                     <a href="{{$general[0]->twitter}}"><img src="{{asset('img/social5.png')}}" alt=""></a>
                 </p>

             </div>
             <div class="col-md-6 contact-form">
                        
                        <form action="{{route('mail')}}" method="POST" id="formMSG">
                            {{csrf_field()}}
                            <div class="msg-error alert alert-danger " style="display:none">

                            </div>
                            <div class="row form-group">
                                <h5>Votre nom</h5>
                                <input type="text" class="form-control" name="nom" required>
                            </div>    
                            <div class="row form-group">
                                <h5>Votre prénom</h5>
                                <input type="text" class="form-control" name="prenom" required>
                            </div>
                            <div class="row form-group">
                                <h5>Objet de votre demande</h5>
                                <input type="text" class="form-control" name="objet" required>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-7" >
                                    <h5>Mail</h5>
                                    <input type="text" class="form-control" style="margin-left: -15px;" name="mail" email required>
                                </div>
                                <div class="col-md-5">
                                    <h5>Téléphone</h5>
                                    <input type="text" class="form-control" name="telehpone" required>
                                </div>   
                            </div>
                            <div class="row form-group">
                               
                                    <h5>Message</h5>
                                    <textarea name="message" class="form-control" id="" cols="30" rows="10"  required></textarea>
                                     <div class="msg-success alert alert-success" style="  display:none;  margin-top: 10px;">
                                            <h4>Votre Message a été envoyer avec success .</h4>
                                     </div>
                                     <div class="load-msg" style="    text-align: center;display:none">
                                     <img src="{{asset('img/ring.gif')}}" alt="" width="40px">
                                     </div>
                                    <center>
                                        <button class="btn btn-primary" style="margin-top:20px" type="submit">Envoyer</button>
                                    </center>
                                    
                            </div>
                        </form>
                    </div>
         </div>
     </div>


   

   
    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/myjs.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        
         $(document).ready(function(){
               //aJAX MESSGAE
               $("#formMSG").submit(function(e){
                   e.preventDefault();
                   $.ajax({
                       url:"{{route('mail')}}",
                       type:"POST",
                       beforeSend:function(){
                           $(".load-msg").show();
                       },
                       data:$(this).serialize(),
                       success:function(data){
                            $(".load-msg").hide();
                         if(data.success==true)
                         {
                             $(".msg-success ").slideDown();
                             $(".msg-error ").hide();
                         }
                         else
                         {
                                $(".msg-hide ").slideDown();
                                 $(".msg-error").fadeIn();
                                  $('html,body').animate({
                                scrollTop: $(".msg-error").offset().top-140},
                                'slow');
                            $.each(data.errors,function(i,error){
                               
                                $(".msg-error").append("<li>"+error+"</li>");
                               
                            })
                         }
                       },
                       error:function(){
                           alert("un erreur s'est produite , s'il vous plait contacter le developpeur pour resoudre ce problem");
                       }
                   })
               })
                var loaded = false;
                window.onload = function(){
                    $(".preload").fadeOut();
                    loaded = true;
                }

                setTimeout(function(){
                    if(!loaded)
                    {
                        $(".preload").fadeOut();
                    }}                   
                    ,3000);
              $(window).scroll(function(){
                scrolled = true;
                    })
                    
                    if(scrolled=true)
                    {
                        ChnageScrollNav();
                    }
              function ChnageScrollNav()
                {
                    var countCharg= false;
                    $(window).scroll(function() {
                            
                                        if ($(this).scrollTop() <=90)
                                        {
                                            $(".navbar-inverse").css("backgroundColor","rgba(255, 255, 255, 0.78)");
                                        }
                                        if ($(this).scrollTop() <= $('.chiffre-cle').offset().top-100 && $(this).scrollTop()  >=100) {
                                            removeActiveClass();
                                            $(".navbar-inverse").css("backgroundColor","white");
                                            if(!countCharg)
                                            {
                                                $('#count1').animateNumber({ number: {{$general[0]->partners}} }, 3000);
                                                $('#count2').animateNumber({ number: {{$general[0]->entreprise}} }, 3000);
                                                $('#count3').animateNumber({ number: {{$general[0]->projet}} }, 3000);
                                                $('#count4').animateNumber({ number: {{$general[0]->evenment}} }, 3000);
                                                countCharg=true;
                                            }
                                        }
                                        if ($(this).scrollTop() >= $('.aboutus').offset().top-300) {
                                            removeActiveClass();
                                            $('.navbar-nav a').eq(0).addClass('active-nav');
                                        }

                                        if ($(this).scrollTop() >= $('.offre-tarifs').offset().top-300) {
                                            removeActiveClass();
                                            $('.navbar-nav a').eq(1).addClass('active-nav');
                                        }

                                        if ($(this).scrollTop() >= $('.partners').offset().top-300) {
                                            removeActiveClass();
                                            $('.navbar-nav a').eq(2).addClass('active-nav');
                                        }
                                        if ($(this).scrollTop() >= $('.actualites').offset().top-300) {
                                            removeActiveClass();
                                            $('.navbar-nav a').eq(3).addClass('active-nav');
                                        }
                                        if ($(this).scrollTop() >= $('.contact').offset().top-300) {
                                            removeActiveClass();
                                            $('.navbar-nav a').eq(4).addClass('active-nav');
                                        }
                                    

                                    });
                            }
         })

     
        //   $('#date').datepicker('setDates',
        //    [ 
        //        @foreach($events as $event)
        //         new Date("{{str_replace("-","/",$event->date) }}" ),
        //        @endforeach
        //    ])
            $('#date').datepicker('setDates', new Date("{{str_replace("-","/",$events->last()->date) }}"));
            $('#date').datepicker().on('changeDate', function (ev) {
             
              var dateLenght = $("#date").val().length;
              var date ="";
              var date_start = dateLenght-10;
              for(var i=date_start;i<=dateLenght-1;i++)
              {
            
                  date = date + $("#date").val()[i];
              }
              console.log(date);
              
               date = date.replace('/',"-");
              date = date.replace('/',"-");

              var dateFix = new Date(date);
              var day =dateFix.getMonth()+1;
              date = dateFix.getFullYear()+"-"+day+"-"+dateFix.getDate();
            
              var daa
                $.ajax({
                    url:"{{route('event')}}",
                    data:{date:date},
                    success:function(data){
                    
                        console.log(data);
                       
                        if(data.success==true)
                        {

                                    $(".event-day").html("");
                                   
                                    $.each(data.events,function(i,event){
                                    $(".event-day").append(`
                                        <div class="col-md-6" style="margin-bottom:60px">
                                                    <div class="single-event">
                                                        <img src="`+event.icon+`" alt="" class="img-event">
                                                        <h4>`+event.titre+`</h4>
                                                        
                                                        <div class="row">   
                                                            <div class="col-md-4 col-xs-12">
                                                                <img src="{{asset('img/calendar.png')}}" alt="">
                                                            </div>
                                                            <div class="col-md-6 col-xs-12">
                                                                <p>`+event.date_name+`<</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">   
                                                            <div class="col-md-4 col-xs-12">
                                                                <img src="{{asset('img/clock.png')}}" alt="">
                                                            </div>
                                                            <div class="col-md-6 col-xs-12">
                                                                <p>`+event.heur+`</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">   
                                                            <div class="col-md-4 col-xs-12">
                                                                <img src="{{asset('img/location.png')}}" alt="">
                                                            </div>
                                                            <div class="col-md-6 col-xs-12">
                                                                <p>`+event.adress+`</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                            
                                                </div>
                                    `)
                                    })
                     }
                     else
                     {
                         alert("Aucun événement trouve pour cette date");
                          $('#date').datepicker('setDates', new Date("{{str_replace("-","/",$events->last()->date) }}"));
                        

                     }
                    },
                    error:function(){
                        alert("non");
                        
                  }
                })
            });
    </script>   
</body>
</html>