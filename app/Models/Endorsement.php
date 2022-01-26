<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use App\Models\Action;
use App\Models\Office;
use App\Models\Status;
use App\Models\Document;
use App\Models\Endorser;
use App\Models\Attachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Endorsement extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_id',
        'endorsing_office_id',
        'receiving_offices_id',
        'date_endorsed',
        'date_received',
        'status_id',
        'action_id',
        'user_id',
        'endorser_id'
    ];

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

    public function endorsingOffice()
    {
        return $this->belongsTo(Office::class, 'endorsing_office_id');
    }

    public function receivingOffice()
    {
        return $this->belongsTo(Office::class, 'receiving_office_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function attachment()
    {
        return $this->hasMany(Attachment::class);
    }

    public function action()
    {
        return $this->belongsTo(Action::class, 'action_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function endorser()
    {
        return $this->belongsTo(Endorser::class, 'endorser_id');
    }
}
