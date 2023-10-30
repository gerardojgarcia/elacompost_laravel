<?php

namespace App\Http\Controllers;

use App\Models\Compost;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class CompostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Compost/Index',[
            //
        ]);
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
    public function store(Request $request): RedirectResponse
    {
        //
        $validated = $request->validate([

            'weight' => 'required',

        ]);



        $request->user()->compost()->create($validated);



        return redirect(route('compost.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Compost $compost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compost $compost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compost $compost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compost $compost)
    {
        //
    }
}
