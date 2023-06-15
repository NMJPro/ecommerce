<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{CategoryLevel1, CategoryLevel2};
use App\Http\Requests\CategoryLevel2 as CategoryLevel2Request;

class CategoryLevel2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug = null)
    {
        $query = $slug ? CategoryLevel1::whereSlug($slug)->firstOrFail()->CategoryLevel2s() : CategoryLevel2::query();
        $CategoryLevel2s = $query->withTrashed()->oldest('title')->paginate(5);
        $CategoryLevel1s = CategoryLevel1::all();
        return view('categories.level2.index', compact('CategoryLevel2s', 'CategoryLevel1s', 'slug'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $CategoryLevel1s = CategoryLevel1::all();
        return view('categories.level2.create', compact('CategoryLevel1s'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryLevel2Request $CategoryLevel2Request)
    {
        CategoryLevel2::create($CategoryLevel2Request->all());
        return redirect()->route('CategoryLevel2s.index')->with('info', 'La categorie a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $CategoryLevel2 = CategoryLevel2::find($id);
        if(!$CategoryLevel2) return response("CategoryLevel2 with $id is not found", 404);
        $CategoryLevel1 = $CategoryLevel2->CategoryLevel1->title;
        return view('categories.level2.show', compact('CategoryLevel2', 'CategoryLevel1'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $CategoryLevel2 = CategoryLevel2::find($id);
        if(!$CategoryLevel2) return response("CategoryLevel2 with $id is not found", 404);
        return view('categories.level2.edit', compact('CategoryLevel2'));
    }       
    public function update(CategoryLevel2Request $CategoryLevel2Request, string $id)
    {
        $CategoryLevel2 = CategoryLevel2::find($id);
        if(!$CategoryLevel2) return response("CategoryLevel2 with $id is not found", 404);
        $CategoryLevel2->update($CategoryLevel2Request->all());
        return redirect()->route('CategoryLevel2s.index')->with('info', 'La categorie a bien été modifiée');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $CategoryLevel2 = CategoryLevel2::find($id);
        if(!$CategoryLevel2) return response("CategoryLevel2 with $id is not found", 404);
        $CategoryLevel2->delete();
        return back()->with('info', 'La categorie a bien été mise dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        CategoryLevel2::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'La categorie a bien été supprimée définitivement dans la base de données.');
    }
    public function restore($id)
    {
        CategoryLevel2::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'La categorie a bien été restaurée.');
    }
}