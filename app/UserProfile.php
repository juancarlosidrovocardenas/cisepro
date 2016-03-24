<?php

namespace webcisepro;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon as fecha;
class UserProfile extends Model
{
    protected $connection='web';
    protected $table = 'user_profiles';
    //=====================================================================================================================================================================
    public function getEdadAttribute()
    {
        return fecha::parse($this->birthdate)->age;
    }
    //=====================================================================================================================================================================
public function getBiografiaAttribute()
{
    return $this->bio;
}
}
