<?php

namespace App\Models\Admin\Doctors;

use App\Models\Admin\Admit\AdmitPatient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function patient(){
        return $this->hasMany(AdmitPatient::class);
    }  
  
}
