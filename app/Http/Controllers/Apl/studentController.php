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

    public function search($id){
        $student = TestApi::find($id);

        if ($student) {
            return response()->json([
                'status'=>'find data',
                'data'=>$student
            ]);
        }
    }

    public function delete($id){
        $res= TestApi::find($id)->delete();
        if ($res) {
            return response()->json([
                'status'=>'Deleted student data',
            ]);
        }
        else {
            return response()->json([
                'status'=>'data not found'
            ]);
        }
    }
}
