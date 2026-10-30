<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 'USR-001',
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Administrator',
                'status' => 'Active',
            ],
            [
                'id' => 'USR-002',
                'name' => 'Ramon Cruz',
                'email' => 'ramon.cruz@example.com',
                'role' => 'Cashier',
                'status' => 'Active',
            ],
            [
                'id' => 'USR-003',
                'name' => 'Sofia Lim',
                'email' => 'sofia.lim@example.com',
                'role' => 'Manager',
                'status' => 'Active',
            ],
            [
                'id' => 'USR-004',
                'name' => 'Nathan Tan',
                'email' => 'nathan.tan@example.com',
                'role' => 'Cashier',
                'status' => 'Inactive',
            ],
            [
                'id' => 'USR-005',
                'name' => 'Patricia Flores',
                'email' => 'patricia.flores@example.com',
                'role' => 'Inventory Clerk',
                'status' => 'Pending',
            ],
        ];

        return view('accounts.users', compact('users'));
    }
}
