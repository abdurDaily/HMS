<?php

namespace Database\Seeders;

use App\Models\Admin\Doctors\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctor = new Doctor();
        $doctor->d_name = "Dr. Md. Abdur Rahman";
        $doctor->d_name_slug = "Dr.-Md.-Abdur-Rahman";
        $doctor->d_qualifications = "MBBS, FCPS, MD";
        $doctor->d_fee = "500";
        $doctor->d_author = "Abdur";
        $doctor->d_checkup = "Sun. Tue. Thu. (5:00 AM - 8:00 PM)";
        $doctor->d_phone = "+880 1647465050";
        $doctor->save();
    }
}
