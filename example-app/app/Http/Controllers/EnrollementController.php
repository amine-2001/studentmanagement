<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Enrollement;
use illuminate\View\View;

class EnrollementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $enrollements = Enrollement::all();
        return view ('enrollements.index')->with('enrollements', $enrollements);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('enrollements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Enrollement::create($input);
        return redirect('enrollements')->with('flash_message', 'Enrollement Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $enrollements = Enrollement::find($id);
        return view('enrollements.show')->with('enrollements', $enrollements);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $enrollements = Enrollement::find($id);
        return view('enrollements.edit')->with('enrollements', $enrollements);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $enrollements = Enrollement::find($id);
        $input = $request->all();
        $enrollements->update($input);
        return redirect('enrollements')->with('flash_message', 'Enrollement Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Enrollement::destroy($id);
        return redirect('enrollements')->with('flash_message', 'Enrollement deleted!');
    }
}
