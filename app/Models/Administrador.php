<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administradores';

    protected $fillable = [
        'email',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
