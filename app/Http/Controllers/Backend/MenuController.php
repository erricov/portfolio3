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

    public function index(Request $request): Response
    {

        return Inertia::render('Menu/Index', [
            'links' => Menu::orderBy('sort_order')->get(),
        ]);
    }

    // Store the menu items
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'url' => ['required', 'max:255'],
            'type' => ['required', 'max:255'],
            'sort_order' => ['required', 'integer'],
        ]);

        Menu::create($request->all());

        return Redirect::route('menu.edit');

    }

    /**
     * Update Menu Item
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

        Menu::find($request->id)->update($request->all());

        return Redirect::route('menu.edit');
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
        $links = Menu::orderBy('sort_order')->get();

        return response()->json($links);
    }
}
