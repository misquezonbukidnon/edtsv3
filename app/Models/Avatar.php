<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avatar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'path'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
