<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'abbr'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
