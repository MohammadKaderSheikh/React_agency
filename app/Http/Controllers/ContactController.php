<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
class ContactController extends Controller
{
     public function onContactSendRequest( Request $req){
            $name = $req->input('name');
            $email = $req->input('email');
            $msg = $req->input('msg');
            $result = ContactModel::insert(['name'=>$name,'email'=>$email,'massege'=>$msg]);
            
            if($result==true){
                return "insert succes";
            }else{
                return "data not inserted ";
            }
     }
}
