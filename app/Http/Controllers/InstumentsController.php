<?php

namespace App\Http\Controllers;

use App\Models\InstModel;
use App\Models\Instrument;
use Illuminate\Http\Request;


class InstumentsController extends Controller
{
    public function index()
    {
        if (\Illuminate\Support\Facades\Auth::user()->ust_id===2) {
            $models=InstModel::all();
            return view('authenticated.instruments.create',['models'=>$models],);
        }else{
            return redirect('/dashboard');
        }
    }
    public function create(Request $request)
    {   if(isset($request->model,$request->description)){
            $inst=new Instrument;
            $inst->description=$request->description;
            $inst->mod_id=$request->model;
            $inst->save();
            $models=InstModel::all();
            return view('authenticated.instruments.create',['models'=>$models],);
        
        }
    }
    public function modelIndex()
    {
       return view('authenticated.instruments.models');
    }
    public function modelCreate(Request $request)
    {
        if(isset($request->model)){
            $model= new InstModel;
            $model->model=$request->model;
            $model->save();
            return view('authenticated.instruments.models');
            exit();
    
        }
        return view('authenticated.instruments.models');
    }
}
