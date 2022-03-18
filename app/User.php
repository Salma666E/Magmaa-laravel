<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address', 'dob', 'gender','cv','job','commision_id'
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    /*
    public function meetings_users()
    {
        return $this->hasMany(Meeting_User::class);
    }
    
    public function generla_meetings_users()
    {
        return $this->hasMany(General_Meeting_User::class);
    }
    */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    /*
    public function commissionUsers()
    {
        return $this->hasMany(Commission_User::class);
    }*/
    public function commissionuser()
    {
        return $this->belongsToMany(Commission::class)->withPivot('job','transactions');
    }
    public function general_meetings()
    {
        return $this->belongsToMany(General_Meeting::class);
    }
    
    public function meetings()
    {
        return $this->belongsToMany(Meeting::class);
    }
    public function commission()
    {
        return $this->belongsTo(Commission::class);
    }
/*
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
*/
}
