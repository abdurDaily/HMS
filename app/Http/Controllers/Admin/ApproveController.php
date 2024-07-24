<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class ApproveController extends Controller
{
    public function getApprove(){
        $allUsers = User::select('id','name','email','created_at')->where('status',0)->simplePaginate(5);
        return view('backend.approve.approvePeoples',compact('allUsers'));
    }

    //** APPROVED USER 
    public function approvedUser($id){
        $approvedUserId = User::find($id);
        $approvedUserId->status = 1;
        $approvedUserId->save();
        toast('Success Toast','success');
        return back();
    }

    //** DECLINED USER 
    public function declinedUser($id){
        User::find($id)->delete();
        toast('Delete Request','error');
        return back();
    }
}
