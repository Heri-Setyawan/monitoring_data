<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'tool_id', 'voltage_rs', 'voltage_st','voltage_tr', 'voltage_rn',
        'voltage_sn', 'voltage_tn', 'power_factor', 'frequency',
    ];

    public function tool(){
        return $this->belongsTo(Tool::class, 'tool_id');
    }
}
