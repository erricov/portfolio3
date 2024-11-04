<?php

namespace App\Http\Controllers\Backend;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{

    public function index(Request $request): Response
    {

        return Inertia::render('Language/Index', [
            'links' => Language::orderBy('sort_order')->get(),
        ]);
    }

    // Store the Language items
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'url' => ['required', 'max:255'],
            'type' => ['required', 'max:255'],
            'sort_order' => ['required', 'integer'],
        ]);

        Language::create($request->all());

        return Redirect::route('Language.edit');

    }

    /**
     * Update Language Item
     */
    public function update(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'id' => ['required'],
            'name' => ['required', 'max:255'],
            'url' => ['required', 'max:255'],
            'type' => ['required', 'max:255'],
            'sort_order' => ['required', 'integer'],
        ]);

        Language::find($request->id)->update($request->all());

        return Redirect::route('Language.edit');
    }

    /**
     * Delete Language Item
     */
    public function destroy(Request $request): RedirectResponse
    {
        // dd($request->id);
        $request->validate([
            'id' => ['required'],
        ]);

        Language::find($request->id)->delete();

        return Redirect::route('Language.edit');
    }

    // send links to frontend
    public function LanguageLinks(){
        $links = Language::orderBy('sort_order')->get();

        return response()->json($links);
    }
}
