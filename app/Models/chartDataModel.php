<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chartDataModel extends Model
{
    protected $table ='chartdata';
    protected $primaryKey ='id';
    public $incrementing =true;
    protected $keyType = 'int';
    public $timestamps = false; 
}
