<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullnameAttribute()
    {
        return ucfirst($this->firstname)
            . strtoupper(empty($this->middlename) ? '' : ' ' . substr($this->middlename, 0, 1)) . '.'
            . ' ' . ucfirst($this->lastname);
    }

    /**
     * Retrieve the default photo from storage.
     * Supply a base64 png image if the `photo` column is null.
     *
     * @return string
     */
    public function getAvatarAttribute(): string
    {
        if( !empty($this->photo) && file_exists(storage_path($this->photo))) {
            return "data:image/png;base64, " . base64_encode(Storage::get($this->photo));
        } else {
            return "data:image/png;base64, " . base64_encode(file_get_contents(storage_path('photos/person.png')));
        }
        
    }
}
