<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(){

        $employee = User::latest()->paginate();
        //$data = monitoring_db::all();
        //dd($employee);
        return view('employee',compact('employee'));
    }

    public function addemployee() {
        return view('addemployee');
    }

    public function insertemployee(Request $request) {
        //dd($request->all());
        //User::create($request->all());
        User::create([
            'name' => $request->name,
            'position' => $request->position,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('employee')->with('success','Data Berhasil di Input');
    }

    public function deleteemployee($id){
        $employee = User::find($id);
        $employee->delete();

        return redirect()->route('employee')->with('success','Data Berhasil di Delete');
    }

    public function editemployee($id){
        $employee = User::find($id);
        //dd($employee);

        return view('editemployee',compact('employee'));
    }

    public function updateemployee(Request $request, $id){
        $employee = User::find($id);
        $employee->update([
            'name' => $request->name,
            'position' => $request->position,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),]);

        return redirect()->route('employee')->with('success','Data Berhasil di Update');
    }
}
