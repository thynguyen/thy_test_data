<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Admin::create([
            'full_name' => 'Nguyen Van A', 
            'email' => 'superadmin@gmail.com',
            'username' => 'superadmin',
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
        ]);
    }
}
