<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;
use App\Slider;
use App\Event;
use Response;
use App\Temoignage;
use Validator;
use Mail;
use App\Mail\SendMail;
class HomeController extends Controller
{
    public function index()
    {
        return view('home2',[
            "general"=>General::all(),
            "slider"=>Slider::all(),
            "events"=>Event::all(),
            "temoignages"=>Temoignage::all(),
        ]);
    }
    public function event(Request $request)
    {
        $event = Event::where('date',$request->date)->first();
        if($event == null)
        {
            return Response::json([
            "success"=>false,
           
        ]);
          
        }
        return Response::json([
            "success"=>true,
            "events"=>$event->Event_name,
        ]);
    }
    public function mail(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "nom"=>"required|max:80",
            "prenom"=>"required|max:80",
            "objet"=>"required|max:200",
            "mail"=>"required|max:80|email",
            "telehpone"=>"required|max:30",
            "message"=>"required|max:250",
        ]);

        if($validation->fails())
        {
            return Response::json([
                "success"=> false,
                "errors"=>$validation->errors(),
            ]);
        }
        $data = [
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "objet"=>$request->objet,
            "mail"=>$request->mail,
            "telehpone"=>$request->telehpone,
            "message"=>$request->message,
        ];
        $general = General::find(1);
        Mail::to( $general->email )->send(new SendMail($data));
        return Response::json([
                "success"=> true,
                "errors"=>$validation->errors(),
            ]);
    }
}
