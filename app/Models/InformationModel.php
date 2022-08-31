<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationModel extends Model
{
    protected $table ='information_ect';
    protected $primaryKey ='id';
    public $incrementing =true;
    protected $keyType = 'int';
    public $timestamps = false;
}
