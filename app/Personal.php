<?php

namespace webcisepro;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon as fecha;
use Riskihajar\Terbilang\Facades\Terbilang;


class Personal extends Model
{
    //
   // protected $fillable=['dbo.personal'];
 //   protected $connection='comments';
    protected $connection='cisepro';
    protected $table='personal';
//====================================================================================================================================================
    public function getFechaCompletaAttribute ()
    {
        return fecha::parse($this->FECHA_NACIMIENTO)->format('Y-m-d');
    }
    public function getFechaLetrasAttribute()
    {
        return Terbilang::date($this->FECHA_COMPLETA);
    }
}
