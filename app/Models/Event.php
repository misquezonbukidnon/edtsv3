<?php

namespace App\Models;

use App\Models\User;
use App\Models\Document;
use App\Models\Endorsement;
use App\Models\TimelineUpdate;
use App\Models\TimelineComment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_id',
        'endorsement_id',
        'user_id',
        'report'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

    public function endorsement()
    {
        return $this->belongsTo(Endorsement::class, 'endorsement_id');
    }

    public function timelineUpdate()
    {
        return $this->hasMany(TimelineUpdate::class);
    }

    public function timelineComment()
    {
        return $this->hasMany(TimelineComment::class);
    }
}
