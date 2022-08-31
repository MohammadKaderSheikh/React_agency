<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chartDataModel;

class ChartDataController extends Controller
{
    public function onAllSelect(){
        $result = chartDataModel::all();
        return $result;
    }
}
