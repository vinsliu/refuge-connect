<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animals = [
            // [
            //     "name" => "Bella",
            //     "species" => "Chien",
            //     "age" => 5,
            //     "description" => "Une labrador joueuse et affectueuse qui adore la compagnie.",
            //     "photo" => "images/Bella.png",
            // ],
            // [
            //     "name" => "Luna",
            //     "species" => "Chat",
            //     "age" => 3,
            //     "description" => "Une chatte calme et câline qui aime les endroits tranquilles.",
            //     "photo" => "images/Luna.png",
            // ],
            // [
            //     "name" => "Max",
            //     "species" => "Chien",
            //     "age" => 2,
            //     "description" => "Un jeune chiot plein d’énergie qui adore courir et jouer dehors.",
            //     "photo" => "images/Max.png",
            // ],
            [
                "name" => "Coquillette",
                "species" => "Chien",
                "age" => 3,
                "description" => "Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.",
                "photo" => "images/Coquillette.png",
            ],
        ];

        foreach ($animals as $animal) {
            Animal::firstOrCreate(
                ['name' => $animal['name'], 'species' => $animal['species']],
                $animal
            );
        }

        return redirect()->route('home')->with('success', 'Animaux ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('pages.animal-details', ['animal' => $animal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $animal->name .= ' modifié';
        $animal->save();

        return redirect()->route('home')->with('success', 'Animal mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        try {
            $animal->delete();
            return redirect()->route('home')->with('success', 'Animal supprimé avec succès !');
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Erreur lors de la suppression de l’animal.');
        }
    }
}
