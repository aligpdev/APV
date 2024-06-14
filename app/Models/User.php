<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'prenom',
        'email',
        'telephone',
        'password',
        'image',
        'role',
    ];

    public function commerces(): HasMany{
        return $this->hasMany(Commerce::class);
    }
}
