<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTableModel;
class CourseController extends Controller
{
    public function onSelectFour(){
        $result = CourseTableModel::limit(4)->get();
        return $result;
    }
    public function onSelectAll(){
            $result = CourseTableModel::all();
            return $result; 
    }
    public function onSelectDetails(Request $req){
          $id = $req->input('id');
          $result = CourseTableModel::where(['id'=>$id])->get();
          return $result;
        
    }
    
}
