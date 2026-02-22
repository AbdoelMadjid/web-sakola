<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::findOrCreate('master');
        Role::findOrCreate('admin');

        $emailsToKeep = [
            'master@websakola.com',
            'administrator@websakola.com',
        ];

        User::whereNotIn('email', $emailsToKeep)->delete();

        $master = User::updateOrCreate([
            'email' => 'master@websakola.com',
        ], [
            'name' => 'Master Admin',
            'avatar' => 'admin/assets/media/avatars/300-1.jpg',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        $admin = User::updateOrCreate([
            'email' => 'administrator@websakola.com',
        ], [
            'name' => 'Admin',
            'avatar' => 'admin/assets/media/avatars/300-2.jpg',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        $master->syncRoles(['master']);
        $admin->syncRoles(['admin']);
    }
}
