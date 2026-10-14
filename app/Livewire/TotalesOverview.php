<?php

namespace App\Filament\Widgets;

use App\Models\Categorias;
use App\Models\Clientes;
use App\Models\Productos;
use App\Models\Proveedores;
use App\Models\Ventas;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalesOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Categorías', Categorias::count())
                ->description('Categorías registradas'),
            Stat::make('Proveedores', Proveedores::count())
                ->description('Proveedores registrados'),
            Stat::make('Clientes', Clientes::count())
                ->description('Clientes registrados'),
            Stat::make('Productos', Productos::count())
                ->description('Productos registrados'),
            Stat::make('Ventas', Ventas::count())
                ->description('Operaciones registradas'),
        ];
    }
}