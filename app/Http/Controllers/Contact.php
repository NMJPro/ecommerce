<?php

namespace App\Http\Controllers\Contacts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contacts\Contact;
use App\Http\Requests\Contacts\Contact as ContactRequest;



class Contact extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($lastname = null)
    {
        $contact = Contact::withTrashed()->oldest('lastname')->paginate(5);
        return view('dashboard.template.pages.examples.contacts', compact('contact'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
