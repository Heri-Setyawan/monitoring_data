<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MonitorResource;
use App\Models\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MonitorController extends Controller
{

    public function index(){
        $list = Monitor::latest()->paginate(5);
        return new MonitorResource(true, 'List Data Posts', $list);
    }

    public function store(Request $request){
        $validasi = Validator::make($request->all(), [
            'tool_id'       => 'required',
            'voltage_rs'    => 'required',
            'voltage_st'    => 'required',
            'voltage_tr'    => 'required',
            'voltage_rn'    => 'required',
            'voltage_sn'    => 'required',
            'voltage_tn'    => 'required',
            'power_factor'  => 'required',
            'frequency'     => 'required',
        ]);
        if ($validasi->fails()){
            return response()->json($validasi->errors(), 422);
        }else {
            $data = $request->all();
            $insert = Monitor::create($data);
            return new MonitorResource(true, 'Data berhasil tersimpan', $insert);
        }
    }
}
