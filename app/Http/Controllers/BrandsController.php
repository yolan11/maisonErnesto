<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('Brand.BrandPage.index', compact('brands'));
    }

    public function showBrandCompagny()
    {
        $brands = Brand::all();
        return view('Brand.BrandPage.compagny', compact('brands'));
    }

    public function showBrandCustomer()
    {
        $brands = Brand::all();
        return view('Brand.BrandPage.customer', compact('brands'));
    }



    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'marque' => 'required',
            'logo' => 'required', // Limitez la taille et les types d'image selon vos besoins
            'categorie' => 'required', // Assurez-vous que la catégorie est soit "entreprise" soit "particulier"
        ]);

        $brand = new Brand();
        $brand->marque = $request->marque;
        $brand->image = $request->logo;
        $brand->categorie = $request->categorie;
        $brand->save();

        return redirect('/dashboard/brand')->with('success', 'image importé avec succès');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect('/dashboard/brand')->with('errorDeleteBrand', 'Marque non trouvée');
        }

        $deletedBrandName = $brand->marque;

        $brand->delete();

        return redirect('/dashboard/brand')->with('successDeleteBrand', "La marque $deletedBrandName a été supprimée avec succès");
    }

    public function update(Request $request, $id){
        // Récupérer la marque à mettre à jour
        $brand = Brand::findOrFail($id);

        $oldBrandName = $brand->marque;

        // Mettre à jour les champs avec les nouvelles valeurs
        $brand->marque = $request->input('editMarque');
        $brand->categorie = $request->input('editCategorie');
        $brand->image = $request->input('editLogo');

        // Sauvegarder les modifications
        $brand->save();

        // Rediriger avec un message de succès ou autre
        return redirect('/dashboard/brand')->with('successUpdateBrand', "La marque $oldBrandName a été mise à jour avec succès.");
    }

}
