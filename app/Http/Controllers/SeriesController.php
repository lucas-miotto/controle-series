<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Game of Thrones',
            'Breaking Bad',
            'Lost'
        ];

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
}
