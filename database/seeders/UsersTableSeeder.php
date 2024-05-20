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
                'r_password' => '12345678', // Dữ liệu mẫu cho cột r_password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User One',
                'email' => 'userone@example.com',
                'password' => Hash::make('12345678'),
                'r_password' => '12345678', // Thêm giá trị cho r_password
                'username' => 'userone',
                'role' => 2,
                'phone_number' => '0123456789',
                'gender' => 1,
                'address' => 'Address 1',
                'dob' => '1990-01-01',
                'image' => 'userone.jpg',
            ],
            [
                'name' => 'User Two',
                'email' => 'usertwo@example.com',
                'password' => Hash::make('12345678'),
                'r_password' => '12345678', // Thêm giá trị cho r_password
                'username' => 'usertwo',
                'role' => 3,
                'phone_number' => '0123456789',
                'gender' => 0,
                'address' => 'Address 2',
                'dob' => '1991-02-02',
                'image' => 'usertwo.jpg',
            ],
            [
                'name' => 'User Three',
                'email' => 'userthree@example.com',
                'password' => Hash::make('12345678'),
                'r_password' => '12345678', // Thêm giá trị cho r_password
                'username' => 'userthree',
                'role' => 4,
                'phone_number' => '0123456789',
                'gender' => 1,
                'address' => 'Address 3',
                'dob' => '1992-03-03',
                'image' => 'userthree.jpg',
            ],
            [
                'name' => 'User Four',
                'email' => 'userfour@example.com',
                'password' => Hash::make('12345678'),
                'r_password' => '12345678', // Thêm giá trị cho r_password
                'username' => 'userfour',
                'role' => 5,
                'phone_number' => '0123456789',
                'gender' => 0,
                'address' => 'Address 4',
                'dob' => '1993-04-04',
                'image' => 'userfour.jpg',
            ],
        ]);
    }
}
