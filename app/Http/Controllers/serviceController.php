<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;
class serviceController extends Controller
{
    public function onSelect(){
        $result = ServiceModel::all();
        return $result;
    }
}
