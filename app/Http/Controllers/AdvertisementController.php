<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);

            // Enregistrement des informations dans la base de données
            $imageModel = new Advertisement();
            $imageModel->name = $imageName; // Vous pouvez utiliser le nom original ici si vous le souhaitez
            $imageModel->image = 'storage/images/' . $imageName; // Chemin où l'image est stockée
            $imageModel->save();

            return redirect('/dashboard/advertisement')->with('success', 'image importé avec succès');
        }

        return back()->withErrors(['message' => 'Image non importé']);
    }

    public function index()
    {
        $images = Advertisement::all();

        return view('welcome', compact('images'));
    }

    public function destroy($id)
    {
        $image = Advertisement::findOrFail($id);

        // Supprimer l'image du stockage
        Storage::delete('public/images/' . $image->name);

        // Supprimer l'enregistrement de la base de données
        $image->delete();

        return redirect('/dashboard/advertisement')->with('success', 'image supprimé avec succès');
    }
}
