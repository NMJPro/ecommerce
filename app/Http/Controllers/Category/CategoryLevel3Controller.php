<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{CategoryLevel3, CategoryLevel2};
use App\Http\Requests\CategoryLevel3 as CategoryLevel3Request;

class CategoryLevel3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug = null)
    {
        $query = $slug ? CategoryLevel2::whereSlug($slug)->firstOrFail()->CategoryLevel3s() : CategoryLevel3::query();
        $CategoryLevel3s = $query->withTrashed()->oldest('title')->paginate(5);
        $CategoryLevel2s = CategoryLevel2::all();
        return view('categories.level3.index', compact('CategoryLevel3s', 'CategoryLevel2s','slug'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $CategoryLevel2s = CategoryLevel2::all();
        return view('categories.level3.create', compact('CategoryLevel2s'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryLevel3Request $CategoryLevel3request)
    {
        CategoryLevel3::create($CategoryLevel3Request->all());
        return redirect()->route('CategoryLevel3s.index')->with('info', 'La categorie a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $CategoryLevel3 = CategoryLevel3::find($id);
        if(!$CategoryLevel3) return response("category 3 with $id is not found", 404);
        $CategoryLevel2 = $CategoryLevel3->CategoryLevel2->title;
        return view('categories.level3.show', compact('CategoryLevel3', 'CategoryLevel2'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $CategoryLevel3 = CategoryLevel3::find($id);
        if(!$CategoryLevel3) return response("CategoryLevel3 with $id is not found", 404);
        return view('categories.level3.edit', compact('CategoryLevel3'));
    }       
    public function update(CategoryLevel3Request $CategoryLevel3Request, string $id)
    {
        $CategoryLevel3 = CategoryLevel3::find($id);
        if(!$CategoryLevel3) return response("CategoryLevel3 with $id is not found", 404);
        $CategoryLevel3->update($CategoryLevel3Request->all());
        return redirect()->route('CategoryLevel3s.index')->with('info', 'La categorie a bien été modifiée');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $CategoryLevel3 = CategoryLevel3::find($id);
        if(!$CategoryLevel3) return response("CategoryLevel3 with $id is not found", 404);
        $CategoryLevel3->delete();
        return back()->with('info', 'La categorie a bien été mise dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        CategoryLevel3::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'La categorie a bien été supprimée définitivement dans la base de données.');
    }
    public function restore($id)
    {
        CategoryLevel3::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'La categorie a bien été restaurée.');
    }
}
