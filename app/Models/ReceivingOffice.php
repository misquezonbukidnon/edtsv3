<?php

namespace App\Models;

use App\Models\Endorsement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReceivingOffice extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'abbr'
    ];

    public function endorsement()
    {
        return $this->hasMany(Endorsement::class);
    }
}
