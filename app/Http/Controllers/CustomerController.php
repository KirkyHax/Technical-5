<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 'CUS-001',
                'name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '+63 917 555 0101',
                'status' => 'Active',
            ],
            [
                'id' => 'CUS-002',
                'name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@example.com',
                'phone' => '+63 918 555 0102',
                'status' => 'Active',
            ],
            [
                'id' => 'CUS-003',
                'name' => 'Angela Reyes',
                'email' => 'angela.reyes@example.com',
                'phone' => '+63 919 555 0103',
                'status' => 'Inactive',
            ],
            [
                'id' => 'CUS-004',
                'name' => 'Carlo Mendoza',
                'email' => 'carlo.mendoza@example.com',
                'phone' => '+63 920 555 0104',
                'status' => 'Active',
            ],
            [
                'id' => 'CUS-005',
                'name' => 'Leah Garcia',
                'email' => 'leah.garcia@example.com',
                'phone' => '+63 921 555 0105',
                'status' => 'Pending',
            ],
        ];

        return view('accounts.customers', compact('customers'));
    }
}
