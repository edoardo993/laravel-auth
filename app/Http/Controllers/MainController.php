<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplement;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplements = Supplement::all();
        return view('supplements.index', compact('supplements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validateForm($request);
        $data = $request->all();

        $supplement = new Supplement();
        $supplement->fill($data);
        $supplement->save();

        $supplementStored = Supplement::orderBy('id', 'DESC')->first();
        return redirect()->route('supplements.show', $supplementStored);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Supplement $supplement)
    {
        return view('supplements.show', compact('supplement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplement $supplement)
    {
        return view('supplements.edit', compact('supplement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplement $supplement)
    {
        $this->validateForm($request);
        $data = $request->all();
        $supplement->update($data);
        return redirect()->route('supplements.show', compact('supplement'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplement $supplement)
    {
        $supplement->delete();
        return redirect()->route('supplements.index');
    }

    protected function validateForm(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required|max:255',
            'ingredients' => 'required|max:2000',
            'quantity' => 'required',
            'description' => 'required|max:2000',
            'use' => 'required|max:2000',
            'price' => 'required|between:0, 99.99',
            'img_url' => 'required|max:2048',
        ]);
    }
}
