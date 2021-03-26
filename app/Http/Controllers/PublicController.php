<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplement;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplements = Supplement::all();
        return view('supplements.public.index', compact('supplements'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function show(Supplement $supplement)
    {
        return view('supplements.public.show', compact('supplement'));

    }
}
