<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    public function abonare(Request $request) 
    {
        $request->validate([
            'nume' => 'required|string',
            'email' => 'required|string'
        ]); //validare

        $mail_existent=  DB::table('newsletter')
        ->where('email',$request->input('email'))
        ->exists();//verificare adresa inregistrata

        if($mail_existent){
            return redirect()->route('welcome')->with('error', 'Adresa de email este deja inregistrata.');
        }
        try{
        DB::table('newsletter')->insert([
            'nume' => $request->input('nume'),
            'email' =>$request->input('email')

        ]); //inregistrare
        return redirect()->route('welcome')->with('success', 'Felicitari ! V-ati abonat cu succes.');
        } catch(\Exception $e){ //in caz de eroare
            return redirect()->route('welcome')->with('error','A aparut o eroare, va rugam sa incercati mai tarziu.');
        }
    }
}
