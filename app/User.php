<?php

namespace App;

use App\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
    
    
    public function notes(){
        return $this->hasMany(Note::class);
    }
    public function roles(){
        
        return $this->belongsToMany(Role::class);
    }
    public function hasRole($role){
        if(is_string($role)){    //soton
            return $this->roles->contains('name',$role);
        }
                //helper function aya taghatoe dare ya  na
//        return !! $role->intersect($this->roles)->count();
        
        foreach ($role as $r){
            if($this->hasRole($r->name)){
                return true;
            }
        }
        
        
    }
    
    
    //accessor
    public function getUsernameAttribute($value){
        return strtoupper($value);
    }
    //mutators
    public function setUsernameAttrebiute($value){
        $this->attributes['username']= strtolower($value);//save in database tolower
    }
}
