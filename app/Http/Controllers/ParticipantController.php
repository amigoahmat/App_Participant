<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use Validator;
use DB;

class ParticipantController extends Controller
{
    public function index(){
        $participants = Participant::get();
        return view('participant/index', ['participants' => $participants]);
    }

    public function create(){
       
        return view('participant/create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required',
            'email' => 'required',
        ]);
        if($validator->passes()){
            $participant = new Participant();
            $participant->nom = $request->nom;
            $participant->prenom = $request->prenom;
            $participant->numero = $request->numero;
            $participant->email = $request->email;
            $save = $participant->save();
            if($save){
                $request->session()->flash('success', 'le participant est enregistrer avec succes...!');
                return redirect()->route('index.participant');
            }

        }else{
            return redirect()->route('index.participant')->withErrors($validator);
        }
    }

}

