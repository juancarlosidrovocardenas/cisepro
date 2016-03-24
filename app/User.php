<?php

namespace webcisepro;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $connection='web';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','last_name', 'email', 'password','type'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password','active', 'remember_token','created_at','updated_at'];
    //=====FORMATO PARA DECLARAR ATRIBUTOS EN ELEOQUENT get<nombre del atributo >Attribute =====================================================================================
    public function getNombresCompletosAttribute()
    {
        return $this->first_name . ' '. $this->last_name;
    }
    //====RELACION =========================================================================================================================================================
    public function profile()
    {
        return$this->hasOne('webcisepro\UserProfile');
    }

}
