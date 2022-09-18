<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Ville;

class InfoSup extends Model
{
    use HasFactory;
    protected $fillable = [        
        'nom',
        'prenom',
        'datenaissance'
        ,'id_ville',
        'id_user',
        'adresse',
        'email',
        'password',
        'ecole',
        'diplome',
        'date',
         'diplome',
         'file',
         'image'
   ]; 


   public function user(){
    $this->belongsTo(User::class);
}
public function ville(){
    $this->belongsTo(Ville::class);
}
}
