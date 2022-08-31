<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterTableModel extends Model
{
    protected $table ='footer_table';
    protected $primaryKey ='id';
    public $incrementing =true;
    protected $keyType = 'int';
    public $timestamps = false;
}
