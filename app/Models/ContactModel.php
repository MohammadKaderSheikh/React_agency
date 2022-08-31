<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table ='contact_table';
    protected $primaryKey ='id';
    public $incrementing =true;
    protected $keyType = 'int';
    public $timestamps = false;
}
