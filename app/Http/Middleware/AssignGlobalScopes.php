<?php

namespace App\Http\Middleware;

use App\Models\Schedule;
use Closure;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssignGlobalScopes
{
    public function handle(Request $request, Closure $next): Response
    {
        Schedule::addGlobalScope(function (Builder $query) {
            $query->whereBelongsTo(Filament::auth()->user(), 'owner');
        });
        return $next($request);
    }
}
