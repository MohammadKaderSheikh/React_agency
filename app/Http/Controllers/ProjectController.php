<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;

class ProjectController extends Controller
{
    public function onAllSelect3(){
        $result = ProjectModel::limit(3)->get();
        return $result;
    }
    public function onAllSelectAll(){
        $result = ProjectModel::all();
        return $result;
    }
    public function onSelectDetail(Request $req){
        $id = $req->input('id');
        $result =ProjectModel::where('id',$id)->get();
        return $result;
    }
}
