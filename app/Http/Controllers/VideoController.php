<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeEtcModel;

class VideoController extends Controller
{
    public function onAllSelect(){
        $result = HomeEtcModel::select('video_description','video_url')->get();
        return $result;
    }
}
