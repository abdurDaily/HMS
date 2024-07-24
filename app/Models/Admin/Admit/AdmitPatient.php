<?php

namespace App\Models\Admin\Admit;

use App\Models\Admin\Doctors\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmitPatient extends Model
{
    use HasFactory;

    public function doctors(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
