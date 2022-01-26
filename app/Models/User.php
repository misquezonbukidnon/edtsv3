<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Event;
use App\Models\Avatar;
use App\Models\Office;
use App\Models\Document;
use App\Models\Endorser;
use App\Models\Endorsement;
use App\Models\EventUpdate;
use App\Models\TimelineUpdate;
use App\Models\TimelineComment;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'office_id',
        'firstname',
        'middlename',
        'lastname',
        'initial',
        'contact',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_id');
    }

    public function office()
    {
        return $this->belongsToMany(Office::class, 'office_id');
    }

    public function avatar()
    {
        return $this->hasOne(Avatar::class);
    }

    public function document()
    {
        return $this->hasMany(Document::class);
    }

    public function endorser()
    {
        return $this->hasMany(Endorser::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function endorsement()
    {
        return $this->hasMany(Endorsement::class);
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
