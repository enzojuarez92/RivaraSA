<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;
    use SoftDeletes;

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

    public function scopePermitidos($query)
    {
        if (auth()->user()->can('view', $this)) {
            return  $query;
        }
        
        return User::where('id', auth()->id());
    }



    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password']= bcrypt($password);
    }
}
