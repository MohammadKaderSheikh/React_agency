<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeEtcModel;

class HomeEtcController extends Controller
{
    public function onAllSelectDesc(){
        $result = HomeEtcModel::select('tech_description')->get();
        return $result;
    }
    public function onAllSelectVideo(){
        $result = HomeEtcModel::select('video_description','video_url')->get();
        return $result;
    }
    public function onProjectClint(){
        $result = HomeEtcModel::select('total_project','tatal_clint')->get();
        return $result;
    }
    public function HomeTitle(){
        $result = HomeEtcModel::select('home_title','home_subtitle')->get();
        return $result;
    }
    
}
