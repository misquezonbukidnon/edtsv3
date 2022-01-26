<?php

namespace App\Models;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttachmentList extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function attachment()
    {
        return $this->hasMany(Attachment::class);
    }
}
