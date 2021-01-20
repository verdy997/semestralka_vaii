<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'user_id'
    ];


    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ownedBy(User $user)
    {
        return $user->id === $this->user_id;
    }
}
