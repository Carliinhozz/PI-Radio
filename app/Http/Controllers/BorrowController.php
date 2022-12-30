<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\InstModel;
use App\Models\Instrument;
use App\Models\User;
use App\Notifications\NewBorrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    public function index()
    {   
        $models=InstModel::all();
        return view('authenticated.borrow',['models'=>$models],);
    }
    public function list(Request $request)
    {
        $models=InstModel::all();
        $model=$request->model;
        $instruments=Instrument::where('mod_id',$model)->get();
        return view('authenticated.borrow',['instruments'=>$instruments, 'models'=>$models],);
    }
    public function confirm(Request $request)
    {
        if(isset($request->instrument)){
            $id=$request->instrument;
            $instrument=Instrument::where('id',$id)->get();
            return view('authenticated.confirmed',['instrument'=>$instrument],);
            
        }
        return view('authenticated.dashboard');
    }
    public function borrow(Request $request)
    {
        $borrow=new Borrow;
        $borrow->usr_id=$request->usr_id;
        $borrow->ins_id=$request->ins_id;
        $borrow->save();
            
        Auth::user()->notify(new NewBorrow(Instrument::find($request->ins_id), User::find($request->usr_id)));
        $models=InstModel::all();
        return view('authenticated.borrow',['models'=>$models],);


    }
}
// :where('mod_id',"=",$model);
