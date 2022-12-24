<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


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
        $validated = Validator::make($request->all(),[
           'email' => 'required|unique:users',
       ]);
        if($validated->fails()){
            return redirect()->route('employee')->with('failed',$validated->errors());
        }

       $user = User::create([
            'name' => $request->name,
            'position' => $request->position,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if($request->input('role') == 'user'){
            $user->assignRole('user');
        }else{
            $user->assignRole('admin');
        }

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
        $pass = ($request->password == $employee->password) ? $request->password : bcrypt($request->password);
        $employee->update([
            'name' => $request->name,
            'position' => $request->position,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email,
            'password' => $pass,
            ]);

        if($request->input('role') == 'user'){
            $employee->syncRoles('user');
        }else{
            $employee->syncRoles('admin');
        }

        return redirect()->route('employee')->with('success','Data Berhasil di Update');
    }
}
