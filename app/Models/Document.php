<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use App\Models\Office;
use App\Models\Status;
use App\Models\Supplier;
use App\Models\Canvasser;
use App\Models\Attachment;
use App\Models\Endorsement;
use App\Models\ProcessType;
use App\Models\TimelineUpdate;
use App\Models\PurchaseDescription;
use App\Models\DocumentProcessStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_of_entry',
        'reference_id',
        'sub_reference_id', //nullable
        'description',
        'process_type_id',
        'office_id',
        'purchase_description_id',
        'abc_amount',
        'lcb_amount', // nullable
        'supplier_id', // nullable
        'canvasser_id', // nullable
        'status_id',
        'users_id',
        'document_process_status_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function proccessType()
    {
        return $this->belongsTo(ProcessType::class, 'process_type_id');
    }

    public function office()
    {
        return $this->belongsTo(Office::class, 'office_id');
    }

    public function purchaseDescription()
    {
        return $this->belongsTo(PurchaseDescription::class, 'purchase_description_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function canvasser()
    {
        return $this->belongsTo(Canvasser::class, 'canvasser_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    // public function timelineUpdate()
    // {
    //     return $this->belongsTo(TimelineUpdate::class, 'timeline_update_id');
    // }

    public function documentProcessStatus()
    {
        return $this->belongsTo(DocumentProcessStatus::class, 'document_process_status_id');
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function attachment()
    {
        return $this->hasMany(Attachment::class);
    }

    public function endorsement()
    {
        return $this->hasMany(Endorsement::class);
    }
}
