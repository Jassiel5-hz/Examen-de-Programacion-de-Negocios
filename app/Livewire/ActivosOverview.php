<?php

namespace App\Filament\Widgets;

use App\Models\Categorias;
use App\Models\Clientes;
use App\Models\Productos;
use App\Models\Proveedores;
use App\Models\Ventas;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ActivosOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Categorías activas', Categorias::where('active', true)->count())
                ->color('success'),
            Stat::make('Proveedores activos', Proveedores::where('active', true)->count())
                ->color('success'),
            Stat::make('Clientes activos', Clientes::where('active', true)->count())
                ->color('success'),
            Stat::make('Productos activos', Productos::where('active', true)->count())
                ->color('success'),
            Stat::make('Ventas activas', Ventas::where('active', true)->count())
                ->color('success'),
        ];
    }
}