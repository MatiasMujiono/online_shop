<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Flight extends Model {
    public $fillable = ['name','airline','time_start','time_end','description','delay_to','destination','from','price'];
}