<?php

namespace App\Http\Controllers;

use App\Models\Caroussel;
use App\Models\MessagesContact;
use App\Models\Newsletter;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function services()
    {
        // Récupère tous les services
        $services = Service::all();
        return view('service', compact('services'));
    }
    public function logistiques()
    {
        // Récupère tous les caroussel
        $slides = Caroussel::all()->where('type_carousel_id', 1);
        return view('welcome', compact('slides'));
    }

    public function stre(Request $request)
    {
        // ✅ Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // ✅ Enregistrement du message dans la base
        MessagesContact::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'sujet' => $request->sujet,
            'message' => $request->message,
            'date_message' => Carbon::now(),
            'lu' => false,
            'created_by' => null, // si besoin
        ]);

        // ✅ Redirection + message succès
        return redirect()->back()->with('success', '✅ Votre message a été envoyé avec succès !');
    }
    public function news(Request $request)
    {
        // ✅ Validation des données
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // ✅ Enregistrement  dans la base
        Newsletter::create([
            'email' => $request->email,
            'date_inscription' => Carbon::now(),
            'statut' => 'active',
            'created_by' => null, // si besoin
        ]);

        // ✅ Redirection + message succès
        return redirect()->back()->with('success', ' Souscription effective !');
    }
}
