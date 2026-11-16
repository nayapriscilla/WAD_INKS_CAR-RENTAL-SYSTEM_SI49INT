<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (! app()->environment(['local', 'testing'])) {
            return;
        }

        $admin = User::query()->firstOrNew(['email' => 'admin@carrental.test']);
        $admin->fill([
            'name' => 'Admin Car Rental',
            'password' => Hash::make('password'),
        ]);
        $admin->role = User::ROLE_ADMIN;
        $admin->email_verified_at ??= now();
        $admin->save();

        $user = User::query()->firstOrNew(['email' => 'user@carrental.test']);
        $user->fill([
            'name' => 'Regular User',
            'password' => Hash::make('password'),
        ]);
        $user->role = User::ROLE_USER;
        $user->email_verified_at ??= now();
        $user->save();
    }
}
