<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeEtcModel;
class TechDesc extends Controller
{
    public function onAllSelect(){
        $result = HomeEtcModel::select('tech_description')->get();
        return $result;
    }
}
