<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Films;
use Illuminate\Http\RedirectResponse;

class FilmsController extends Controller
{
    public function index(): View
    {
        $films = Films::all();

        return view('films.index', compact('films'));
    }

    public function create(): View
    {
        return view('films.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Films::create($request->all());

        return redirect()->route('films.index')->with('success', 'Film added successfully');
    }

    public function edit(Films $films): View
    {
        return view('films.edit', compact('films'));
    }

    public function update(Request $request, Films $films): RedirectResponse
    {
        $films->update($request->all());

        return redirect()->route('films.index')->with('success', 'Films updated successfully');
    }

    public function destroy(Films $films): RedirectResponse
    {
        $films->delete();

        return redirect()->route('films.index')->with('success', 'Film deleted successfully');
    }

    public function show(Films $films): View
    {
        return view('films.show', compact('films'));
    }
}
