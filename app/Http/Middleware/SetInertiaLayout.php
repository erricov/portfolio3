<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use Inertia\Inertia;
use Closure;

class SetInertiaLayout
{
    public function handle($request, Closure $next)
    {
        // Verifica si la ruta está en el frontend o en el backend
        if ($request->is('admin/*')) {
            // Usa el layout del backend
            Inertia::setRootView('Backend.app');
        } else {
            // Usa el layout del frontend
            Inertia::setRootView('Frontend.app');
        }

        return $next($request);
    }
}