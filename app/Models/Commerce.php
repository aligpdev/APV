<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commerce extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom_produit',
        'prix_produit',
        'descript_produit',
        'idCategorie',
        'image',
        'idTaille',
        'idCouleur',
        'user_id'
    ];


    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'idCategorie');
    }

    public function taille()
    {
        return $this->belongsTo(Taille::class, 'idTaille');
    }

    public function couleur()
    {
        return $this->belongsTo(Couleur::class, 'idCouleur');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
