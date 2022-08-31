<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterTableModel;
class FooterController extends Controller
{
    public function onAllSelect(){
        $result = FooterTableModel::get();
        return $result;
    }
}

