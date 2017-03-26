<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;
use Storage;
use Session;
use App\Slider;
use App\Temoignage;
use Validator;
use App\Event;
use App\Event_name;

class AdminControler extends Controller
{
    public function index()
    {
        return view('General',[
            "general"=>General::all(),
        ]);
    }
    public function General()
    {
        
        return view("General",
        [
            "general"=>General::all(),
        ]);
    }
    public function changeGeneral(Request $request)
    {
        
        $this->validate($request,[
            "titre"=>"required|max:250",
            "GooglePlus"=>"required|max:250",
            "twitter"=>"required|max:250",
            "linkedin"=>"required|max:250",
            "instagram"=>"required|max:250",
            "facebook"=>"required|max:250",
            "email"=>"required|max:250",
        ]);

        $general= General::find(1);
        $general->titre = $request->titre;
        $general->facebook = $request->facebook;
        $general->instagram = $request->instagram;
        $general->linkedin = $request->linkedin;
        $general->twitter = $request->twitter;
        $general->email = $request->email;
        $general->google = $request->GooglePlus;
        $general->zopim = $request->zopim;
        $general->youtube = $request->youtube;
        $general->save();


        if($request->hasFile("logo"))
        {
            $url = Storage::disk('asset')->putFileAs('img',$request->logo,"logo.png");
           
        }
        Session::flash('success',"Tous les modifications ont été effectuées");
        return redirect()->back();
    }

    function slider()
    {
        return view('slider',[
            "slider"=>Slider::all(),
        ]);
    }
    public function saveSlider(Request $request)
    {
        //if slider 1 
        if($request->slider==1)
        {
            
            $this->validate($request,[
                "paragraph"=>"required",
                "header"=>"required"
            ]);
           
          
           
            if($request->hasFile("image"))
            {
                $url = Storage::disk('asset')->putFileAs('img',$request->image,"slider1.png");
            }
      
            $slider =Slider::find(1);
            $slider->titre=$request->header;
            $slider->paragraph=$request->paragraph;
            $slider->save();

            Session::flash('success1',"Tous les modifications ont été effectuées");
            return redirect()->back();
        }
        else
        {
             $this->validate($request,[
                "paragraph"=>"required",
                "header"=>"required",
                "mot1"=>"required",
                "mot2"=>"required",
                "mot3"=>"required",
            ]);
            
            if($request->hasFile('image'))
            {
                $url = Storage::disk('asset')->putFileAs('img',$request->image,"slider2.png");
            }

            $slider =Slider::find(2);
            $slider->titre=$request->header;
            $slider->paragraph=$request->paragraph;
             $slider->sub1 =$request->mot1;
             $slider->sub1 =$request->mot2;
             $slider->sub3 =$request->mot3;
            $slider->save();

            Session::flash('success2',"Tous les modifications ont été effectuées");
            return redirect()->back();

        }
    }


