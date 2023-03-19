<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(): View
    {
        $collections = Collection::all();

        return view('collections.index', [
            'collections' => $collections,
        ]);
    }

    public function show(Collection $collection): View
    {
        $collections = Collection::all();

        return view('collections.show', [
            'collection' => $collection,
        ]);
    }
}
