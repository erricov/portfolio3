<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{

    protected $menu;

    public function __construct()
    {
        $this->menu = Menu::orderBy('sort_order')->get();
    }

    public function homepage()
    {
        return Inertia::render('Homepage', [
            'menu' => $this->menu
        ]);
    }

    public function about()
    {
        return Inertia::render('About', [
            'menu' => $this->menu
        ]);
    }

    public function services()
    {
        return Inertia::render('Services', [
            'menu' => $this->menu
        ]);
    }

    // public function portfolio()
    // {
    //     return Inertia::render('Portfolio');
    // }

    public function contact()
    {
        return Inertia::render('Contact', [
            'menu' => $this->menu
        ]);
    }
}
