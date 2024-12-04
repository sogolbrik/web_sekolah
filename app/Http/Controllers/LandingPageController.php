<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing-page.data', [
            'data' => LandingPage::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('landing-page.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "name"        => "required",
            "description" => "required",
        ]);

        LandingPage::create($validation);

        return redirect()->route('landing-page.index');
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
        return view('landing-page.form-edit', [
            'landingPage' => LandingPage::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = $request->validate([
            "name"        => "required",
            "description" => "required",
        ]);

        $landingPage = LandingPage::find($id);

        $landingPage->update($validation);

        return redirect()->route('landing-page.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LandingPage::find($id)->delete();
        
        return redirect()->route('landing-page.index');
    }
}
