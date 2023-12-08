<?php

namespace App\Http\Controllers\Apl;

use App\Http\Controllers\Controller;
use App\Models\TestApi;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        $student= TestApi::all();
        return response()->json([
            'status'=>"test",
            'studentData'=>$student
        ]);
    }
    public function store(Request $request){
        $student = new TestApi();
        $student->name= $request->name;
        $student->age=$request->age;
        $res= $student->save();

        if ($res) {
            # code...
            return response()->json([
                'status'=> "added succefully",
                'data'=>$student
            ]);
        }
        else {
            return response()->json([
                'status'=>"not added data"
            ]);
        }

    }
}