    public function temoignage()
    {
    return view('temoignage',[
        "general"=>General::all(),
        "temoignages"=>Temoignage::all(),
    ]);
    }
    public function saveChiffre(Request $request)
    {
        $this->validate($request,[
                "partners"=>"required",
                "entreprise"=>"required",
                "projet"=>"required",
                "evenment"=>"required",
            ]);
            $general = General::find(1);
            $general->partners =$request->partners;
            $general->entreprise =$request->entreprise;
            $general->projet =$request->projet;
            $general->evenment =$request->evenment;
      
            $general->save();

            Session::flash('success',"Tous les modifications ont été effectuées");
            return redirect()->back();
     }
     public function saveTemoignage(Request $request)
     {
         if($request->edit == "1")
         {
                    $validation = Validator::make($request->all(),[
                    "Nom"=>"required",
                    "text"=>"required"
                ]);
                if($validation->fails())
                {
                    Session::flash('error',"Tous les modifications ont été effectuées");
                    return redirect()->back();
                }

                $temoigne = Temoignage::find($request->id);
                $temoigne->Nom = $request->Nom;
                $temoigne->text = $request->text;
                $temoigne->save();
                Session::flash('successTemgoinage',"Tous les modifications ont été effectuées");
                return redirect()->back();
         }
         else
         {
             $temoigne = Temoignage::find($request->id);
             $temoigne->delete();
             Session::flash('successTemgoinage',"Tous les modifications ont été effectuées");
                return redirect()->back();
         }
        
     }
     public function addTemoignage(Request $request)
     {
           $validation = Validator::make($request->all(),[
                    "Nom"=>"required",
                    "text"=>"required"
                ]);
                 if($validation->fails())
                {
                    Session::flash('error',"Tous les modifications ont été effectuées");
                    return redirect()->back();
                }
                $temoigne = new Temoignage();
                $temoigne->Nom = $request->Nom;
                $temoigne->text = $request->text;
                $temoigne->save();
                 Session::flash('successTemgoinage',"Tous les modifications ont été effectuées");
                return redirect()->back();
     }

     public function footer()
     {
         return View('pageFooter',[
             "general"=>General::all()
         ]);
     }
     public function footerEdit(Request $request)
     {
         $this->validate($request,[
             "text"=>"required",
            "googlemap"=>"required"      
         ]);

         $general = General::find(1);
         $general->footer = $request->text;
         $general->googlemap = $request->googlemap;
         $general->update();

         Session::flash('success',"Tous les modifications ont été effectuées");
                return redirect()->back();
     }
     public function evenment()
     {
         return view('evenment',[
             "events"=>Event::all()->sortByDesc('id')->values(),
         ]);
     }
     public function editEvent(Request $request)
     {
        if($request->btn =="editevent")
        {
            $this->validate($request,[
                "nom"=>"required",
                "heur"=>"required",
                "adress"=>"required" ,
                "date_name"=>"required"    
            ]);
        
            $event = Event_name::find($request->id);
            $event->titre= $request->nom;
            $event->heur = $request->heur;
            $event->adress=$request->adress;
            $event->date_name = $request->date_name ;
            $event->icon = $request->icon;
            $event->save();
              Session::flash('success',"Tous les modifications ont été effectuées");
                return redirect()->back();
        }
        elseif($request->btn == "editdate")
        {
            
            $this->validate($request,[
                "date"=>"required",
                  
            ]);
            $eventdate = Event::find($request->event_id);
            $eventdate->date = $request->date;
            $eventdate->save();
            Session::flash('success',"Tous les modifications ont été effectuées");
                return redirect()->back();
        }
        elseif($request->btn =="ajoutevent")
        {
            $this->validate($request,[
                "nom"=>"required",
                "heur"=>"required",
                "adress"=>"required",
                "date_name"=>"required",
                "icon"=>"required"    
            ]);
             $event = new Event_name();
            $event->titre= $request->nom;
            $event->heur = $request->heur;
            $event->adress=$request->adress;
            $event->id_event= $request->id_event;
            $event->date_name = $request->date_name ;
            $event->icon = $request->icon;
            $event->save();
              Session::flash('success',"Tous les modifications ont été effectuées");
                return redirect()->back();
        }
        elseif($request->btn == "addDateEvent")
        {
            $this->validate($request,[
                "nom"=>"required",
                "heur"=>"required",
                "adress"=>"required",
                "date_name"=>"required",
                "icon"=>"required",
                "date"=>"required"    
            ]);
            $event = new Event();
            $event->date = $request->date;
            $event->save();
            $event_name = new Event_name();
            $event_name->titre= $request->nom;
            $event_name->heur = $request->heur;
            $event_name->adress=$request->adress;
            $event_name->id_event=$event->id;
            $event_name->date_name = $request->date_name ;
            $event_name->icon = $request->icon;
            $event_name->save();
            return "sdsd";
        }
      
     }
}
