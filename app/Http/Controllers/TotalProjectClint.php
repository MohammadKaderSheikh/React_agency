<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeEtcModel;
class TotalProjectClint extends Controller
{
    public function onAllSelect(){
        $result = HomeEtcModel::select('total_project','tatal_clint')->get();
        return $result;
    }
}
