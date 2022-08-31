<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReviewModel extends Model
{
    protected $table ='clint_review';
    protected $primaryKey ='id';
    public $incrementing =true;
    protected $keyType = 'int';
    public $timestamps = false;
}
