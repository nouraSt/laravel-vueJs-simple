<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class Ville extends Model
{
    use HasFactory;
    protected $fillable = [        
        'nom',
        'id_region'
   ]; 
   public function region(){
    $this->belongsTo(Region::class);
}
}
