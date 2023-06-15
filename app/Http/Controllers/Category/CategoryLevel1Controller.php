<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category\CategoryLevel1;
use App\Http\Requests\CategoryLevel1 as CategoryLevel1Request;

class CategoryLevel1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $CategoryLevel1s = CategoryLevel1::paginate(5);
        return view('categories.level1.index', compact('CategoryLevel1s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.level1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryLevel1Request $CategoryLevel1request)
    {
        CategoryLevel1::create($CategoryLevel1Request->all());
        return redirect()->route('CategoryLevel1s.index')->with('info', 'La categorie a bien été créée');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $CategoryLevel1 = CategoryLevel1::find($id);
        if(!$CategoryLevel1) return response("CategoryLevel1 with $id is not found", 404);
        return view('categories.level1.show', compact('CategoryLevel1'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $CategoryLevel1 = CategoryLevel1::find($id);
        if(!$CategoryLevel1) return response("CategoryLevel1 with $id is not found", 404);
        return view('categories.level1.edit', compact('CategoryLevel1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryLevel1Request $CategoryLevel1request, string $id)
    {
        $CategoryLevel1 = CategoryLevel1::find($id);
        if(!$CategoryLevel1) return response("CategoryLevel1 with $id is not found", 404);
        $CategoryLevel1->update($filmRequest->all());
        return redirect()->route('CategoryLevel1s.index')->with('info', 'La categoie a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $CategoryLevel1 = CategoryLevel1::find($id);
        if(!$CategoryLevel1) return response("CategoryLevel1 with $id is not found", 404);
        $CategoryLevel1->delete();
        return back()->with('info', 'La categorie a bien été envoyée dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        CategoryLevel1::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'La categorie a bien été supprimée définitivement dans la base de données.');
    }

    public function restore($id)
    {
        CategoryLevel1::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'La categorie a bien été restaurée.');
    }
}
