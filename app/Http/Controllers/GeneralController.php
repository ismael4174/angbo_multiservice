<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Caroussel;
use App\Models\MessagesContact;
use App\Models\Newsletter;
use App\Models\ParametresGlobaux;
use App\Models\Produit;
use App\Models\ReseauSocial;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function agences()
    {
        // $agences = Agence::all();

        $agences = Agence::with('service_agences')
            ->select('agences.*')
            ->orderBy('nom')
            ->get();

        return view('agence', compact('agences'));
    }
    public function services()
    {

        $services = Service::all();
        return view('service', compact('services'));
    }
    public function logistiques()
    {
        // Récupère tous les caroussel
        $slides = Caroussel::all()->where('type_carousel_id', 1);
        $services = Service::all()->where('type_service_id', 1);
        $abouts = ParametresGlobaux::all();
        return view('welcome', compact('slides', 'services', 'abouts'));
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

    public function vehicule()
    {
        $slide2s = Caroussel::all()->where('type_carousel_id', 3);
        $service1s = Service::all()->where('type_service_id', 2);
        $produits = Produit::whereIn('service_id', [9, 10, 11, 12, 13, 14])->get();
        return view('vehicule', compact('slide2s', 'service1s', 'produits'));
    }
    public function piece()
    {
        $slide1s = Caroussel::all()->where('type_carousel_id', 2);
        $service2s = Service::all()->where('type_service_id', 3);

        return view('piece', compact('slide1s', 'service2s'));
    }
}
