<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

   namespace App\Http\Controllers;

use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::where('is_active', true)
            ->with('images')
            ->latest()
            ->get();

        return view('pages.works.index', compact('works'));
    }

    public function show($slug)
    {
        $work = Work::where('slug', $slug)
            ->where('is_active', true)
            ->with('images')
            ->firstOrFail();

        return view('pages.works.show', compact('work'));
    }
}

