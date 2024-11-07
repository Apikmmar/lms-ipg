<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $now = now();

        for ($i=0; $i < 10; $i++) { 
            $randName = Arr::random(['Faris', 'Sha']);
            $randomDOB = Carbon::create(rand(1974, 2000), rand(1, 12), rand(1, 28));
            $icFormat = $randomDOB->format('ymd') . str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT) . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
            $randGender = Arr::random(['Men', 'Women']);
            $randEmail = $randName.$i.'@gmail.com';
            $contact = $i.$i.$i.$i.$i.$i.$i.$i.$i.$i;
            $password = $i.$i.$i.$i.$i;

            DB::table('users')->insert([
                'role_id' => rand(1,3),
                'unit_id' => NULL,
                'name' => $randName,
                'ic' => $icFormat,
                'gender' => $randGender,
                'email' => $randEmail,
                'contact' => $contact,
                'staff_id' => NULL,
                'student_id' => NULL,
                'password' => Hash::make($password),
                'photo_path' => NULL,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
