<?php

namespace App\Entities;

use App\Entities\motonet\Derivations;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Http\Repositories\ProfileRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class User extends EntityUser implements AuthenticatableContract, CanResetPasswordContract
{

    protected $connection = 'user';

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name', 'email', 'password','profiles_id','db'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);

    }

    public function Perfil()
    {

        //Config::set('database.connections.mysql.database', Auth::user()->db);
        DB::setDefaultConnection('mysql');

       return $this->belongsTo(\App\Entities\Profile::getClass(),'profiles_id');
    }


    public function Derivations()
    {
        return $this->hasMany(Derivations::getClass());
    }

    public function getFullNameAttribute()
    {
        return $this->attributes['last_name'] .' '.$this->attributes['name'];
    }
}
