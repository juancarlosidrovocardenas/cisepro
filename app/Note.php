<?php

namespace webcisepro;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $connection='web';
    protected $table = 'notes';
}
