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
        return view('Brands', compact('brands'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'marque' => 'required|string',
            'lienSiteWeb' => 'required|string',
            'image' => 'required|string',
        ]);

        Brand::create($data);

        return redirect('/dashboard')->with('successAddBrand', 'Marque importée avec succès');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect('/dashboard')->with('errorDeleteBrand', 'Marque non trouvée');
        }

        $brand->delete();

        return redirect('/dashboard')->with('successDeleteBrand', 'Marque supprimée avec succès');
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect('/dashboard')->with('errorEditBrand', 'Marque non trouvée');
        }

        $data = $request->validate([
            'marque' => 'required|string',
            'lienSiteWeb' => 'required|string',
            'image' => 'required|string',
        ]);

        $brand->update($data);

        return redirect('/dashboard')->with('successEditBrand', 'Marque modifiée avec succès');
    }

}
