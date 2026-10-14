<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clientes extends Model
{
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion', 'active'];

    protected $casts = ['active' => 'boolean'];

    public function ventas(): HasMany
    {
        return $this->hasMany(Ventas::class, 'cliente_id');
    }
}