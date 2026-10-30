<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('accounts')->insert([
            [
                'account_type' => 'customer',
                'name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '+63 917 555 0101',
                'role' => null,
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type' => 'customer',
                'name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@example.com',
                'phone' => '+63 918 555 0102',
                'role' => null,
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type' => 'user',
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'phone' => null,
                'role' => 'Administrator',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type' => 'user',
                'name' => 'Ramon Cruz',
                'email' => 'ramon.cruz@example.com',
                'phone' => null,
                'role' => 'Cashier',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
