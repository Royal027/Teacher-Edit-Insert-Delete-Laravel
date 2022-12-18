<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $teacher = new Teacher();

        $teachers = $teacher::all();
        //return  $teachers = $teacher::find(3);
        // return  $teachers = $teacher::where('muellim', '!=', "Baxruz")->first();
        // return  $teachers = $teacher::where('muellim', '!=', "Baxruz")->where('yas', '>', 25)->get();
        // return  $teachers = $teacher::where('muellim', '!=', "Baxruz")->where('yas', '>', 25)->get();
        // return  $teachers = $teacher::where(['muellim' => "Baxruz", 'yas' => 27])->get();
        // return  $teachers = $teacher::where('muellim',  "Baxruz")->orwhere('muellim',  "Serxan")->get();
        // return $teachers = $teacher::Select('muellim', 'tel as telefon')->get();
        return view('teacher', compact('teachers'));
    }
    public function insert(Request $request)
    {
        $teacher = new Teacher();
        $teacher->muellim = $request->muellim;
        $teacher->haqqinda = $request->haqqinda;
        $teacher->tel = $request->tel;
        $teacher->yas = $request->yas;
        $teacher->save();

        return redirect()->route('teacher')->with('succses', 'Ugurla Elave Edildi');
    }
    public function delete($id)
    {
        Teacher::find($id)->delete();
        return redirect()->route('teacher');
    }
    public function make($id)
    {
        $teacher = Teacher::find($id);
        return view('edit', compact('teacher'));
    }
    public function edit(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->muellim = $request->muellim;
        $teacher->haqqinda = $request->haqqinda;
        $teacher->tel = $request->tel;
        $teacher->yas = $request->yas;
        $teacher->status = $request->status;
        $teacher->save();
        return redirect()->route('teacher');
    }
}
