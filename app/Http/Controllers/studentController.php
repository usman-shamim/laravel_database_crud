<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();
        return view('students.index', compact('students'));
    }

    public function store(Request $request)
    {
        DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return redirect('/students')->with('success','Student Added Successfully');
    }

    public function edit($id){
        $student = DB::table('students')->where('id',$id)->first();
        return view('students.edits', compact('student'));
    }

    public function update(Request $request, $id)
    {
        DB::table('students')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

        return redirect('/students')->with('success', 'Student Update Successfully');
    }

    public function destroy($id){
        DB::table('students')->where('id',$id)->delete();

        return redirect('/students')->with('Success', 'Students Deleted Successfully');
    }
}
