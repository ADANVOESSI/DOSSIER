<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['profil_name','user_id','avatar'];

    // Un profil n'a qu'un auteur
    public function user(){
        return $thes->belongsTo(User::class);
    }

}
