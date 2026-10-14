<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proveedores extends Model
{
    protected $fillable = ['nombre', 'telefono', 'email', 'active'];

    protected $casts = ['active' => 'boolean'];

    public function productos(): HasMany
    {
        return $this->hasMany(Productos::class, 'proveedor_id');
    }
}