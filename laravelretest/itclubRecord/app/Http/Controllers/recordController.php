<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class recordController extends Controller
{
    
    function create(Request $request){
        $date = $request->input('date');
        $title = $request->input('title');
        $description = $request->input('description');
        $data = array('date'=>$date, 'title'=>$title, 'description'=>$description, 'created_at'=>date('Y-m-d H:i:s'), 'modified_at'=>date('Y-m-d H:i:s'));
        DB::table('records')->insert($data);
        $records = DB::table('records')->get();

        return view('welcome', ['records'=>$records]);
    }
    
    function index(){
        $records = DB::table('records')->get();
        return view('welcome', ['records'=>$records]);
    }
    
    function delete($id){
        DB::table('records')->where('id',$id)->delete();
        $records = DB::table('records')->get();
        return view('welcome', ['records'=>$records]);
    }
}
