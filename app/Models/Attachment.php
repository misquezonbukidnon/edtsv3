<?php

namespace App\Models;

use App\Models\Document;
use App\Models\Endorsement;
use App\Models\AttachmentList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_id',
        'endorsement_id',
        'attachment_list_id' 
    ];

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

    public function endorsement()
    {
        return $this->belongsTo(Endorsement::class, 'endorsement_id');
    }

    public function attachmentList()
    {
        return $this->belongsTo(AttachmentList::class, 'attachment_list_id');
    }
}
