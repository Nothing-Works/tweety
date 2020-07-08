<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        return 'https://picsum.photos/seed/'.$this->email;
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->get()
        ;
        // or using our relationship
        return $this->tweets()
            ->orWhereIn('user_id', $friends)
            ->latest()
            ->get()
        ;

        // or do it all in single one query
        return $this
            ->tweets()
            ->orWhereHas('user', function ($q) {
                $q->whereHas('followers', function ($q) {
                    $q->where('user_id', $this->id);
                });
            })
            ->latest()
            ->get()
        ;
    }

    public function path()
    {
        return route('profile', $this);
    }
}
