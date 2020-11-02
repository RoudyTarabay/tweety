<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username','email', 'password','avatar'
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

    public function getAvatarAttribute($value)
    {
        // if (!$size) {
        //     $size=50;
        // }
        // return "https://i.pravatar.cc/$size?u=". $this->email;
        return asset('storage/'.$value);
    }
    public function timeline()
    {
        //one way to do it
        // $ids=$this->follows()->pluck('id');
        // $ids->push($this->id);
        //return Tweet::whereIn('user_id', $ids)->get();

        //alternative way
        $friends=$this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $friends)
                ->orWhere('user_id', $this->id)
                ->latest()
                ->get();
    }
    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }
    public function path($append='')
    {
        $path=route('profile', $this->username);
        return $append? "{$path}/{$append}":$path;
    }
}
