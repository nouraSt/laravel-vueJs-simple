<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Competence extends Model
{
    use HasFactory;
    protected $fillable = [        
        'nom',
   ]; 

   public function Users(){
    return $this->hasMany(User::class);
   }

}
