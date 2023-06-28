<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('nome')->get();

        // retornar a chave e variavel;
        // return view('listar-series', [
        //     'series' => $series
        // ]);
        // return view('listar-series')->with('series', $series);

        // ou utilizar o campact.
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }
    public function store(Request $request)
    {
        Serie::create($request->all());

        // return redirect()->route('series.index');
        return to_route('series.index');
    }

    public function destroy(Request $request) {
        Serie::destroy($request->series);

        return to_route('series.index');
    }

}
