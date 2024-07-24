<?php

namespace Database\Seeders;

use App\Models\User;
use App\Http\Middleware\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User();
        $admin->name = "abdur";
        $admin->email = "abdur.cit.bd@gmail.com";
        $admin->password = Hash::make('password');
        $admin->designation = "Engineer"; 
        $admin->status = 1; 
        $admin->save();
    }
}
