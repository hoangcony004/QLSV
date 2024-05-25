<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Thêm dữ liệu mẫu vào bảng user
        DB::table('users')->insert([
            [
                'name' => 'Hoàng',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'r_password' => '12345678',
                'remember_token' => Str::random(10),
                'phone_number' => '0123456789',
                'gender' => 1,
                'address' => 'Admin Address',
                'dob' => '1980-01-01',
                'image' => 'admin.jpg',
                'role' => 1, // Đặt role cho admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User One',
                'username' => 'userone',
                'email' => 'userone@example.com',
                'password' => Hash::make('12345678'),
                'r_password' => '12345678',
                'remember_token' => Str::random(10),
                'phone_number' => '0123456789',
                'gender' => 1,
                'address' => 'Address 1',
                'dob' => '1990-01-01',
                'image' => 'userone.jpg',
                'role' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User Two',
                'username' => 'usertwo',
                'email' => 'usertwo@example.com',
                'password' => Hash::make('12345678'),
                'r_password' => '12345678',
                'remember_token' => Str::random(10),
                'phone_number' => '0123456789',
                'gender' => 0,
                'address' => 'Address 2',
                'dob' => '1991-02-02',
                'image' => 'usertwo.jpg',
                'role' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User Three',
                'username' => 'userthree',
                'email' => 'userthree@example.com',
                'password' => Hash::make('12345678'),
                'r_password' => '12345678',
                'remember_token' => Str::random(10),
                'phone_number' => '0123456789',
                'gender' => 1,
                'address' => 'Address 3',
                'dob' => '1992-03-03',
                'image' => 'userthree.jpg',
                'role' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User Four',
                'username' => 'userfour',
                'email' => 'userfour@example.com',
                'password' => Hash::make('12345678'),
                'r_password' => '12345678',
                'remember_token' => Str::random(10),
                'phone_number' => '0123456789',
                'gender' => 0,
                'address' => 'Address 4',
                'dob' => '1993-04-04',
                'image' => 'userfour.jpg',
                'role' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
