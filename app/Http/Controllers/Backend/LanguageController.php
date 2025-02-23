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
            'items' => Language::orderBy('sort_order')->get(),
        ]);
    }

    // Store the Language items
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'max:255'],
            'code' => ['required', 'max:2'],
            'is_rtl' => ['required'],
            'is_default' => ['required'],
            'is_enabled' => ['required'],
        ]);

        Language::create($request->all());

        return Redirect::route('language.edit');

    }

    /**
     * Update Language Item
     */
    public function update(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'max:255'],
            'code' => ['required', 'max:2'],
            'is_rtl' => ['required'],
            'is_default' => ['required'],
            'is_enabled' => ['required'],
        ]);

        Language::find($request->id)->update($request->all());

        return Redirect::route('language.edit');
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

        return Redirect::route('language.edit');
    }

}
