<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Productos extends Model
{
    protected $fillable = ['nombre', 'precio', 'stock', 'categoria_id', 'proveedor_id', 'active'];

    protected $casts = ['active' => 'boolean'];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categorias::class, 'categoria_id');
    }

    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(Proveedores::class, 'proveedor_id');
    }

    public function ventas(): HasMany
    {
        return $this->hasMany(Ventas::class, 'producto_id');
    }
}