<?php

namespace App\Http\Controllers\Backend;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;

class MenuController extends Controller
{

    // Store the menu items
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'url' => ['required', 'max:255'],
        ]);

        Menu::create($request->all());

        return Redirect::route('menu.edit');

    }

    public function edit(Request $request): Response
    {

        return Inertia::render('Menu/Edit', [
            'links' => Menu::all(),
        ]);
    }

    /**
     * Delete Menu Item
     */
    public function destroy(Request $request): RedirectResponse
    {
        // dd($request->id);
        $request->validate([
            'id' => ['required'],
        ]);

        Menu::find($request->id)->delete();

        return Redirect::route('menu.edit');
    }

    // send links to frontend
    public function menuLinks(){
        $links = Menu::all();

        return response()->json($links);
    }
}
