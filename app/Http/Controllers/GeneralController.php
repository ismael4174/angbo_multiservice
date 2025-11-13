<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Caroussel;
use App\Models\Marque;
use App\Models\MessagesContact;
use App\Models\Newsletter;
use App\Models\ParametresGlobaux;
use App\Models\Produit;
use App\Models\ReseauSocial;
use App\Models\Service;
use App\Models\Vehicule;
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
        // $produits = Produit::whereIn('service_id', [4, 5, 6, 7, 8])->get();
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



    public function vehicule(Request $request)
    {
        $slide2s = Caroussel::all()->where('type_carousel_id', 3);
        $service1s = Service::all()->where('type_service_id', 2);
        // Récupérer les paramètres de filtre depuis l’URL
        $marque_id = $request->get('marque_id');
        $type_transac = $request->get('type_transac');

        // Base de la requête
        $query = Vehicule::with('marque');

        // Filtrer par marque si sélectionnée
        if ($marque_id) {
            $query->where('marque_id', $marque_id);
        }

        // Filtrer par type de transaction (vente ou location)
        if ($type_transac) {
            $query->where('type_transac', $type_transac);
        }

        // Récupérer la liste finale
        $vehicules = $query->get();

        // Pour le menu de tri (liste des marques disponibles)
        $marques = Marque::all();

        return view('vehicule', compact('service1s','slide2s','vehicules', 'marques', 'marque_id', 'type_transac'));
    }


    // public function vehicule(Request $request)
    // {
    //     $slide2s = Caroussel::where('type_carousel_id', 3)->get();
    //     $service1s = Service::where('type_service_id', 2)->get();

    //     // Récupération des véhicules avec leurs marques
    //     $vehicules = Vehicule::with('marque')
    //         ->where('archive', false)
    //         ->get()
    //         ->groupBy(['type_transac', 'marque_id']); // On garde le groupBy, mais Blade doit s'adapter

    //     // Marques et types distincts pour les onglets
    //     $marques = Marque::all();
    //     $types = ['vente' => 'Vente', 'location' => 'Location'];

    //     return view('vehicule', compact('service1s', 'slide2s', 'vehicules', 'marques', 'types'));
    // }


    public function piece()
    {
        $slide1s = Caroussel::all()->where('type_carousel_id', 2);
        $service2s = Service::all()->where('type_service_id', 3);
        $produits = Produit::all()->whereIn('service_id', [15, 16, 17, 18, 19, 20]);
        return view('piece', compact('slide1s', 'service2s', 'produits'));
    }
}
