<?php

namespace App\Models;

use App\Models\Endorsement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function endorsement()
    {
        return $this->hasMany(Endorsement::class);
    }
}
